<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h2 align="center">DATA MAHASISWA</h2>
	<table class="table">
		<tr class="table-primary" align="center">
			<td>ID</td>
			<td>NAMA</td>
			<td>NIM</td>
			<td>JENIS KELAMIN</td>
			<td>AGAMA</td>
			<td>ALAMAT</td>
			<td>ACTION</td>
		</tr>
		<?php
            include "koneksi.php";
            $sql="SELECT * FROM tbl_053";
            $hasil= mysqli_query($koneksi,$sql);
            while($baris=mysqli_fetch_array($hasil))
            {
        ?>
		<tr class="table-secondary" align="center">
			<td><?php echo $baris['id_mhs'];?></td>
			<td><?php echo $baris['nim_mhs'];?></td>
			<td><?php echo $baris['nama_mhs'];?></td>
			<td><?php echo $baris['jk_mhs'];?></td>
			<td><?php echo $baris['agama_mhs'];?></td>
			<td><?php echo $baris['alamat_mhs'];?></td>
			<td><button class="btn btn-secondary"><a href="form_edit.php?id=<?php echo $baris['id_mhs'];?>">Edit</a></button> or  <button class="btn btn-secondary"><a href="delete.php?id=<?php echo $baris['id_mhs'];?>">Delete</a></button></td>
		</tr>
	<?php }
	?>
	</table>
	<button><a href="form_mhs.php">[+] Tambah Data</a></button>
</body>
</html>