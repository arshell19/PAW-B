<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah data mahasiswa</title>
  </head>

  <body>
    <h3 align="center">FORMULIR TAMBAH DATA MAHASISWA</h3>
    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA MAHASISWA
            </div>
            <div class="card-body">
              <form action="action.php" method="POST">
                
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim_mhs" placeholder="Masukkan NIM" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_mhs" placeholder="Masukkan Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" name="jk_mhs" placeholder="Masukkan Jenis Kelamin" class="form-control">
                </div>

                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="agama_mhs" placeholder="Masukkan Agama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_mhs" placeholder="Masukkan Alamat" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>