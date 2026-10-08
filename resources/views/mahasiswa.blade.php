<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    @foreach ($mahasiswa as $mhs)
        <p>Nama: {{ $mhs->nama }}</p>
        <p>Prodi: {{ $mhs->prodi }}</p>
        <hr>
    @endforeach

</body>
</html>