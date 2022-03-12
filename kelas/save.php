<?php
if(isset($_POST['simpan'])) {
    require_once("../config.php");
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

   // $sql = "INSERT INTO kelas VALUES(NULL, '$kelas', '$kapasitas', '$terisi')";
   $sql = "INSERT INTO kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi'";
   $query = mysqli_query($config, $sql);
   if($query) {
       header('location: index.php');
   } else {
       echo "Data Gagal Disimpan, <a href='index.php' > Kembali </a>";
       // var_dump($sql);
   }
}
// CREATED BY VALENTINUS MORENO