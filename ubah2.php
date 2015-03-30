<html>
 
<head>
 
<title>Mengedit Data</title>
 
</head>
 
<body>
 
<?php
 
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
 
mysql_select_db("kppl") or die("Gagal membuka database.");

$id = $_POST['No']; 
$nama = $_POST['nama'];
 
$alamat = $_POST['alamat'];
 
$telepon = $_POST['telepon'];
$jam = $_POST['jam'];
 
$query = mysql_query("update tokobuku set nama_toko='$nama', alamat='$alamat', telp='$telepon', operasional='$jam' where ID='$id'");
 
mysql_close($koneksi);
 
?>
 
<p>Data sudah ter-update. Silakan dicek di <a href="daftar.php">daftar.php</a></p>
 
</body>
 
</html>