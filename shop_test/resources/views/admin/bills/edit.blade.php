@extends('home')
@section('page_title')
    Tao moi san pham
@endsection
@section('content')
    {{--    @include('layouts.core.navbar')--}}
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="{{ route('bills.update'),$bills->id }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" name="datepay"  value="{{ $bills->datepay }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" name="datepay"  value="{{ $bills->datepay }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="custom-select" name="status">
                        @foreach($customers as $customer)
                            <option
                                @if($customer->id == $customer->customer_id)
                                selected
                                @endif
                                value="{{ $customer->id }}">{{ $customer->status }}</option>
                        @endforeach
                    </select>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label>Status</label>--}}
{{--                    <select class="custom-select" name="status">--}}
{{--                        <option selected>Choose...</option>--}}
{{--                        <option>Đang duyệt</option>--}}
{{--                        <option>Đang giao</option>--}}
{{--                        <option>Hoàn thành</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
