{{-- @extends('layout.index')
@section('container')
<div class="w-100 vh-100 d-flex justify-content-center align-items-center flex-column">

    <div class="bg-dark p-2 rounded text-light d-flex flex-column justify-content-center mb-2">
        <div class="d-flex">
            <div class="me-1">
                <i class='bx bxs-book'></i>
            </div>
            <span>Documentation of <a href="{{ route('Home') }}" class="underline">{{ env('APP_NAME') }}</a> api</span>
        </div>
    </div>


    <div class="d-flex flex-column overflow-scroll hide-scroll h-50">




        <div class="bg-dark rounded overflow-scroll hide-scroll">


                <div class="text-light px-2">

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                Login to this site using api
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/login</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">email , password</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">success , status , access_token , token_type , expires_in</p>
                            </div>
                        </p>
                    </div>

                    <hr>

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                Register to this site using api
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/register</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">first_name , last_name , gender , email , password , confirm_password</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">success , status , access_token , token_type , expires_in</p>
                            </div>
                        </p>
                    </div>

                    <hr>

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                create new Table storage
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/createTable/{tableName}/{path}</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">uri :</span>
                                <p class="badge">tableName , path (not required)</p>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">name</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">message , status</p>
                            </div>
                        </p>
                    </div>

                    <hr>

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                get files and dirs from ur table storage
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/getStorage/{tableName}/{path}</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">uri :</span>
                                <p class="badge">tableName , path (not required)</p>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">handel</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">path , data , success , status</p>
                            </div>
                        </p>
                    </div>

                    <hr>

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                set new file or folder to ur table storage
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/setStorage/{tableName}/{path}</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">uri :</span>
                                <p class="badge">tableName , path (not required)</p>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">handel , file , folder</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">path , data , success , status</p>
                            </div>
                        </p>
                    </div>

                    <hr>

                    <div class="p-2 my-3 bg-slate-700 rounded">
                        <p class="text-light fw-bold d-flex justify-content-center flex-column">

                            <span class="d-flex mb-1 justify-content-start">
                                delete file or folder from ur storage
                            </span>
                            <div>
                                <span class="badge bg-primary mb-1">POST</span>
                                <span class="badge bg-dark text-start" style="user-select: text">{{ Request::root() }}/deleteStorage/{tableName}/{path}</span>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">uri :</span>
                                <p class="badge">tableName , path (not required)</p>
                            </div>

                            <div class="mt-1 text-break">
                                <span class="badge">body :</span>
                                <p class="badge">folder , file</p>
                            </div>
                            <div class="my-1 text-break">
                                <span class="badge">return :</span>
                                <p class="badge">success,status,message</p>
                            </div>
                        </p>
                    </div>



                </div>

            </div>
        </div>

    </div>

@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    @yield('custom-head')
    <script src="{{ mix('js/app.js') }}"></script>
    <title>{{ env('APP_NAME') }}</title>

    @livewireStyles
</head>

<body id="body-pd">
    <header class="header" id="header">

        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        {{-- <div class="header_img">
            <div>
                <img src="{{ asset("img.jfif") }}" style="border-radius: 100%;border: 4px solid #B6CDC6">
            </div>
        </div> --}}

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>

                <a href="{{ route('Home') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">{{ env('APP_NAME') }}</span>
                </a>

                <div class="nav_list">

                    <a title="Who i'm ?" href="{{ route('Docs') }}" class="nav_link active">
                        <i class='bx bxs-book'></i>
                        <span class="nav_name" style="font-weight: bold">Docs</span>
                    </a>

                    <a title="Back" href="{{ route('settings.home') }}" class="nav_link">
                        <i class='bx bx-arrow-back'></i>
                        <span class="nav_name" style="font-weight: bold">Back</span>
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->

    <div class="text-light px-2">

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    Login to this site using api
                </span>
                <div class="flex">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/login</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">email , password</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">success , status , access_token , token_type , expires_in</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    Register to this site using api
                </span>
                <div class="d-flex">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/register</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">first_name , last_name , gender , email , password , confirm_password</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">success , status , access_token , token_type , expires_in</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    create new Table storage
                </span>
                <div class="d-flex w-50">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/createTable</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">name</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">message , status</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    show Tables from ur account
                </span>
                <div class="d-flex w-50">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/showStorage</span>
                </div>

                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">tables , message , status</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    get files and dirs from ur table storage
                </span>
                <div class="d-flex">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/getStorage/{tableName}/{path}</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">uri :</span>
                    <p class="badge">tableName , path (not required)</p>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">handel</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">path , data , success , status</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    set new file or folder to ur table storage
                </span>
                <div class="d-flex">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/setStorage/{tableName}/{path}</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">uri :</span>
                    <p class="badge">tableName , path (not required)</p>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">handel , file , folder</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">path , data , success , status</p>
                </div>
            </p>
        </div>

        <div class="p-2 my-2 bg-slate-700 overflow-scroll hide-scroll rounded">
            <p class="text-light fw-bold d-flex justify-content-center flex-column">

                <span class="d-flex mb-1 justify-content-start">
                    delete file or folder from ur storage
                </span>
                <div class="d-flex">
                    <span class="badge bg-primary me-2">POST</span>
                    <span class="badge bg-dark text-start" style="user-select: text">{{ API_URL() }}/deleteStorage/{tableName}/{path}</span>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">uri :</span>
                    <p class="badge">tableName , path (not required)</p>
                </div>

                <div class="mt-1 text-break">
                    <span class="badge">body :</span>
                    <p class="badge">folder , file</p>
                </div>
                <div class="my-1 text-break">
                    <span class="badge">return :</span>
                    <p class="badge">success,status,message</p>
                </div>
            </p>
        </div>
    </div>
    @livewireScripts
</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    nav.classList.toggle('show')
                    toggle.classList.toggle('bx-x')
                    bodypd.classList.toggle('body-pd')
                    headerpd.classList.toggle('body-pd')
                })
            }
        }
        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
    .firstBox{
        width: 300px;
        height: auto;
        background-color: #CDE4DD;
        border-radius: 10px;
    }
    /* .Invar{
        font-family: 'Roboto Mono', monospace;
        width: 100%;
        font-weight: bold;
    } */
    .hide-scroll::-webkit-scrollbar{
        width: 0;
        overflow: hidden;
        height: 0;
    }
    :root {
        --header-height: 3rem;
        --nav-width: 68px;
        --first-color: #4723D9;
        --first-color-light: #AFA5D9;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: var(--white-color);
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    .show {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
        color: var(--white-color)
    }

    .active::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }

    @media screen and (min-width: 768px) {
        body {

            margin: calc(var(--header-height) + 1rem) 0 0 0;
            /* padding-left: calc(var(--nav-width) + 2rem) */

            padding-left: calc(var(--nav-width) + 0rem)
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show {
            width: calc(var(--nav-width) + 156px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }
    ::-webkit-scrollbar {
        width: 12px;
        height: 12px;
    }
    ::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: #A2CABD;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #86a79d;
    }
    .hide-scroll::-webkit-scrollbar{
        width: 0px;
        height: 0px;
    }
</style>

</html>
