<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Of_Good extends Model
{
    use HasFactory;
    protected $table = 'type_of_good';

    protected $fillable = [
        'type_of_good_name',
    ];
}
