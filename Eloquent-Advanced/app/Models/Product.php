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
        'price',
        'content',
        'category_id'
    ];

    function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

//    function getId($id){
//        return Product::findOrFail($id);
//    }
//
//    function getList(){
//        return Product::all();
//    }

}
