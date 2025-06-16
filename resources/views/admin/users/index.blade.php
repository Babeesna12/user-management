@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User List</h2>
    <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-2">Add User</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <table class="table table-bordered">
        <thead><tr><th>Name</th><th>Email</th><th>Actions</th></tr></thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td><td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this user?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
