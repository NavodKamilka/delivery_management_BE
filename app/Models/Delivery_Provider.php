<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_Provider extends Model
{
    use HasFactory;
    protected $table = 'delivery_provider';

    protected $fillable = [
        'delivery_provider_name',
    ];
}
