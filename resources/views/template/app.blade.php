<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--   token   --}}
    <meta name="csrf-token" content="{{ csrf_token()  }}" />
    {{--  sweetalert2  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- fontawesome   --}}
    <script src="https://kit.fontawesome.com/4f2d93f234.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @yield('javascript')
    <title>
        	@yield('page-title')
    </title>
</head>
<body>
    @yield('main-content')
</body>
</html>