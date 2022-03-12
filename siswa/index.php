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
    <!-- by Valentinus Moreno -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>
                <img src="../gambar/logo.jpg" height="100px">Data Siswa
            </h1>
            <hr>
            <a href="add.php" class="btn btn-primary" style="float: right;">Tambah Data</a> <br><br>
            <table class="table table-striped">

            <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>         
            </thead>

            <tbody>
            <?php
            require_once('../config.php');
            $sql = "SELECT kelas.kelas, siswa.id as sid, siswa.nis, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id";
            $query = mysqli_query($config, $sql);
            
            if(mysqli_num_rows($query) == 0){
                echo "<tr><td colspan=7>Data Masih Kosong</td></tr>";
            } else {
                $no=1;
                while($r=mysqli_fetch_assoc($query)){
                    echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['nis'] . "</td>";
                        echo "<td>" . $r['nama'] . "</td>";
                        echo "<td>" . $r['tempat_lahir'] . "</td>";
                        echo "<td>" . date('d M Y' , strtotime($r['tanggal_lahir'])) . "</td>";
                        echo "<td>" . $r['kelas'] . "</td>";
                    $no++;
                    echo "<td>
                    <a href='edit.php?id=" . $r['sid'] . "' class='btn btn-warning'>Edit</a>";?>
                    <a href="erase.php?id=<?= $r['sid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data Siswa akan dihapus, Yakin?')">Hapus</a>
                    <?php
            echo "</td>";
                          echo "</tr>";
                }            
            }
            ?>
            </tbody>

            <tfoot class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>         
            </tfoot>

            </table>   
            </div>
        </div>
    </div>
        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>