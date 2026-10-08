<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();

        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();

        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();

        return view('demo.statistik-prodi', compact('rekap'));
    }

    public function tambahMahasiswa()
    {
        DB::table('mahasiswas')->insert([
            'nim' => request('nim'),
            'nama' => request('nama'),
            'email' => request('email'),
            'prodi' => request('prodi'),
            'semester' => request('semester'),
        ]);

        return redirect('/query-builder');
    }

    public function updateMahasiswa()
    {
        DB::table('mahasiswas')
            ->where('nim', request('nim'))
            ->update([
                'nama' => request('nama'),
                'email' => request('email'),
                'prodi' => request('prodi'),
                'semester' => request('semester'),
            ]);

        return redirect('/query-builder');
    }

    public function deleteMahasiswa()
    {
        DB::table('mahasiswas')
            ->where('nim', request('nim'))
            ->delete();

        return redirect('/query-builder');
    }
}