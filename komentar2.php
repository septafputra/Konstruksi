<html>
 
<head>
<title>Menambah Data</title>
 
</head>
<body>
<?php
 
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
 
mysql_select_db("kppl") or die("Gagal membuka database.");
 
$nama = $_POST['nama'];

$komentar = $_POST['komentar'];
$toko = $_POST['toko'];


$query = mysql_query("insert into komentar (`nama_komentar`, `komentar`, `nama_toko`) values ('$nama', '$komentar', '$toko')");
 
mysql_close($koneksi);
?>
 
<p>Data sudah tersimpan. Silakan dicek di <a href="detailpage.php">daftar.php</a></p>
 
</body>
</html>