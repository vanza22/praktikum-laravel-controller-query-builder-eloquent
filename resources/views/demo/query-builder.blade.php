<!DOCTYPE html>
<html>
<head>
    <title>Query Builder Demo</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <h2>Tambah Mahasiswa</h2>

    <form action="/query-builder/tambah" method="POST">
        @csrf

        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="prodi" placeholder="Prodi" required>
        <input type="number" name="semester" placeholder="Semester" required>

        <button type="submit">Tambah</button>
    </form>

    <h2>Update Mahasiswa</h2>

    <form action="/query-builder/update" method="POST">
        @csrf

        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="nama" placeholder="Nama Baru" required>
        <input type="email" name="email" placeholder="Email Baru" required>
        <input type="text" name="prodi" placeholder="Prodi Baru" required>
        <input type="number" name="semester" placeholder="Semester Baru" required>

        <button type="submit">Update</button>
    </form>

    <h2>Delete Mahasiswa</h2>

    <form action="/query-builder/delete" method="POST">
        @csrf

        <input type="text" name="nim" placeholder="NIM" required>

        <button type="submit">Delete</button>
    </form>

    @forelse ($data as $mahasiswa)
        <p>
            {{ $mahasiswa->nim }} -
            {{ $mahasiswa->nama }} -
            {{ $mahasiswa->prodi }} -
            Semester {{ $mahasiswa->semester }}
        </p>
    @empty
        <p>Tidak ada data mahasiswa.</p>
    @endforelse
</body>
</html>