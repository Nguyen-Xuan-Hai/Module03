<?php

namespace App\Http\Controllers;

use App\Http\Services\BillService;
use App\Models\Customer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //
    protected BillService $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    function index(){
//        $customers = Customer::all();
        $bills = $this->billService->getAll();
        return view('admin.bills.list',compact('bills'));
    }

    function create(){
        $customers = Customer::all();
        return view('admin.bills.add',compact('customers'));
    }

    function store(Request $request){
        $this->billService->store($request);
        return redirect()->route('bills.index');
    }

    function delete($id){
        $bills = $this->billService->findById($id);
        $this->billService->delete($bills);
        return redirect()->route('bills.index');
    }

    function edit($id){
        $customers = Customer::all();
        $bills = $this->billService->findById($id);
//        dd($bills);
        return view('admin.bills.edit',compact('bills','customers'));
    }

    function update($id,Request $request){
//        dd($request,$id);
        $this->billService->update($id,$request);
        return redirect()->route('bills.index');
    }
}
