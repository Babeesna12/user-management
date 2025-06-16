@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New User</h2>
    <form action="{{ route('admin.users.store') }}" method="POST">@csrf
        <div class="mb-2">
            <input type="text" name="name" placeholder="Name" class="form-control" required>
        </div>
        <div class="mb-2">
            <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="mb-2">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
