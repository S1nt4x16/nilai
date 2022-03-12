<?php
if(isset($_GET['id'])){
    require_once("../config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($config, $sql);
    if($query) {
        header('location: index.php');
    } else {
        echo "Data Gagal Dihapus, <a href='index.php'>Kembali</a>";
    }
} else {
    echo "Hapus Menggunakan Tombol Jangan Menggunakan Alamat Addres <a href='index.php'>Kembali</a>";
}
// CREATED BY VALENTINUS MORENO