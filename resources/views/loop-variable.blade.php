<html>
    <body>
        <ul>
            @foreach ($hobbies as $hobby)
                <li>{{ $loop->index }}. {{ $hobby }}</li>
            @endforeach
        </ul>
    </body>
</html>