<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    // ====== BUAT ID PENDAFTARAN OTOMATIS ======
    $getMaxid = mysqli_query($conn, "SELECT id_pendaftaran FROM tb_pendaftaran ORDER BY id_pendaftaran DESC LIMIT 1");
    $d = mysqli_fetch_assoc($getMaxid);

    if ($d && preg_match('/P(\d{4})(\d{5})/', $d['id_pendaftaran'], $match)) {
        $tahunTerakhir = $match[1];
        $angkaTerakhir = (int)$match[2];
        $newNum = ($tahunTerakhir == date('Y')) ? $angkaTerakhir + 1 : 1;
    } else {
        $newNum = 1;
    }

    $generateId = 'P' . date('Y') . sprintf("%05s", $newNum);


    // ====== BUAT ID NILAI OTOMATIS ======
    $getMaxidN = mysqli_query($conn, "SELECT id_nilai FROM tb_nilai ORDER BY id_nilai DESC LIMIT 1");
    $n = mysqli_fetch_assoc($getMaxidN);

    if ($n && preg_match('/N(\d{4})(\d{5})/', $n['id_nilai'], $matchN)) {
        $tahunTerakhirN = $matchN[1];
        $angkaTerakhirN = (int)$matchN[2];
        $newNumN = ($tahunTerakhirN == date('Y')) ? $angkaTerakhirN + 1 : 1;
    } else {
        $newNumN = 1;
    }

    $generateIdN = 'N' . date('Y') . sprintf("%05s", $newNumN);


    // ====== SIMPAN DATA KE DATABASE ======
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
        '".$generateId."',
        '".date('Y-m-d')."',
        '".$_POST['jurusan']."',
        '".$_POST['NISN']."',
        '".$_POST['asal_sekolah']."',
        '".$_POST['nm_peserta']."',
        '".$_POST['tmp_lahir']."',
        '".$_POST['tgl_lahir']."',
        '".$_POST['jenis_kelamin']."',
        '".$_POST['no_hp']."',
        '".$_POST['agama']."',
        '".$_POST['raport']."',
        '".$_POST['alamat']."',
        '".$_POST['sumber_informasi']."'
    )");

    $insertnilai = mysqli_query($conn, "INSERT INTO tb_nilai VALUES(
        '".$generateIdN."',
        '".$_POST['BINDO']."',
        '".$_POST['MTK']."',
        '".$_POST['IPA']."',
        '".$_POST['BINGG']."'
    )");

    if ($insert && $insertnilai){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
    } else {
        echo 'Error: '.mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB SMK 11Nya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $main_url ?>/css/daftar.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Formulir Pendaftaran Siswa Baru</div>

        <form action="" method="post">
            <div class="section-title">Isi Biodata Anda</div>

            <div class="row">
                <i class="fa-solid fa-book"></i>
                <select name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Sastra Indonesia">Sastra Indonesia</option>
                    <option value="Sastra Inggris">Sastra Inggris</option>
                    <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Asisten Keperawatan">Asisten Keperawatan</option>
                    <option value="Teknologi Laboratorium Medik">Teknologi Laboratorium Medik</option>
                    <option value="Farmasi Klinis & Komunitas">Farmasi Klinis & Komunitas</option>
                </select>
            </div>

            <div class="row"><i class="fa-solid fa-id-card"></i><input type="text" name="NISN"
                    placeholder="Nomor Induk Siswa Nasional" required></div>
            <div class="row"><i class="fa-solid fa-school"></i><input type="text" name="asal_sekolah"
                    placeholder="Asal Sekolah" required></div>
            <div class="row"><i class="fa-solid fa-user"></i><input type="text" name="nm_peserta"
                    placeholder="Nama Lengkap" required></div>
            <div class="row"><i class="fa-solid fa-location-dot"></i><input type="text" name="tmp_lahir"
                    placeholder="Tempat Lahir" required></div>
            <div class="row"><i class="fa-solid fa-cake-candles"></i><input type="date" name="tgl_lahir" required></div>

            <div class="row">
                <i class="fa-solid fa-venus-mars"></i>
                <select name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="row"><i class="fa-solid fa-phone"></i><input type="number" name="no_hp"
                    placeholder="No. Telepon" required></div>

            <div class="row">
                <i class="fa-solid fa-praying-hands"></i>
                <select name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>

            <div class="row"><i class="fa-solid fa-chart-line"></i><input type="number" name="raport"
                    placeholder="Nilai Rata-rata Raport" required></div>

            <div class="row row-alamat"><i class="fa-solid fa-map-location-dot"></i><textarea name="alamat"
                    placeholder="Alamat Lengkap" required></textarea></div>

            <div class="row">
                <i class="fa-solid fa-info"></i>
                <select name="sumber_informasi" required>
                    <option value="">Darimana Informasi PPDB didapatkan?</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Siswa Aktiv">Siswa Aktiv</option>
                    <option value="Guru/Karyawan">Guru/Karyawan</option>
                    <option value="Brosur">Brosur</option>
                    <option value="Spanduk">Spanduk</option>
                    <option value="Surat_Kabar">Surat Kabar</option>
                    <option value="Radio">Radio</option>
                    <option value="Internet">Internet</option>
                    <option value="Sosial Media">Sosial Media</option>
                </select>
            </div>

            <div class="section-title"><i class="fa-solid fa-clipboard-list"></i> Nilai Ujian Nasional</div>

            <div class="row"><i class="fa-solid fa-pen-nib"></i><input type="number" name="BINDO"
                    placeholder="Bahasa Indonesia" required></div>
            <div class="row"><i class="fa-solid fa-calculator"></i><input type="number" name="MTK"
                    placeholder="Matematika" required></div>
            <div class="row"><i class="fa-solid fa-flask"></i><input type="number" name="IPA"
                    placeholder="Ilmu Pengetahuan Alam" required></div>
            <div class="row"><i class="fa-solid fa-language"></i><input type="number" name="BINGG"
                    placeholder="Bahasa Inggris" required></div>

            <div class="row button">
                <input type="submit" name="submit" value="Daftar Sekarang">
            </div>
        </form>
    </div>
</body>

</html>