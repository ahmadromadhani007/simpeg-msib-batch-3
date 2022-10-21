<?php
class Pegawai
{

    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPegawai()
    {
        $sql = "SELECT p.*,d.nama AS bagian,j.nama AS jab
        FROM pegawai p 
        INNER JOIN divisi d ON d.id = p.divisi_id
        INNER JOIN jabatan j ON j.id = p.jabatan_id
        ORDER BY p.id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
