@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
                <p>{{$product['name']}}</p>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
@endsection
