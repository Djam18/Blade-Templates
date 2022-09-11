<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Components </title>
</head>
<body>
    @php
        $message = 'You are successfully logged in';
    @endphp
    <x-alert></x-alert>
    <x-custom-alert :message="$message"> </x-custom-alert>
    {{-- <x-custom-alert type="error" message="{{ 'Your request failed' }}"> </x-custom-alert> --}}
    {{-- <x-custom-alert type="primary" message="{{ __('Your have new notfication') }}"> </x-custom-alert> --}}
</body>
</html>
