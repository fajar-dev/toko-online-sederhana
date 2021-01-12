
<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../db/koneksi.php';
 
// menangkap data yang dikirim dari form
$username =  mysqli_real_escape_string($koneksi,$_POST['username']); 
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:./page/home.php");
}else{
	?>
		<script>
		document.location.href = 'login.php?gagal';
		</script>
	<?php 
}

?>

