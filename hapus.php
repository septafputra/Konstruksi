<html>
 
<head>
 
<title>Menghapus Data</title>
 
</head>
 
<body>
 
<?php
 
$koneksi = mysql_connect("localhost", "root", "") or die("Gagal konek ke server.");
 
mysql_select_db("kppl") or die("Gagal membuka database.");
 
$no = $_GET['no'];
 
mysql_query("delete from tokobuku where ID='$no'") or die("Gagal menghapus data.");
 
mysql_close($koneksi);
 
?>
 
<p>Data telah dihapus. Silakan dicek di <a href="daftar.php">daftar.php</a></p>
 
</body>
 
</html>