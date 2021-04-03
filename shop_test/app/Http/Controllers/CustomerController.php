<?php

namespace App\Http\Controllers;

use App\Http\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    protected CustomerService $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    function index(){
        $customers = $this->customerService->getAll();
        return view('admin.customers.list',compact('customers'));
    }

    function create(){
//        $categories = Category::all();
        return view('admin.products.add');
    }

    function store(Request $request){
        $this->customerService->store($request);
        return redirect()->route('customers.index');
    }

    function delete($id){
        $customers = $this->customerService->findById($id);
        $this->customerService->delete($customers);
        return redirect()->route('customers.index');
    }

    function edit($id){
        $customers = $this->customerService->findById($id);
//        $categories = Category::all();
        return view('admin.customers.edit',compact('customers',));
    }

    function update($id,Request $request){
        $this->customerService->update($id,$request);
        return redirect()->route('customers.index');
    }
}
