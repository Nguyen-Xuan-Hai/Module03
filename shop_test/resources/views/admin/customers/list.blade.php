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
                        <a href="{{ route('customers.create') }}" class="btn btn-primary">ADD</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $key => $customer)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center">{{ $customer->name }}</td>
                                <td class="text-center">{{ $customer->address }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure delete : {{ $customer->name }}')"
                                       class="btn btn-danger" href="{{ route('customers.delete', $customer->id) }}">Delete</a>
                                    <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
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
