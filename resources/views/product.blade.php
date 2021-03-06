@extends('master')
@section('content')
{{--    <h2>Hello {{auth()->user()->name}}</h2>--}}
    <div class="container custom-product">
        <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($products as $product)
                    <div class="carousel-item {{$product['id']==1 ? 'active' : ''}}">
                        <a href="detail/{{$product['id']}}">
                            <img class="d-block w-100 slider-img" src="{{$product['gallery']}}"
                                 alt="First slide">
                            <div class="carousel-caption">
                                <h3 class="product-text">{{$product['name']}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <h3 class="text-center">Trending Items</h3>
    <div class="container trending-wrapper">
        @foreach($products as $product)
            <a href="detail/{{$product['id']}}">
                <div class="trending-items">
                    <img class="trending-images" src="{{$product['gallery']}}">
                    <p class="text-center">{{$product['name']}}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
