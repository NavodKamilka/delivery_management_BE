<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery_Request;
use Illuminate\Support\Facades\Log;

class Delivery_Requset_Controller extends Controller
{
    public function getDetails(Request $request)
    {
        try {
            $page = $request->input('page', 1); 
            $limit = $request->input('limit', 10); 
            Log::info("Hit");
            //$delivery_request = Delivery_Request::with(['status'])->paginate($limit, ['*'], 'page', $page);
            $delivery_request = Delivery_Request::paginate($limit, ['*'], 'page', $page);

            return response()->json([
                'data' => $delivery_request->items(),
                'current_page' => $delivery_request->currentPage(),
                'per_page' => $delivery_request->perPage(),
                'total' => $delivery_request->total()
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to Load Data'], 500);
        }
    }

    public function saveDeliveryRequest(Request $request)
    {
        Log::info("Hit");
        try {
            $validatedData = $request->validate([
                'pickup_id' => 'required|integer',
                'delivery_id' => 'required|integer',
                'deliver_status_id' => 'required|integer',
                'type_of_good_id' => 'required|integer',
                'delivery_provider_id' => 'required|integer',
                'priority_id' => 'required|integer',
                'package_info_id' => 'required|integer',
                'shipment_pick_up_date' => 'required|date',
                'shipment_pick_up_time' => 'required|date_format:H:i:s',
            ]);

            $deliveryRequest = Delivery_Request::create($validatedData);

            return response()->json(['data' => $deliveryRequest, 'message' => 'Delivery Request created successfully.'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create delivery request.'], 500);
        }
    }

    public function changeDeliveryStatus(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'delivery_id' => 'required|integer',
                'deliver_status_id' => 'required|integer',
            ]);

            $deliveryRequest = Delivery_Request::find($validatedData['delivery_id']);

            Log::info( $deliveryRequest);

            if (!$deliveryRequest) {
                return response()->json(['error' => 'Delivery request not found.'], 404);
            }

            Log::info("Hit11111");

            if ($deliveryRequest->deliver_status_id === 2 || $deliveryRequest->deliver_status_id === 3) {
                return response()->json(['error' => 'Delivery status can not be changed'], 400);
            }

            Log::info("Hit2222");

            if ($validatedData['deliver_status_id'] == 3) {
                $deliveryRequest->deliver_status_id = 3;
                $deliveryRequest->save();

                return response()->json(['data' => $deliveryRequest, 'message' => 'Delivery status updated to Cancel successfully.'], 200);
            }

            return response()->json(['error' => 'Invalid delivery status ID. Only "Cancel" (ID 3) is allowed.'], 400);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update delivery status.'], 500);
        }
    }
    
}
