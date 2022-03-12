<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="shortcut icon" href="../gambar/logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>
                <img src="../gambar/logo.jpg" height="100px">Data Siswa
            </h1>
            <hr>
            <a href="." class="btn btn-primary" style="float: right;">Kembali . Edit</a> <br><br>
             <?php
             if (isset($_GET['id'])) 
                 require_once ('../config.php');
                 $id = $_GET['id'];
                 $sql = "SELECT * FROM siswa WHERE id='$id'";
                 $result = mysqli_query($config, $sql);
                 $r = mysqli_fetch_assoc($result);
                 ?>
            <form action="update.php" method="post">
        <div class="mb-2">
            <label for="nis" class="form-label">Nomor Induk Siswa</label>
            <input type="number" name="nis" value="<?= $r['nis']; ?>" class="form-control" required autofocus>
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" name="nama" value="<?=  $r['nama']; ?>" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="tempat_lahir" class="form-label">Tempat Lahir (Kabupaten/Kota)</label>
            <input type="text" name="tempat lahir" value="<?= $r['tempat_lahir']; ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="kelas_id" class="form-label">Kelas*</label>
            <select name="kelas_id" required class="form-control">
            <option value="">Pilih Kelas</option>
            <?php
            $sql2 = "SELECT * FROM kelas ORDER BY kelas ASC";
            $result2 = mysqli_query($config, $sql2);
                while ($row = mysqli_fetch_assoc($result2)){
                    echo "<option value='" . $row['id'] . "'>" . $row['kelas'] . "</option>";
                    if($row['id'] == $r['kelas_id']) {
                        echo "<option value='" . $row['id'] . "' selected>" . $row['kelas'] . "</option>";
                    }                
                }  
            ?>
            </select>  
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
             <input type="reset" class="btn btn-md btn-warning">
             <button type="submit" name="update" class="btn btn-md btn-primary">Update</button>
        </div>
    </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
<!-- CREATED BY VALENTINUS MORENO -->