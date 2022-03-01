@extends('master')
@section('content')
    <div class="custom-cart">
        <div class="col-sm-10">
            <a class="btn btn-success orderNow" href="ordernow">Order Now</a>
            @foreach($products as $item)
                <div class="row searched-items cart-list-divider">
                    <div class="col-sm-4 py-3">
                        <a href="detail/{{$item->id}}">
                            <img class="cart-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                        <h5>{{$item->price}}</h5>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

