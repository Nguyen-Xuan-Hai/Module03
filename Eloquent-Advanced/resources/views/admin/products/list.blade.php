@extends('home')
@section('page_title')
    Danh sach san pham
@endsection
@section('content')
    <h1 class="mt-4">Danh sach san pham</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <a href="{{ route('products.create') }}" class="btn btn-primary">ADD</a>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>content</th>
                        <th>price</th>
                        <th>category</th>
                        <th>image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>content</th>
                        <th>price</th>
                        <th>category</th>
                        <th>image</th>
                        <th></th>
                    </tr>
                    </tfoot>
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
                                <a onclick="return confirm('Are you sure delete user: {{ $product->name }}')"
                                   class="btn btn-danger" href="{{ route('products.delete', $product->id) }}">Delete</a>
                                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                {{ $products->links("pagination::bootstrap-4") }}--}}
            </div>
        </div>
    </div>
@endsection
