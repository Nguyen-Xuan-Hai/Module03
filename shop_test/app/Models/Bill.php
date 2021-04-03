<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'datepay',
        'status',
        'customer_id'
    ];



    function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    function bill_details(){
        return $this->hasMany(Bill_detail::class,'bill_id');
    }
}
