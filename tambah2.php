<html>
 
<head>
<title>Menambah Data</title>
 
</head>
<body>
<?php
 
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
 
mysql_select_db("kppl") or die("Gagal membuka database.");
 
$nama = $_POST['nama'];

$alamat = $_POST['alamat'];
 
$telp = $_POST['telepon'];
 
$jam = $_POST['jam'];
 
$query = mysql_query("insert into tokobuku (`nama_toko`, `alamat`, `telp`, `operasional`) values ('$nama', '$alamat', '$telp', '$jam')");
 
mysql_close($koneksi);
?>
 
<p>Data sudah tersimpan. Silakan dicek di <a href="daftar.php">daftar.php</a></p>
 
</body>
</html>