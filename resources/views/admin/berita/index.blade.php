@extends('layouts.template')

@section('title', 'Data Berita')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Manajemen Berita</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-success mb-3">Tambah Berita</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beritas as $no => $berita)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $berita->judul }}</td>
                <td>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d/m/Y') }}</td>
                <td>
                    @if($berita->gambar)
                        <img src="{{ asset('storage/'.$berita->gambar) }}" width="80">
                    @else
                        <span class="text-muted">-</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.berita.edit', $berita) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus berita ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada berita.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
