<?php
session_start();
include 'koneksi.php';

// Cek login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data admin yang login
$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM tbadmin WHERE id='$id'");
$admin = mysqli_fetch_assoc($query);

// Template
require_once "template/header.php";
require_once "template/navbar.php";
require_once "template/sidebar.php";
?>

<body>
    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h1 class="mb-2">Selamat Datang, <?= htmlspecialchars($admin['username']); ?>!</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Profil Admin</li>
            </ol>
            <li class="card shadow-lg mx-auto" style="max-width: 600px;">
                <div class="card-header bg-primary text-white text-center">
                    Data Diri Admin
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($admin['username']); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($admin['email']); ?></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td><?= htmlspecialchars($admin['password']); ?></td>
                        </tr>
                    </table>
                    <div class="text-center mt-3">
                        <a href="edit_profil.php" class="btn btn-success px-4">Edit Profil</a>
                    </div>
                </div>
            </li>
        </main>

        <?php require_once "template/footer.php"; ?>
    </div>
</body>

</html>