<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ProductController extends Controller
{
    //
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    function index(){
        $products = $this->productService->getAll();
        return view('admin.products.list',compact('products'));
    }

    function create(){
        $categories = Category::all();
        return view('admin.products.add',compact('categories'));
    }

    function store(Request $request){
        $this->productService->store($request);
        return redirect()->route('products.index');
    }

    function delete($id){
        $product = $this->productService->findById($id);
            $this->productService->delete($product);
        return redirect()->route('products.index');
    }

    function edit($id){
        $product = $this->productService->findById($id);
        $categories = Category::all();
        return view('admin.products.edit',compact('product','categories'));
    }

    function update($id,Request $request){
        $this->productService->update($id,$request);
        return redirect()->route('products.index');
    }
}
