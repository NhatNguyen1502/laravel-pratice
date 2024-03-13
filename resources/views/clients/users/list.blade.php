@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection

@section('content')
    @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif
    <h1>{{ $title }}</h1>
    <hr>
    <a href="{{ route('users.add') }}"> <button>Thêm người dùng</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Time</th>
                
            </tr>
        </thead>
        <tbody>
            @if (!empty($users))
                @foreach ($users as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->create_at }}</td>
                        <td><a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
                <td><a onclick="return comfirm('Ban co chac ko')" href="{{ route('users.delete', $item->id) }}"
                        class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">No user</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
