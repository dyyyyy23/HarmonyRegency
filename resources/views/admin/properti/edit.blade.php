@extends('layouts.template')
@section('title', 'Edit Properti')
@section('content')
<div class="container mt-4">
    <h3>Edit Properti</h3>
    <form action="{{ route('properti.update', $properti) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Properti</label>
            <input type="text" name="nama" class="form-control" value="{{ $properti->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $properti->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $properti->harga }}" required>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{ route('admin.properti.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
