<?php
//panggil file koneksi.php yang sudah anda buat
include "../../../db/koneksi.php";

$id=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($koneksi, "DELETE FROM produk where id='$id'");
if($hapus) {
    echo "<script>document.location.href = '../produk.php?sukses';</script>";   
}else {
    echo "<script>document.location.href = '../produk.php?gagal';</script>";   
}

?>