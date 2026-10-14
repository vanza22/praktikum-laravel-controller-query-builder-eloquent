@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h2>Daftar Mata Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $matakuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $matakuliah->kode_mk }}</td>
                    <td>{{ $matakuliah->nama_mk }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>{{ $matakuliah->semester }}</td>
                    <td>{{ $matakuliah->dosen->name ?? '-' }}</td>
                        
                    <td>
                        <a href="{{ route('matakuliah.show', $matakuliah->id) }}">Detail</a> |
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}">Edit</a> |
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}"
                            method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection