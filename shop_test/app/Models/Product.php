<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'content',
        'price',
        'category_id'
    ];


    function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    function bill_details(){
        return $this->hasMany(Bill_detail::class,'product_id');
    }
}
