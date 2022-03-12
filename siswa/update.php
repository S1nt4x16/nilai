<?php
if(isset($_POST['update'])) {
    require_once("../config.php");
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelas_id = $_POST['kelas_id'];

   // $sql = "INSERT INTO kelas VALUES(NULL, '$kelas', '$kapasitas', '$terisi')";
   $sql = "UPDATE siswa SET nis='$nis', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kelas_id='$kelas_id' WHERE id = '$id'";
   $query = mysqli_query($config, $sql);
   if($query) {
        header('location: index.php');
   } else {
       echo "Data Gagal Disimpan, <a href='index.php' > Kembali </a>";
        // var_dump($sql);
   }
}
// CREATED BY VALENTINUS MORENO