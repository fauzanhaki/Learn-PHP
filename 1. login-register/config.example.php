<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'nama_database';

// Koneksi ke database
$db = mysqli_connect($hostname, $username, $password, $database_name);

// Cek koneksi
if ($db->connect_error) {
  echo "Koneksi database gagal";
  die();
}