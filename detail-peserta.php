<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'] ?? '';

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$id' ");
$p = mysqli_fetch_object($peserta);

$nilai = mysqli_query($conn, "SELECT * FROM tb_nilai WHERE id_nilai = 'N" . substr($id, 1) . "'");
$n = mysqli_fetch_object($nilai);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peserta | PPDB SMK 11Nya</title>
    <link rel="stylesheet" href="<?= $main_url ?>css/detail-peserta.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="card-title">Detail Peserta</h2>
            <div class="info-grid">
                <div><span>Kode Pendaftaran:</span> <?= $p->id_pendaftaran ?></div>
                <div><span>Tahun Ajaran:</span> <?= $p->th_ajaran ?></div>
                <div><span>Jurusan:</span> <?= $p->jurusan ?></div>
                <div><span>NISN:</span> <?= $p->NISN ?></div>
                <div><span>Asal Sekolah:</span> <?= $p->asal_sekolah ?></div>
                <div><span>Nama Lengkap:</span> <?= $p->nm_peserta ?></div>
                <div><span>Tempat, Tanggal Lahir:</span> <?= $p->tmp_lahir.', '.$p->tgl_lahir ?></div>
                <div><span>Jenis Kelamin:</span> <?= $p->jenis_kelamin ?></div>
                <div><span>No. Telepon:</span> <?= $p->no_hp ?></div>
                <div><span>Agama:</span> <?= $p->agama ?></div>
                <div><span>Nilai Rata-rata Raport:</span> <?= $p->raport ?></div>
                <div class=" alamat"><span>Alamat:</span> <?= $p->alamat ?></div>
            </div>
        </div>

        <div class="card">
            <h2 class="card-title">Nilai Ujian Nasional</h2>
            <table class="nilai-table">
                <thead>
                    <tr>
                        <th>Bahasa Indonesia</th>
                        <th>Matematika</th>
                        <th>IPA</th>
                        <th>Bahasa Inggris</th>
                        <th>Rata-rata</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $n->BINDO ?? '-' ?></td>
                        <td><?= $n->MTK ?? '-' ?></td>
                        <td><?= $n->IPA ?? '-' ?></td>
                        <td><?= $n->BINGG ?? '-' ?></td>
                        <td>
                            <?php 
                            if ($n) {
                                $avg = ($n->BINDO + $n->MTK + $n->IPA + $n->BINGG) / 4;
                                echo number_format($avg, 2);
                            } else {
                                echo '-';
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="footer-custom">
            <div class="footer-container">
                <div class="footer-content">
                    <div class="footer-text">Copyright &copy; SMK 11Nya 2025</div>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>