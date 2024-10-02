<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn         = $_POST['nisn'];
$kelas        = $_POST['kls'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jk'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (kelas, nama_lengkap, alamat, jenis_kelamin, nisn) VALUES ('$kelas', '$nama_lengkap', '$alamat', '$jenis_kelamin', '$nisn')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>