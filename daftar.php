<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    $getMaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
    $getMaxidN = mysqli_query($conn, "SELECT MAX(RIGHT(id_nilai, 5)) AS id FROM tb_nilai");
    $d = mysqli_fetch_object($getMaxid);
    $n = mysqli_fetch_object($getMaxidN);
    $generateId = 'P'.date('Y').sprintf("%05s", $d->id+1);
    $generateIdN = 'N'.date('Y').sprintf("%05s", $d->id+1);
    
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
        '".$generateId."',
        '".date('Y-m-d')."',
        '".$_POST['th_ajaran']."',
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
    if ($insert){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
    if ($insertnilai){
        echo '<script>window.location="berhasil.php?id='.$generateIdN.'"</script>';}
    }else{
        echo 'huft'.mysqli_error($conn);
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

            <!-- <div class="row"><i class="fa-solid fa-calendar-days"></i><input type="text" name="th_ajaran"
                    value="2025/2026" readonly>
            </div> -->
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
                    placeholder="Nomor Induk Siswa Nasional"></div>
            <div class="row"><i class="fa-solid fa-school"></i><input type="text" name="asal_sekolah"
                    placeholder="Asal Sekolah"></div>
            <div class="row"><i class="fa-solid fa-user"></i><input type="text" name="nm_peserta"
                    placeholder="Nama Lengkap"></div>
            <div class="row"><i class="fa-solid fa-location-dot"></i><input type="text" name="tmp_lahir"
                    placeholder="Tempat Lahir"></div>
            <div class="row"><i class="fa-solid fa-cake-candles"></i><input type="date" name="tgl_lahir"></div>

            <div class="row">
                <i class="fa-solid fa-venus-mars"></i>
                <select name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="row"><i class="fa-solid fa-phone"></i><input type="number" name="no_hp"
                    placeholder="No. Telepon"></div>

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
                    placeholder="Nilai Rata-rata Raport"></div>

            <div class="row row-alamat"><i class="fa-solid fa-map-location-dot"></i><textarea name="alamat"
                    placeholder="Alamat Lengkap"></textarea></div>

            <div class="row">
                <i class="fa-solid fa-info"></i>
                <select name="sumber_informasi">
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
                    placeholder="Bahasa Indonesia"></div>
            <div class="row"><i class="fa-solid fa-calculator"></i><input type="number" name="MTK"
                    placeholder="Matematika"></div>
            <div class="row"><i class="fa-solid fa-flask"></i><input type="number" name="IPA"
                    placeholder="Ilmu Pengetahuan Alam"></div>
            <div class="row"><i class="fa-solid fa-language"></i><input type="number" name="BINGG"
                    placeholder="Bahasa Inggris"></div>

            <div class="row button">
                <input type="submit" name="submit" value="Daftar Sekarang">
            </div>
        </form>
    </div>
</body>

</html>