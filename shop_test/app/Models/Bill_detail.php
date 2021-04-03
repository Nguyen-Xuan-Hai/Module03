<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'totalQty',
        'totalPrice',
        'bill_id',
        'product_id'
    ];

    function bills(){
        return $this->belongsTo(Bill::class,'bill_id');
    }

    function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
