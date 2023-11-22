<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'order_number',
        'phone',
        'address',
        'country',
        'city',
        'postal_code',
        'user_id'
    ];
}
