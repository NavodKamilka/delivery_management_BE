<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_Details extends Model
{
    use HasFactory;
    protected $table = 'delivery_details';

    protected $fillable = [
        'delivery_address',
        'delivery_name',
        'delivery_contact',
        'delivery_email',
    ];
}
