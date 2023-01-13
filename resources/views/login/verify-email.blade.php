@extends('layout.index')
@section('container')
    <div class="vh-100 w-100 d-flex align-items-center justify-content-center">
        <form action="{{ route('verification.send') }}" method="POST" class="d-flex flex-column">
            @csrf

            <label for="btn" class="fw-bold text-light mx-3 mb-2">Hi <span class="underline">{{ auth()->user()->first_name }}</span>, verification email has been send it to ur email, please check ur email</label>

            <button id="btn" class="btn btn-dark fw-bold" style="letter-spacing: 1.5px">click here to send verification email</button>

        </form>
    </div>
@endsection
