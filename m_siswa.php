<?php 
include 'koneksi.php';

function readsiswa() {
    global $koneksi;

    $query = "SELECT * FROM siswa";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $data_siswa =[];
        while ($row = mysqli_fetch_assoc($result)) {
            $data_siswa[] = $row;
        }
        return $data_siswa;
    }
    else {
        return [];
    }

    }
