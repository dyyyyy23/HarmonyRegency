@extends('layouts.template')
@section('title', 'Tambah Properti')
@section('content')
<div class="container mt-4">
    <h3>Tambah Properti</h3>
    <form action="{{ route('properti.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Properti</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <button class="btn btn-success" type="submit">Simpan</button>
        <a href="{{ route('admin.properti.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
