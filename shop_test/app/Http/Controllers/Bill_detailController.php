<?php

namespace App\Http\Controllers;

use App\Http\Services\Bill_detailService;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Http\Request;

class Bill_detailController extends Controller
{
    //
    protected Bill_detailService $bill_detailService;

    public function __construct(Bill_detailService $bill_detailService)
    {
        $this->bill_detailService = $bill_detailService;
    }

    function index(){
        $bill_details = $this->bill_detailService->getAll();
        return view('admin.bill_details.list',compact('bill_details'));
    }

    function create(){
        $bills = Bill::all();
        $products = Product::all();
        return view('admin.bill_details.add',compact('bills','products'));
    }

    function store(Request $request){
        $this->bill_detailService->store($request);
        return redirect()->route('bill_details.index');
    }

    function delete($id){
        $bill_details = $this->bill_detailService->findById($id);
        $this->bill_detailService->delete($bill_details);
        return redirect()->route('bill_details.index');
    }

    function edit($id){
        $bill_details = $this->bill_detailService->findById($id);
        $bills = Bill::all();
        $products = Product::all();
        return view('admin.bill_details.edit',compact('bill_details','bills','products'));
    }

    function update($id,Request $request){
        $this->bill_detailService->update($id,$request);
        return redirect()->route('bill_details.index');
    }
}
