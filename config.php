<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","db_koperasi");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
error_reporting(0);


?>