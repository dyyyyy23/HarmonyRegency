@extends('layouts.template')

@section('title', 'Tambah Berita')

@section('content')
<div class="container mt-5" style="max-width: 650px;">
    <h2 class="mb-4">Tambah Berita</h2>
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required value="{{ old('judul') }}">
            @error('judul') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" required value="{{ old('tanggal') }}">
            @error('tanggal') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
            @error('gambar') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Isi Berita</label>
            <textarea name="konten" rows="5" class="form-control @error('konten') is-invalid @enderror" required>{{ old('konten') }}</textarea>
            @error('konten') <div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
