<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <link rel="icon" href="{{ asset('/images/logo_transparent.png') }}" type="image/jpg" sizes="16x16">

    <title> کوئرا </title>

</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<!-- Scripts -->
<script src="{{ asset(mix('js/app.js')) }}" defer></script>
</body>
</html>