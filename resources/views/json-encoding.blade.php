<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json Encoding </title>
</head>
<body>
    <p>Look into the console of your browser </p>
    <script type="text/javascript">
        var array = <?php echo json_encode($array); ?>;
        var array1 = {{ Js::from($array) }};
        console.log(array);
        console.log(array1);
    </script>
</body>
</html>
