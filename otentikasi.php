<?php
include('config.php');

session_start();

//tangkap data dari form login
$username = $_POST['username'];
$pass = $_POST['pass'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$pass = mysql_real_escape_string($pass);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($pass)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($pass)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}

$q = mysql_query("select * from user where username='$username' and password='$pass'");

if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $username;
	
	//redirect ke halaman index
	header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
?>