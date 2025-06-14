{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2>Dashboard Admin</h2>
            <p>Selamat datang di dashboard admin!</p>
            <ul class="list-group mb-3">
                <li class="list-group-item"><a href="#">Tambah Data</a></li>
                <li class="list-group-item"><a href="#">Lihat Data</a></li>
                <li class="list-group-item"><a href="#">Edit Data</a></li>
                <li class="list-group-item"><a href="#">Hapus Data</a></li>
            </ul>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
@endsection
