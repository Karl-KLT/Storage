<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    <title>{{ env('APP_NAME') }}</title>
    @livewireStyles
</head>
<body class='bg-secondary user-select-none'>

    <div class="badge bg-primary p-2 position-fixed right-0 m-2 bottom-0 text-end">
        V1.0
    </div>

    @yield('container')
    @livewireScripts
</body>
<style>
    .hide-scroll::-webkit-scrollbar{
        width: 0;
        height: 0;
    }
    .user-select-text{
        user-select: text;
    }
    .user-select-none{
        user-select: none;
    }

</style>
</html>
