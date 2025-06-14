@extends('layouts.template')
@section('title', 'Detail Properti')
@section('content')
<div class="container mt-4">
    <h3>{{ $properti->nama }}</h3>
    <p><strong>Harga:</strong> Rp{{ number_format($properti->harga, 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong><br>{{ $properti->deskripsi }}</p>
    <a href="{{ route('admin.properti.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
