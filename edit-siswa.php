<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_siswa WHERE id_siswa = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA SISWA
            </div>
            <div class="card-body">
              <form action="update-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                  <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option selected value="<?php echo $row['alamat'] ?>"><?php echo $row['jenis_kelamin'] ?></option><hr><hr>
                    <option value="LAKI-LAKI">Laki-laki</option>
                    <option value="PEREMPUAN">perempuan</option>
                    <option value="KHUSUS">khusus</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kls">
                  <option style="background-color: red;" selected value="<?php echo $row['kelas'] ?>">
            <?php
            if ($row['kelas'] == 'X') {
                echo 'kelas 10';
            } elseif ($row['kelas'] == 'XI') {
                echo 'kelas 11';
            } elseif ($row['kelas'] == 'XII') {
                echo 'kelas 12';
            } else {
                echo $row['kelas']; // untuk kelas lain jika ada
            }
            ?>
        </option><br><hr>
        <option value="X">kelas 10</option>
        <option value="XI">kelas 11</option>
        <option value="XII">kelas 12</option>
                  </select>
                </div>  
              
             
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

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