<x-todo>
    @foreach ($tasks as $task)
        <h3>{{ $task['name'] }}</h3>
    @endforeach
</x-todo>
