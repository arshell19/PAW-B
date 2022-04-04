<?php 
include "koneksi.php";

$nim = $_POST['nim_mhs'];
$nama = $_POST['nama_mhs'];
$jk = $_POST['jk_mhs'];
$agama = $_POST['agama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_053 VALUES(null, '$nim', '$nama', '$jk', '$agama', '$alamat')";
$hasil = mysqli_query($koneksi,$sql);

if (!$hasil){
	echo "gagal";
}else{
	echo "<a href='index.php'>Tampilkan Data";
}

?>