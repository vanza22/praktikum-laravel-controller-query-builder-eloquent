<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();

        return view('matakuliah.index', compact('data'));
    }

    public function create()
    {
         $dosens = $this->daftarDosen();

        return view('matakuliah.create', compact('dosens'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
            'dosen_id' => 'required|exists:users,id',
        ]);

        Matakuliah::create($request->only([
            'kode_mk',
            'nama_mk',
            'sks',
            'semester',
            'dosen_id',
        ]));

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }


    public function show(Matakuliah $matakuliah)
    {
        $matakuliah->load('nilai.mahasiswa');

        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit(Matakuliah $matakuliah)
    {
        $dosens = $this->daftarDosen();

        return view('matakuliah.edit', compact('matakuliah', 'dosens'));
    }

    
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
            'dosen_id' => 'required|exists:users,id',
        ]);

        $matakuliah->update($request->only([
            'kode_mk',
            'nama_mk',
            'sks',
            'semester',
            'dosen_id',
        ]));

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil diperbarui.');
    }


    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil dihapus.');
    }

    private function daftarDosen()
    {
        return \App\Models\User::select('id', 'name')->get();
    }
}