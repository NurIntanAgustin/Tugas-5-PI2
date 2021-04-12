<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mhs($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <a href="mahasiswa.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id</label>
        <br>
        <input type="text" name="id" value="<?php echo $data->id ?>">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>Semester</label>
        <br>
        <input type="number" name="semester" value="<?php echo $data->semester ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label>No.Telp</label>
        <br>
        <input type="text" name="no_tlp" value="<?php echo $data->no_tlp ?>">
        <br>
        <label>Email</label>
        <br>
        <input type="text" name="email" value="<?php echo $data->email ?>">
        <br><br>
        <button type="submit" name="submit_edit_mhs">Submit</button>
    </form>
</body>

</html>