<?php
include 'koneksi.php';
error_reporting(0);
session_start();

// Jika sudah login, langsung ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // tidak di-hash

    // Cek di database
    $sql = "SELECT * FROM tbadmin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        // Simpan data ke session
        $_SESSION['id'] = $row['id']; // karena kolomnya 'id'
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PPDB SMK 11Nya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/stlogin.css">
</head>

<body>
    <div class="wrapper">
        <div class="title"><span>Admin Login</span></div>
        <form action="" method="POST">
            <div class="row">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email" name="email" value="<?= htmlspecialchars($email ?? '') ?>"
                    required>
            </div>
            <div class="row">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="row button">
                <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">
                Belum punya akun? <a href="register.php">Daftar sekarang</a>
            </div>
        </form>
    </div>
</body>

</html>