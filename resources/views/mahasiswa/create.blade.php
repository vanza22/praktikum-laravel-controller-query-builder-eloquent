@extends('layouts.app')

@section('konten')
    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div>
            <label>NIM</label>
            <input type="text" name="nim" required>
        </div>

        <div>
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Prodi</label>
            <input type="text" name="prodi" required>
        </div>

        <div>
            <label>Semester</label>
            <input type="number" name="semester" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection