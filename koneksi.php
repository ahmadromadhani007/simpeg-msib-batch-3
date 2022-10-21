<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=dbpegawai_kampusmerdeka;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'DATABASE CONNECTION WAS SUCCESFULLY';
} catch (PDOException $e) {
    echo 'Terjadi kesalahan saat koneksi/query dgn sebab ' . $e->getMessage();
}