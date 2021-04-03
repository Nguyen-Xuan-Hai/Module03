@extends('home')
@section('page_title')
    Tao moi san pham
@endsection
@section('content')
    {{--    @include('layouts.core.navbar')--}}
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="{{ route('bill_details.store') }}">
                @csrf
                <div class="form-group">
                    <label>Product</label>
                    <select class="custom-select" name="product_id">
                        <option selected>Choose...</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Bill</label>
                    <select class="custom-select" name="bill_id">
                        <option selected>Choose...</option>
                        @foreach($bills as $bill)
                            <option value="{{ $bill->id }}">{{ $bill->customers->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" name="totalQty" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <select class="custom-select" name="totalPrice">
                        <option selected>Choose...</option>
                        @foreach($products as $product)
                            <option value="{{ $product->price }}">{{ $product->name }}:{{ $product->price }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
