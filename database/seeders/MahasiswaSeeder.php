<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswa = [
            ['nim' => '2024430191', 'nama' => 'Ahmad Fauzi', 'email' => 'ahmad.fauzi@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 4],
            ['nim' => '2024580126', 'nama' => 'Budi Santoso', 'email' => 'budi.santoso@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 8],
            ['nim' => '2024220892', 'nama' => 'Citra Lestari', 'email' => 'citra.lestari@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024060011', 'nama' => 'Dimas Saputra', 'email' => 'dimas.saputra@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 8],
            ['nim' => '2024580431', 'nama' => 'Eka Putri', 'email' => 'eka.putri@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 1],
            ['nim' => '2024300011', 'nama' => 'Fajar Ramadhan', 'email' => 'fajar.ramadhan@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 2],
            ['nim' => '2024100274', 'nama' => 'Gilang Pratama', 'email' => 'gilang.pratama@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 6],
            ['nim' => '2024060746', 'nama' => 'Hana Salsabila', 'email' => 'hana.salsabila@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 3],
            ['nim' => '2024210813', 'nama' => 'Irfan Maulana', 'email' => 'irfan.maulana@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024150505', 'nama' => 'Jihan Maharani', 'email' => 'jihan.maharani@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 8],
            ['nim' => '2024040167', 'nama' => 'Kurniawan Putra', 'email' => 'kurniawan.putra@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 5],
            ['nim' => '2024500432', 'nama' => 'Laila Rahma', 'email' => 'laila.rahma@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 6],
            ['nim' => '2024260760', 'nama' => 'Maya Anggraini', 'email' => 'maya.anggraini@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 4],
            ['nim' => '2024100840', 'nama' => 'Nanda Saputra', 'email' => 'nanda.saputra@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 7],
            ['nim' => '2024110610', 'nama' => 'Oki Setiawan', 'email' => 'oki.setiawan@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 7],
            ['nim' => '2024250528', 'nama' => 'Putri Amelia', 'email' => 'putri.amelia@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 7],
            ['nim' => '2024480945', 'nama' => 'Rizky Hidayat', 'email' => 'rizky.hidayat@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 6],
            ['nim' => '2024440958', 'nama' => 'Siti Nurhaliza', 'email' => 'siti.nurhaliza@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024360584', 'nama' => 'Taufik Hidayat', 'email' => 'taufik.hidayat@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 8],
            ['nim' => '2024560352', 'nama' => 'Umar Farhan', 'email' => 'umar.farhan@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 7],
            ['nim' => '2024920865', 'nama' => 'Vina Oktaviani', 'email' => 'vina.oktaviani@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 7],
            ['nim' => '2024150263', 'nama' => 'Wahyu Setiawan', 'email' => 'wahyu.setiawan@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 7],
            ['nim' => '2024330668', 'nama' => 'Yuni Kartika', 'email' => 'yuni.kartika@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 1],
            ['nim' => '2024440239', 'nama' => 'Zainal Arifin', 'email' => 'zainal.arifin@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 6],
            ['nim' => '2024910204', 'nama' => 'Agus Setiawan', 'email' => 'agus.setiawan@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 6],
            ['nim' => '2024500748', 'nama' => 'Aulia Rahman', 'email' => 'aulia.rahman@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 3],
            ['nim' => '2024340318', 'nama' => 'Bella Safitri', 'email' => 'bella.safitri@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 8],
            ['nim' => '2024750571', 'nama' => 'Cahyo Nugroho', 'email' => 'cahyo.nugroho@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 8],
            ['nim' => '2024580186', 'nama' => 'Dewi Lestari', 'email' => 'dewi.lestari@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 1],
            ['nim' => '2024670983', 'nama' => 'Eko Prasetyo', 'email' => 'eko.prasetyo@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 1],
            ['nim' => '2024760314', 'nama' => 'Fitri Handayani', 'email' => 'fitri.handayani@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 7],
            ['nim' => '2024530046', 'nama' => 'Galih Permana', 'email' => 'galih.permana@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 8],
            ['nim' => '2024650700', 'nama' => 'Hendra Wijaya', 'email' => 'hendra.wijaya@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 1],
            ['nim' => '2024730250', 'nama' => 'Intan Permata', 'email' => 'intan.permata@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 1],
            ['nim' => '2024760904', 'nama' => 'Joko Susilo', 'email' => 'joko.susilo@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 6],
            ['nim' => '2024590993', 'nama' => 'Kartika Sari', 'email' => 'kartika.sari@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 4],
            ['nim' => '2024010240', 'nama' => 'Lukman Hakim', 'email' => 'lukman.hakim@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 2],
            ['nim' => '2024530114', 'nama' => 'Mila Puspita', 'email' => 'mila.puspita@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 8],
            ['nim' => '2024480611', 'nama' => 'Niko Ramadhan', 'email' => 'niko.ramadhan@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 4],
            ['nim' => '2024870094', 'nama' => 'Oktavia Sari', 'email' => 'oktavia.sari@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 8],
            ['nim' => '2024120912', 'nama' => 'Pandu Wijaya', 'email' => 'pandu.wijaya@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 2],
            ['nim' => '2024900969', 'nama' => 'Rani Maharani', 'email' => 'rani.maharani@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024160841', 'nama' => 'Sandi Firmansyah', 'email' => 'sandi.firmansyah@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 6],
            ['nim' => '2024200054', 'nama' => 'Tiara Ananda', 'email' => 'tiara.ananda@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024850548', 'nama' => 'Umi Kalsum', 'email' => 'umi.kalsum@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 1],
            ['nim' => '2024320249', 'nama' => 'Yusuf Alfarizi', 'email' => 'yusuf.alfarizi@example.com', 'prodi' => 'Teknik Komputer', 'semester' => 7],
            ['nim' => '2024680106', 'nama' => 'Zahra Aulia', 'email' => 'zahra.aulia@example.com', 'prodi' => 'Sistem Informasi', 'semester' => 2],
            ['nim' => '2024710657', 'nama' => 'Andi Kurniawan', 'email' => 'andi.kurniawan@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 2],
            ['nim' => '2024890719', 'nama' => 'Bagas Maulana', 'email' => 'bagas.maulana@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 6],
            ['nim' => '2024470337', 'nama' => 'Cindy Maharani', 'email' => 'cindy.maharani@example.com', 'prodi' => 'Teknik Informatika', 'semester' => 1],
        ];

        foreach ($mahasiswa as $data) {
            Mahasiswa::updateOrCreate(
                ['nim' => $data['nim']],
                $data
            );
        }
    }
}