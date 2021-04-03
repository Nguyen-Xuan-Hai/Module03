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
                        <a href="{{ route('bill_details.create') }}" class="btn btn-primary">ADD</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Bill</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bill_details as $key => $bill_detail)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center">{{ $bill_detail->products->name ?? ''}}</td>
                                <td class="text-center">{{ $bill_detail->bills->customers->name }}</td>
                                <td class="text-center">{{ $bill_detail->totalQty }}</td>
                                <td class="text-center">{{ $bill_detail->totalPrice }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure delete : {{ $bill_detail->products->name ?? '' }}')"
                                       class="btn btn-danger" href="{{ route('bill_details.delete', $bill_detail->id) }}">Delete</a>
                                    <a class="btn btn-primary" href="{{ route('bill_details.edit', $bill_detail->id) }}">Edit</a>
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
