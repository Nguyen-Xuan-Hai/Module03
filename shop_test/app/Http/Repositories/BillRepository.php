<?php


namespace App\Http\Repositories;


use App\Models\Bill;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class BillRepository
{
    function getAll(){
        return Bill::all();
    }

    function findById($id){
//        dd($id);
        return Bill::findOrFail($id);
    }

    function store($bills)
    {
        DB::beginTransaction();
        try {
            $bills->save();
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
//            DB::rollBack();
        }

    }

    function delete($bills){
        DB::beginTransaction();
        try {
            $bills->delete();
            DB::commit();
        }catch (Exception $exception){
            dd($exception->getMessage());
        }
    }
}
