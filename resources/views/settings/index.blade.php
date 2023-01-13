@extends('layout.index')
@section('container')
    <div class="d-flex vh-100 align-items-center justify-content-center flex-column">
        {{-- <div class="d-flex flex-column p-2 position-fixed left-0 m-2 top-0">
            <div>
                <form action="{{ route('logout') }}" method="GET">
                    <button class="badge bg-primary cursor-pointer " style="letter-spacing: 1.3px">
                        SignOut
                    </button>
                </form>
            </div>

            <div>
                <form action="{{ route('Home') }}" method="GET">
                    <button class="badge bg-primary cursor-pointer " style="letter-spacing: 1.3px">
                        Home
                    </button>
                </form>
            </div>

        </div> --}}

        {{-- main page --}}
        <div>
            <div class="d-flex bg-dark text-light rounded mb-2">
                <div class="p-1 mx-2">
                    Hi {{ auth()->user()->first_name }} ,Welcome to {{ env('APP_NAME') }}
                </div>
            </div>

            <form action="{{ route('Docs') }}" class="d-flex justify-content-center" method="GET">
                <button  class="w-100 mb-2 btn btn-dark d-flex align-items-center justify-content-center">
                    <div class="me-1">
                        <i class='bx bxs-book'></i>
                    </div>
                    <span class="fw-bold" style="letter-spacing: 1px">Docs</span>
                </button>
            </form>

            <form action="{{ route('Files') }}" class="d-flex justify-content-center" method="GET">
                <button  class="w-100 mb-2 btn btn-dark d-flex align-items-center justify-content-center">
                    <div class="me-1">
                        <i class='bx bx-file'></i>
                    </div>
                    <span class="fw-bold" style="letter-spacing: 1px">Files</span>
                </button>
            </form>


            {{-- menu --}}
            <div class="bg-dark rounded p-1 mb-2 d-flex justify-content-between">

                <form action="{{ route('logout') }}" class="d-flex align-items-center" method="GET">
                    <button class="badge bg-primary cursor-pointer" style="letter-spacing: 1.3px">
                        SignOut
                    </button>
                </form>

                <form action="{{ route('Home') }}" class="d-flex align-items-center" method="GET">
                    <button class="badge bg-primary cursor-pointer" style="letter-spacing: 1.3px">
                        Home
                    </button>
                </form>
            </div>
            {{-- title --}}
            <div class="d-flex">
                <div class="badge bg-primary p-2 me-2">
                    BETA
                </div>

                <div class="badge fw-bold bg-dark py-2 w-100" style="letter-spacing: 1px">
                    create new DB for ur project
                </div>
            </div>

            {{-- container --}}
            <livewire:add-d-b />


            {{-- footer / list of DataBases  --}}
            {{-- <div>

            </div> --}}

        </div>
        {{-- end main --}}
    </div>
@endsection
