<?php


namespace App\Http\Repositories;


use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ProductRepository
{
    function getAll(){
        return Product::all();
    }

    function findById($id){
        return Product::findOrFail($id);
    }

    function store($product)
    {
        DB::beginTransaction();
        try {
            $product->save();
//            $product->category()->sync($categories);
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
//            DB::rollBack();
        }

    }

    function delete($product){
        DB::beginTransaction();
        try {
            Storage::disk('public')->delete($product->img);
            $product->delete();
            DB::commit();
        }catch (Exception $exception){
            dd($exception->getMessage());
        }
    }

}
