<?php
session_start();
include 'koneksi.php';

// Cek login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data admin
$username = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM tbadmin WHERE username='$username'");
$admin = mysqli_fetch_assoc($query);

// Jika form disubmit
if (isset($_POST['update'])) {
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_password = $_POST['password'];

    // Jika password kosong, pakai password lama
    if (empty($new_password)) {
        $new_password = $admin['password'];
    }

    $update = mysqli_query($conn, "UPDATE tbadmin SET 
        username='$new_username',
        email='$new_email',
        password='$new_password'
        WHERE id=" . $admin['id']
    );

    if ($update) {
        $_SESSION['username'] = $new_username;
        echo "<script>alert('Profil berhasil diperbarui!'); window.location='admin.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat memperbarui profil.');</script>";
    }
}

// Template
require_once "template/header.php";
require_once "template/navbar.php";
require_once "template/sidebar.php";
?>

<body>
    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h1 class="mb-2">Edit Profil</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Edit Profil Admin</li>
            </ol>
            <div class="card shadow-lg mx-auto" style="max-width: 600px;">
                <div class="card-header bg-primary text-white text-center fs-6">
                    Form Edit Profil
                </div>
                <div class=" card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control"
                                value="<?= htmlspecialchars($admin['username']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="<?= htmlspecialchars($admin['email']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control"
                                placeholder="Kosongkan jika tidak ingin mengubah password">
                        </div>

                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success px-4">Simpan</button>
                            <a href="admin.php" class="btn btn-danger px-4">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <?php require_once "template/footer.php"; ?>
    </div>
</body>

</html>