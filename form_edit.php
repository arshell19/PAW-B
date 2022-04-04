<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Form Edit Data</title>
</head>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];
$sql = "SELECT * FROM tbl_053 where id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>

<h3 align="center">FORMULIR EDIT DATA</h3>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>
<form method="post" action="update.php">

    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA MAHASISWA
            </div>
            <div class="card-body">

            <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']?>">
            <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs'] ?>" placeholder="Masukkan NIM" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'] ?>" placeholder="Masukkan Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" name="jk_mhs" value="<?php echo $row['jk_mhs'] ?>" placeholder="Masukkan Jenis Kelamin" class="form-control">
                </div>

                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="agama_mhs" value="<?php echo $row['agama_mhs'] ?>" placeholder="Masukkan Agama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_mhs" placeholder="Masukkan Alamat Mahasiswa" rows="4"><?php echo $row['alamat_mhs'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</form>
<?php }?>
</body>
</html>