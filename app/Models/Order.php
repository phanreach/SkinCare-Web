<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',  
        'customer_name',
        'phone_number',
        'quantity',
        'total_price',
        'order_date',
        'address',
        'status',
        'payment_status',
        'notes'
    ];
    
}
