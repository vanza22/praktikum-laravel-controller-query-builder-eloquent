@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah')

@section('konten')
    <h2>Detail Mata Kuliah</h2>

    <p><strong>Kode MK:</strong> {{ $matakuliah->kode_mk }}</p>
    <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_mk }}</p>
    <p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>
    <p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>
    <p><strong>Dosen:</strong> {{ $matakuliah->dosen->name ?? '-' }}</p>

    <h3>Daftar Mahasiswa yang Mengambil Mata Kuliah Ini</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah->nilai as $nilai)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $nilai->mahasiswa->nim ?? '-' }}</td>
                    <td>{{ $nilai->mahasiswa->nama ?? '-' }}</td>
                    <td>{{ $nilai->nilai }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada mahasiswa yang mengambil mata kuliah ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p><a href="{{ route('matakuliah.index') }}">Kembali ke Daftar Mata Kuliah</a></p>
@endsection