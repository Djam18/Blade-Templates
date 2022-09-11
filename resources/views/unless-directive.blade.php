<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unless directive</title>
</head>
<body>
    <div>
        @unless (Auth::check())
            You are not signed in.
        @endunless
    </div>

</body>
</html>
