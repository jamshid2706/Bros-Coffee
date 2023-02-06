<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bros-Coffee @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admins/css/app2.css') }}"/>
    <link rel="icon" type="image/icon" href="{{ asset('assets/img/svgexport-8.svg') }}"/>
    @yield('styles')
</head>
<body>
@include('admin.partials.top-menu')
<div class="flex overflow-hidden">
    @include('admin.partials.menu')
    <div class="content">
        @yield('content')
    </div>
</div>
<script src="{{ asset('admins/js/enigma.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@yield('scripts')

</body>
</html>
