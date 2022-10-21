<?php
//------sertakan file koneksi db-------
include_once 'koneksi.php';
//------sertakan models-----
include_once 'models/Pegawai.php';
include_once 'models/Divisi.php';
include_once 'models/Jabatan.php';
//------sertakan potongan file template web-----
include_once 'header.php';
include_once 'navigation.php';

//area main logic
//tangap area main di logic request menu di url 
$hal = $_REQUEST['hal'];
//jika ada reqeust menu di url tampilkan sesai request
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}
include_once 'footer.php';
