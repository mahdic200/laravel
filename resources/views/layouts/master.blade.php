<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>

        @yield('title')

    </title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        td,
        th {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">

        @yield('content')

    </div>
    
    @yield('scripts')

</body>

</html>
