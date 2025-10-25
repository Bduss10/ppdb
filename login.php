<?php
include 'koneksi.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tbadmin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PPDB SMK 11Nya</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $main_url ?>css/stlogin.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Login</div>

        <form action="" method="POST">
            <!-- Input Email -->
            <div class="row">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>

            <!-- Input Password -->
            <div class="row">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>

            <!-- Tombol Login -->
            <div class="row button">
                <input type="submit" name="submit" value="Login">
            </div>

            <!-- Link ke Register -->
            <div class="signup-link">
                Anda belum punya akun? <a href="register.php">Daftar sekarang</a>
            </div>
        </form>
    </div>
</body>

</html>