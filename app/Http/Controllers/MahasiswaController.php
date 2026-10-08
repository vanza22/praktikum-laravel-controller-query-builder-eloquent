<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->only([
            'nim',
            'nama',
            'email',
            'prodi',
            'semester'
        ]));

        return redirect()
            ->route('mahasiswa.index')
            ->with('pesan', 'Data berhasil ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
         $mahasiswa->load('nilai.matakuliah');

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        return "edit: form edit mahasiswa id {$id}";
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->only([
            'nim',
            'nama',
            'email',
            'prodi',
            'semester'
        ]));

        return redirect()
            ->route('mahasiswa.index')
            ->with('pesan', 'Data berhasil diperbarui');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}