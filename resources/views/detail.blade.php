@extends('master')
@section('content')
    <div class="container">
        <div class="row detail-page">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                {{--                <a href="/">Go back</a>--}}
                <div class="collapse show" id="collapseExample_2">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><b>Name</b></td>
                                    <td>{{$product['name']}}</td>
                                </tr>
                                <tr>
                                    <td><b>Details</b></td>
                                    <td>{{$product['description']}}</td>
                                </tr>
                                <tr>
                                    <td><b>Category</b></td>
                                    <td>{{$product['category']}}</td>
                                </tr>
                                <tr>
                                    <td><b>Price</b></td>
                                    <td>{{$product['price']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
