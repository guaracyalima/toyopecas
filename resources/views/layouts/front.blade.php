<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>Toypeças</title>
    {{--<title>{{ config('app.name', 'Toypeças') }}</title>--}}

    <!-- Styles -->
    <link href="{{ asset('css/ow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://developers.google.com/maps/documentation/javascript/demos/demos.css">


    {{--<!-- Scripts -->--}}
    {{--<script>--}}
        {{--window.Laravel = {!! json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) !!};--}}
    {{--</script>--}}

</head>
<body>
<div id="app">


    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
@yield('post-script')
</body>
</html>
