@extends('layout.index')
@section('container')
    <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="{{ route('Auth') }}">
            @csrf
            <div class="d-flex flex-column">
                <input class="form-control" placeholder="email . . ." name="email" type="email">
                <input class="form-control my-2" placeholder="password . . ." name="password" autocomplete="current-password" type="password">
            </div>
            <div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('signUp_Route') }}" class="btn btn-dark">Register</a>
                    <button class="btn btn-dark" type="submit">signIn</button>
                </div>
            </div>
        </form>
    </div>
@endsection
