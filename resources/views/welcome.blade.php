@extends('layout.index')
@section('container')
    <div class="d-flex vh-100 align-items-center justify-content-center flex-column">

        <div class="badge fw-bold bg-dark p-2" style="letter-spacing: 1px">
            Server running . . .
        </div>

        <div>

            <div class="container-fluid">
                <div class="p-2 my-3 bg-slate-700 rounded animate-pulse">
                    <p class="text-light fw-bold d-flex justify-content-center flex-column">

                        <span class="d-flex mb-1 justify-content-center">
                            if u wanna test api then use:
                        </span>
                        <div>
                            <span class="badge bg-primary">GET</span>
                            <span class="badge bg-dark" style="user-select: text">{{ Request::root() }}/test</span>
                        </div>

                    </p>
                </div>
                {{-- login form --}}

                <div class="d-flex justify-content-end">
                    <form action="{{ route('login') }}" method="GET">
                        <button class="btn btn-dark fw-bold" style="letter-spacing: 1px">
                            @auth
                                Dashboard
                            @else
                                Login
                            @endauth
                        </button>
                    </form>
                </div>
            </div>

            {{-- ngrok-skip-browser-warning --}}

        </div>
    </div>
@endsection
