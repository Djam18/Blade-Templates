<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Including Subviews</title>
</head>
<body>
    @include('hello-world',['message'=>'Hello']);
    <br>
    @includeWhen(true, 'get-time',['time' => Carbon\Carbon::now()->format('H:i:s')])
</body>
</html>
