@extends('master')
@section('content')
    <div class="container col-sm-8 my-5">
        <h4 class="text-center my-5">My orders</h4>
        @foreach($orders as $item)
            <div class="row searched-items cart-list-divider">
                <div class="col-sm-4 py-3">
                    <a href="detail/{{$item->id}}">
                        <img class="cart-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-3">
                    <h2>Name: {{$item->name}}</h2>
                    <p>Delivery Status: {{$item->status}}</p>
                    <p>Address: {{$item->address}}</p>
                    <p>Payment Status: {{$item->payment_status}}</p>
                    <p>Payment Method: {{$item->payment_method}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection

