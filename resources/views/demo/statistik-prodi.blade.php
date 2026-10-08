<!DOCTYPE html>
<html>
<head>
    <title>Statistik Prodi</title>
</head>
<body>
    <h1>Statistik Jumlah Mahasiswa per Prodi</h1>

    @forelse ($rekap as $item)
        <p>
            {{ $item->prodi }} : {{ $item->jumlah }} mahasiswa
        </p>
    @empty
        <p>Tidak ada data.</p>
    @endforelse
</body>
</html>