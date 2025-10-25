<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil | PPDB ONLINE</title>
    <link rel="stylesheet" href="<?= $main_url ?>/css/daftar.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e5a72d74e.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <div class="title">
            <i class="fa-solid fa-circle-check"></i>&nbsp; Pendaftaran Berhasil
        </div>

        <div class="box-isi">
            <h2 class="success-message">Selamat! Anda telah berhasil mendaftar.</h2>

            <p class="kode-pendaftaran">
                Kode pendaftaran Anda adalah <br>
                <span><?php echo $_GET['id']; ?></span>
            </p>

            <p class=" instruksi">
                Simpan kode ini untuk mencetak bukti pendaftaran Anda.
            </p>

            <a href="cetak-bukti.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn-cetak">
                <i class="fa-solid fa-print"></i> Cetak Bukti Daftar
            </a>
        </div>
    </div>

</body>

</html>