<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_Request extends Model
{
    use HasFactory;
    protected $table = 'delivery_request';

    protected $fillable = [
        'pickup_id',
        'delivery_id',
        'deliver_status_id',
        'type_of_good_id',
        'delivery_provider_id',
        'priority_id',
        'package_info_id',
        'shipment_pick_up_date',
        'shipment_pick_up_time',
    ];

    // public function status()
    // {
    //     return $this->belongsTo('delivery_status', 'delivery_status_id');
    // }

    
}

    