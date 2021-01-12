<?php
    //panggil file koneksi.php yang sudah anda buat
    include "../../../db/koneksi.php";
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $wa = $_POST['wa'];
    $gambar_produk = $_FILES['gambar']['name']; 
    

    //cek dulu jika ada gambar produk jalankan coding ini
    if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../../../assets/produk/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO produk (id, gambar, nama, harga, wa) VALUES ('', '$nama_gambar_baru', '$nama', '$harga', '$wa')";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                    } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>window.location='../produk.php?sukses';</script>";
                    }

            } else {     
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>window.location='../produk.php?gagal';</script>";
            }
    } else {
    $query = "INSERT INTO produk (id, gambar, nama, harga, wa) VALUES ('', null, '$nama', '$harga', '$wa')";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                    } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>window.location='../produk.php?sukses';</script>";
                    }
    }
?>