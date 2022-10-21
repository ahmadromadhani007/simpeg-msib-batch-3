<?php
//ciptakan object dari class Pegawai
$model = new Pegawai();

//panggil fungsi untuk menampilkan data pegawai
$data_pegawai = $model->dataPegawai();

?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Pegawai</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pegawai as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['nip'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td>
                                    <a href="index.php?hal=pegawai_detail&id=<?= $row['id'] ?>">
                                    <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>