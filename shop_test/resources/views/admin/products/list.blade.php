@extends('home')
@section('page_title')
    Danh sach san pham
@endsection
@section('content')

<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Products
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">ADD</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Image</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->content }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->category->name ?? ''}}</td>
                                {{--                            <td>{{  $product->category->name ?? '' }}</td>--}}
                                <td><img src="{{asset('storage/'.$product->img)}}" width="50px"></td>
                                <td>
                                    <a onclick="return confirm('Are you sure delete : {{ $product->name }}')"
                                       class="btn btn-danger" href="{{ route('products.delete', $product->id) }}">Delete</a>
                                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                <div class="d-block text-center card-footer">--}}
{{--                    <button class="btn-wide btn btn-success">Save</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>



@endsection
