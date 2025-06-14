@extends('layouts.template')
@section('title', 'Data Properti')
@section('content')
<div class="container mt-4">
    <a href="{{ route('properti.create') }}" class="btn btn-success mb-3">Tambah Properti</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($propertis as $properti)
            <tr>
                <td>{{ $properti->nama }}</td>
                <td>{{ number_format($properti->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('properti.show', $properti) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('properti.edit', $properti) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('properti.destroy', $properti) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
