<?php 
include 'koneksi.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM tbadmin WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbadmin (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Email sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Admin | PPDB SMK 11Nya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $main_url ?>css/stlogin.css">
</head>

<body>
    <div class="wrapper">
        <div class="title"><span>Admin Register</span></div>
        <form action="" method="POST">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>

            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>

            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="cpassword"
                    value="<?php echo $_POST['cpassword']; ?>" required>
            </div>

            <div class="row button">
                <input type="submit" name="submit" value="Register" />
            </div>

            <div class="signup-link">Sudah punya akun? <a href="login.php">Login sekarang</a></div>
        </form>
    </div>
</body>

</html>