<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mk($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Mata Kuliah</title>
</head>

<body>
    <h1>Edit Data Mata Kuliah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>Id</label>
        <br>
        <input type="text" name="id" value="<?php echo $data->id ?>">
        <br>
        <label>Nama Mata Kuliah</label>
        <br>
        <input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
        <br>
        <br><br>
        <button type="submit" name="submit_edit_mk">Submit</button>
    </form>
</body>

</html>