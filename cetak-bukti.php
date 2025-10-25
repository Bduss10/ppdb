<?php
include 'koneksi.php';
$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
$p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukti Pendaftaran | PPDB SMK 11Nya</title>
    <link rel="stylesheet" type="text/css" href="<?= $main_url ?>css/cetak.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
    <script>
    window.print();
    </script>
</head>

<body>
    <div class="box">
        <!-- Kop Sekolah -->
        <div class="kop-sekolah">
            <img src="img/logo.png" alt="Logo Sekolah" class="logo">
            <div class="kop-teks">
                <h2>SMK 11 Nya</h2>
                <p>Jl. mu berat.. seumur hidup..</p>
                <p>Telp. 0840-4040-4040</p>
                <p>Email: smkn11nya@gmail.com</p>
            </div>
        </div>
        <hr class="garis-kop">



        <!-- Judul -->
        <h1 class="judul">BUKTI PENDAFTARAN</h1>

        <!-- Data Peserta -->
        <table class="table-data">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo $p->id_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $p->jurusan ?></td>
            </tr>
            <tr>
                <td>Nomor Induk Siswa Nasional</td>
                <td>:</td>
                <td><?php echo $p->NISN ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><?php echo $p->asal_sekolah ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nm_peserta ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><?php echo $p->no_hp ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $p->agama ?></td>
            </tr>
            <tr>
                <td>Nilai Rata-rata Raport</td>
                <td>:</td>
                <td><?php echo $p->raport ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
        </table>

        <!-- Tanda Tangan -->
        <div class="ttd">
            <p>Bekasi, <?php echo date('d F Y'); ?></p>
            <p>Panitia PPDB SMKN 11</p>
            <br><br><br>
            <p><strong>(________________________)</strong></p>
        </div>
    </div>
</body>

</html>