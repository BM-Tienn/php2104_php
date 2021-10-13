<html>
    <body>
        <h1>Hello {{ $key }}. This is file view in folder Phuon !</h1>
        <hr>
        @foreach ($test as $value)
            <p>{{ $value }}</p>
        @endforeach
        <hr>
        @if (count($test) === 1)
            I have one record!
        @elseif (count($test) > 1)
            I have multiple test!
        @else
            I don't have any test!
        @endif
        <hr>
        @isset($test)
            <p>ok</p>
        @endisset
        <hr>
        @empty(!$test)
            <p>empty</p>
        @endempty
        <hr>
        @switch($test)
            @case(count($test) === 1)
                <p>Array is 1 items</p>
                @break

            @case(count($test) === 2)
                <p>Array is 2 items</p>
            @break

            @default
                <p>Array is >2 items</p>
        @endswitch
        <hr>
    </body>
</html>