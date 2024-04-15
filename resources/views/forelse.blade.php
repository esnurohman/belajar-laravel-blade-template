<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forelse</title>
</head>
<body>
    <ul>
        @forelse ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            Tidak punya hobby
        @endforelse
    </ul>
</body>
</html>