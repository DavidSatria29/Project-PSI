
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Web Icon -->
    <link rel="icon" href="{{ asset('assets/auth/img/LOGO.png') }}">
    <link href="{{ asset('assets/auth/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/login.css') }}">
    {{-- <link href="{{ asset('asset/img/logo4.png') }}" rel="icon"> --}}
    <title>@yield('title')</title>

</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('assets/auth/js/Query.js') }}"></script>
    <script src="{{ asset('assets/auth/js/register.js') }}"></script>
    <script src="{{ asset('assets/auth/js/login.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>
