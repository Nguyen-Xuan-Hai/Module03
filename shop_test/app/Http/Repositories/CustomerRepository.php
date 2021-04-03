<?php


namespace App\Http\Repositories;


use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class CustomerRepository
{
    function getAll(){
        return Customer::all();
    }

    function findById($id){
        return Customer::findOrFail($id);
    }

    function store($customers)
    {
        DB::beginTransaction();
        try {
            $customers->save();
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
//            DB::rollBack();
        }

    }

    function delete($customers){
        DB::beginTransaction();
        try {
            $customers->delete();
            DB::commit();
        }catch (Exception $exception){
            dd($exception->getMessage());
        }
    }
}
