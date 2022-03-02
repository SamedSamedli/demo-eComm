@extends('master')
@section('content')
    <div class="container col-sm-4 my-5">
        <table class="table">
            <tbody>
            <tr>
                <td>Amount</td>
                <td>${{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>${{$total+10}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/action_page.php">
                <div class="form-group">
                    <textarea placeholder="Enter your address" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment method: </label> <br>
                    <input type="radio" name="payment"> <span>Online payment</span> <br> <br>
                    <input type="radio" name="payment"> <span>Paypal</span> <br> <br>
                    <input type="radio" name="payment"> <span>Payment on delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
@endsection

