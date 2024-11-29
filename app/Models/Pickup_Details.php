<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup_Details extends Model
{
    use HasFactory;
    protected $table = 'pickup_details';

    protected $fillable = [
        'pickup_address',
        'pickup_name',
        'pickup_contact',
        'pickup_email',
    ];
}
