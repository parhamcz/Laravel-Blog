<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> کوئرا </title>
</head>
<body>
    {{__('admin::admin.list',['value'=>trans_choice('admin::admin.post',2)])}}
</body>
</html>
