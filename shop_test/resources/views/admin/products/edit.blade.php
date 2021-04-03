@extends('home')
@section('page_title')
    Danh sach nguoi dung
@endsection
@section('content')
    {{--    @include('layouts.core.navbar')--}}

    <div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control @error('name') border-danger  @enderror">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select" name="category_id">
                        @foreach($categories as $category)
                            <option
                                @if($category->id == $product->category_id)
                                selected
                                @endif
                                value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" value="{{ $product->description }}"  rows="3">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="form-control" name="content" value="{{ $product->content }}"  rows="3">{{ $product->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="img" class="form-control">
                    <img src="{{asset('storage/'.$product->img)}}" style="width: 80px">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
