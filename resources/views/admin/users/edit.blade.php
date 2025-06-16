@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">@csrf @method('PUT')
        <div class="mb-2">
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
