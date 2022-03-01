@extends('master')
@section('content')
    <div class="container custom-cart">
        <div class="col-sm-10">
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
                        <button class="btn btn-warning">Remove from Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

