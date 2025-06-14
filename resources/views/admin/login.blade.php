{{-- resources/views/admin/login.blade.php --}}
@extends('layouts.template')

@section('title', 'Login Admin')

@section('content')
<div class="container" style="max-width: 400px; margin: 80px auto;">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="mb-4 text-center">Login Admin</h4>
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form method="POST" action="{{ route('login.process') }}">
                @csrf
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
