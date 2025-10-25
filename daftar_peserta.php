<?php
    include 'koneksi.php';

    require_once "template/sidebar.php";
    require_once "template/header.php";
    require_once "template/navbar.php";
    require_once "template/sidebar.php";
?>

<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Daftar Peserta</li>
                </ol>
                <section class="content">
                    <table class="table table-light table-hover align-middle text-center">
                        <thead class="text-light table-dark">
                            <tr>
                                <th>No</th>
                                <th>Id Pendaftaran</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Nilai Raport</th>
                                <th>Jurusan</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $list_peserta = mysqli_query($conn, "select * from
                                tb_pendaftaran");
                                while($row = mysqli_fetch_array($list_peserta)){
                                ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['id_pendaftaran'] ?></td>
                                <td><?php echo $row['id_pendaftaran'] ?></td>
                                <td><?php echo $row['nm_peserta'] ?></td>
                                <td><?php echo $row['tgl_lahir'] ?></td>
                                <td><?php echo $row['raport'] ?></td>
                                <td><?php echo $row['jurusan'] ?></td>
                                <td><?php echo $row['agama'] ?></td>
                                <td><?php echo $row['alamat'] ?></td>
                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                <td>
                                    <a class="btn btn-primary" style="margin-bottom: 4px;"
                                        href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail
                                    </a>
                                    <a class="btn btn-danger"
                                        href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"
                                        onclick="return confirm('Yakin ?')">Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        <tbody>
                            <table>
            </div>
            </section>
            <?php
    require_once "template/footer.php";
?>
</body>

</html>