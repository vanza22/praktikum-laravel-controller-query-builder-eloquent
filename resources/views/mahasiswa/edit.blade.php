@extends('layouts.app')

@section('judul', 'Edit Mahasiswa')

@section('konten')
    <h2>Edit Data Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>
        </p>

        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ $mahasiswa->email }}" required>
        </p>

        <p>
            <label>Program Studi:</label><br>
            <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" required>
        </p>

        <p>
            <label>Semester:</label><br>
            <input type="number" name="semester" value="{{ $mahasiswa->semester }}" required>
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('mahasiswa.index') }}">Batal</a>
    </form>
@endsection