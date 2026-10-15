@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <div class="content-heading">
        <div>
            <span class="tag">DATA AKADEMIK</span>
            <h1>Daftar Mahasiswa</h1>
            <p>Kelola informasi mahasiswa yang terdaftar di sistem akademik.</p>
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="button">
            + Tambah Mahasiswa
        </a>
    </div>

    <div class="content-card">
        <h2>Data Mahasiswa</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $mhs)
                    <tr>
                        <td>{{ $data->firstItem() + $loop->index }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>
                            <a class="button"
                               href="{{ route('mahasiswa.show', $mhs->id) }}">
                                Detail
                            </a>

                            <a class="button"
                               href="{{ route('mahasiswa.edit', $mhs->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="button" type="submit"
                                    onclick="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada data mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection