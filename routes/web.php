<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Delivery_Requset_Controller;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(Delivery_Requset_Controller::class)->group(function () {
    Route::get('/get_details', 'getDetails');
    Route::get('/save_delivery_requset', 'saveDeliveryRequest');
    Route::get('/change_delivery_status', 'changeDeliveryStatus');

});



