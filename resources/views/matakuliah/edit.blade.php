@extends('layouts.app')

@section('judul', 'Edit Mata Kuliah')

@section('konten')
    <h2>Edit Mata Kuliah</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Kode Mata Kuliah</label><br>
            <input type="text" name="kode_mk"
                   value="{{ old('kode_mk', $matakuliah->kode_mk) }}" required>
        </p>

        <p>
            <label>Nama Mata Kuliah</label><br>
            <input type="text" name="nama_mk"
                   value="{{ old('nama_mk', $matakuliah->nama_mk) }}" required>
        </p>

        <p>
            <label>SKS</label><br>
            <input type="number" name="sks"
                   value="{{ old('sks', $matakuliah->sks) }}" min="1" required>
        </p>

        <p>
            <label>Semester</label><br>
            <input type="number" name="semester"
                   value="{{ old('semester', $matakuliah->semester) }}" min="1" required>
        </p>
        
        <p>
            <label>Dosen</label><br>
            <select name="dosen_id" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->id }}"
                        {{ old('dosen_id', $matakuliah->dosen_id) == $dosen->id ? 'selected' : '' }}>
                        {{ $dosen->name }}
                    </option>
                @endforeach
            </select>
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
@endsection