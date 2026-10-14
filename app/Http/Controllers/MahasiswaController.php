<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MatakuliahController;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = \Illuminate\Support\Facades\DB::table('mahasiswas')
            ->orderBy('nama', 'asc')
            ->paginate(10);

        return view('mahasiswa.index', compact('data'));
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

    public function jumlahPerProdi()
    {
        $data = \Illuminate\Support\Facades\DB::table('mahasiswas')
                ->select('prodi', \Illuminate\Support\Facades\DB::raw('count(*) as jumlah'))
                ->groupBy('prodi')
                ->get();

            return view('mahasiswa.jumlah-prodi', compact('data'));
    }
}