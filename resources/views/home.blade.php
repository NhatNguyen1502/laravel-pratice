<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <h1>Hello
        {!! $name !!}
        @forelse ([] as $user)
            <li>{{ $user['name'] }}</li>
        @empty
            <p>No users</p>
        @endforelse
    </h1> --}}

    {{-- <h1>{{$title}}</h1>
    @include('shared.notify', ['alertType' => 'warning']) --}}
    <h1>List post</h1>
    <div class="post-list">
        @each('shared.post', $posts, 'post')
    </div>
</body>

</html>
