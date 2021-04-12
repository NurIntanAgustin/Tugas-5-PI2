<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Mata Kuliah</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="mahasiswa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id</label>
        <br>
        <input type="text" name="id">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="nama_mk">
        <br>
        <br><br>
        <button type="submit" name="submit_simpan_mk">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>