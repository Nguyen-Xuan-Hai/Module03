@extends('home')
@section('page_title')
    Tao moi san pham
@endsection
@section('content')
    {{--    @include('layouts.core.navbar')--}}
    <div class="card mt-2">
        <div class="card-body">
            <form method="post" action="{{ route('customers.update',$customers->id) }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{ $customers->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" value="{{ $customers->address }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
