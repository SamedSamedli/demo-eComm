@extends('master')
@section('content')
{{--    @if($errors->any())--}}
{{--        <ul>--}}
{{--            {{!! implode('', $errors->all('<li>:message</li>')) !!}}--}}
{{--        </ul>--}}
{{--    @endif--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h4>Register</h4>
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
