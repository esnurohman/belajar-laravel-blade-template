<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For</title>
</head>
<body>
    <ul>

        @for ($i = 0; $i < $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>
</body>
</html>