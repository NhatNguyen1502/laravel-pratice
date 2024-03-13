<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello
        {!! $name !!}
        {{-- day la comment --}}
        <!-- đây cũng là comment  -->
        {{-- @php
            $name = $name . ' oke ';
            echo $name;
        @endphp --}}
        @forelse ([] as $user)
            <li>{{ $user['name'] }}</li>
        @empty
            <p>No users</p>
        @endforelse
    </h1>
</body>

</html>
