@extends('layout.index')
@section('container')
    <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="d-flex flex-column">
                <input class="form-control my-1" placeholder="first name . . ." name="first_name" type="text">
                <input class="form-control my-1" placeholder="last name . . ." name="last_name" type="text">

                <select class="form-select" name="gender">
                    <option value="male" selected>male</option>
                    <option value="female">female</option>
                </select>
                {{-- <input class="form-control my-1" placeholder="gender" name="gender" type="text"> --}}


                <input class="form-control my-1" placeholder="email . . ." name="email" type="email">
                <input class="form-control my-1" placeholder="password . . ." name="password" autocomplete="current-password" type="password">
                <input class="form-control my-1 mb-2" placeholder="confirm password . . ." name="confirm_password" autocomplete="current-password" type="password">
            </div>
            <div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('login') }}" class="btn btn-dark">login</a>
                    <input class="btn btn-dark" value="Register" type="submit">
                </div>
            </div>
        </form>
    </div>
@endsection
