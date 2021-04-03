<?php


namespace App\Http\Repositories;


use App\Models\Bill_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class Bill_detailRepository
{


    function getAll(){
        return Bill_detail::all();
    }

    function findById($id){
        return Bill_detail::findOrFail($id);
    }

    function store($bill_details)
    {
        DB::beginTransaction();
        try {
            $bill_details->save();
//            $product->category()->sync($categories);
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
//            DB::rollBack();
        }

    }

    function delete($bill_details){
        DB::beginTransaction();
        try {
            $bill_details->delete();
            DB::commit();
        }catch (Exception $exception){
            dd($exception->getMessage());
        }
    }
}
