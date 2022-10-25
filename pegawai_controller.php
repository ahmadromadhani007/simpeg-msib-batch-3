<?php
include_once 'koneksi.php';
include_once 'models/Pegawai.php';
//step 1 tangkap request form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$foto = $_POST['foto'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jabatan = $_POST['jabatan'];
$divisi = $_POST['divisi'];
$alamat = $_POST['alamat'];
//step 2 simpan ke array
$data = [
    $nip, // ? 1
    $nama, // ? 2
    $gender, // ? 3
    $foto, // ? 4
    $tmp_lahir, // ? 5
    $tgl_lahir, // ? 6
    $jabatan, // ? 7
    $divisi, // ? 8
    $alamat // ? 9
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Pegawai();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    default:
        header('Location:index.php?hal=pegawai');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=pegawai');
