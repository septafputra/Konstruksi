<?php
$server="localhost";
$username="root";
$password="";
$database="kppl";
$conect = mysql_connect($server,$username,$password)or die("server tidak ditemukan");
$pilih_db = mysql_select_db($database)or die("database tidak ada");
?>

<?php
$kata=$_POST['cari'];
if(isset($_POST['cari2'])){
$query=mysql_query("select * from tokobuku where nama_toko like '%$kata%'");
$jumlah=mysql_num_rows($query);
if($jumlah>0){
echo "ditemukan data dengan keyword $kata sejumlah $jumlah data<br>";
while($row=mysql_fetch_array($query)){
echo "<a href=detail_berita.php?id=$row[ID]>$row[nama_toko]</a>";
}
}
else{
echo "tidak ditemukan berita dengan kata $kata";
}
}
?>
