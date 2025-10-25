<?php
    include 'koneksi.php';

    require_once "template/sidebar.php";
    require_once "template/header.php";
    require_once "template/navbar.php";
    require_once "template/sidebar.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol>


            <?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'beranda':
            include "beranda.php";
            break;
        case 'daftar_peserta':
            include "daftar_peserta.php";
            break;
        case 'daftar_nilai':
            include "daftar_nilai.php";
            break;
        default:
            include "beranda.php";
            break;
    }
}
?>

            <?php
    require_once "template/footer.php";
?>

        </div>
    </main>
</div>


</body>

</html>