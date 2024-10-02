<?php
 include 'm_siswa.php';
 $data_siswa = readsiswa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial</title>
</head>
<body>
    <h2>tutorial crud</h2>
    <?php
    if (!empty($data_siswa)) {
        foreach ($data_siswa as $siswa) {
      //tampilan      
         echo $siswa['nomer'] . " || " . $siswa['nama'];
         echo "<br>";
        }

    } else {
        echo "tidak ada data siswa";
    }
    
    ?>
</body>
</html>