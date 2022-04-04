<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$nim = $_POST['nim_mhs'];
$nama = $_POST['nama_mhs'];
$jk = $_POST['jk_mhs'];
$agama = $_POST['agama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql="UPDATE tbl_053 SET nim_mhs='$nim',nama_mhs='$nama',jk_mhs='$jk',agama_mhs='$agama',alamat_mhs='$alamat' WHERE id_mhs=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal";
}else{
    echo "<a href='index.php'>Tampilkan Data</a>";
}

?>