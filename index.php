<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>PPDB SMK 11Nya</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="img/logo2.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="login.php">ADMIN</a></li>
                    <li><a href="daftar.php">DAFTAR</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>SELAMAT DATANG DI SMK 11Nya</h1>
            <p>Bukan sembarang sekolah, karena cuma satu-satunya yang beda dari yang lain!<br>
                Di SMK 11Nya, belajar jadi seru, kreatif, dan penuh cerita.</p>
            <div class="hero-button">
                <a href="daftar.php">AYO DAFTAR</a>
            </div>
        </div>
    </section>

    <!----- Course ----->

    <section class="course">
        <h1>JURUSAN YANG TERSEDIA</h1>
        <p>Bebarapa jurusan yang tersedia di sekolah kami</p>

        <div class="row">
            <div data-aos="fade-up" data-aos-duration="1000" class="course-col">
                <h3>SASTRA</h3>
                <p>Sastra mempelajari karya imajinatif yang menggunakan bahasa indah, kreatif, dan penuh makna. Bidang
                    ini tidak hanya berfokus pada estetika, tetapi juga mengajarkan nilai, budaya, serta cara berpikir
                    kritis yang berguna dalam kehidupan.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="course-col">
                <h3>TEKNIK</h3>
                <p>Teknik mempelajari cara merancang dan mengelola sistem agar berfungsi secara efisien. Bidang ini
                    mengajarkan penerapan ilmu pengetahuan secara rasional untuk menciptakan solusi dan mencapai tujuan
                    yang telah direncanakan.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="2000" class="course-col">
                <h3>KESEHATAN</h3>
                <p>Kesehatan mempelajari ilmu dan keterampilan yang berkaitan dengan tubuh manusia serta upaya menjaga
                    kesehatannya. Bidang ini menekankan prosedur medis, pencegahan penyakit, dan pelayanan untuk
                    meningkatkan kualitas hidup.</p>
            </div>
        </div>
    </section>

    <!----- campus ----->

    <section class="campus">
        <h1>SMK NASIONAL KAMI</h1>
        <p>Beberapa SMK kami yang berada diberbagai temoat </p>

        <div class="row">
            <div class="campus-col">
                <img src="img/london.png">
                <div class="layer">
                    <h3>BATAM</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/washington.png">
                <div class="layer">
                    <h3>GORONTALO</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/newyork.png">
                <div class="layer">
                    <h3>BALI</h3>
                </div>
            </div>
        </div>

    </section>

    <!----- Facility ----->

    <section class="facilities">
        <h1>FASILITAS KAMI</h1>
        <p>Beberapa fasilitas yang ada di sekolah kami</p>

        <div class="row">
            <div class="facilities-col">
                <img src="img/library.png">
                <h3>Perpustakaan</h3>
                <p>Tersedia berbagai macam buku untuk mencari referensi</p>
            </div>
            <div class="facilities-col">
                <img src="img/basketball.png">
                <h3>Lapangan Luas</h3>
                <p>Lapangan multifungsi yang bisa digunakan untuk berbagai aktifitas</p>
            </div>
            <div class="facilities-col">
                <img src="img/cafeteria.png">
                <h3>Kafetaria</h3>
                <p>Terdapat berbagai macam makanan yang tersedia untuk dinikmati</p>
            </div>
        </div>


    </section>

    <!----- testimonial ----->

    <section class="testimonials">
        <h1>APA KATA MEREKA</h1>
        <p>Kesan dan pengalaman menarik dari siswa dan alumni SMK 11Nya.</p>

        <div class="testimonials-row">
            <div class="testimonials-col">
                <img src="img/user1.png" alt="User 1">
                <div class="testimonials-text">
                    <p>Belajar sastra bukan hanya memahami kata dan makna, tetapi juga memahami kehidupan
                        melalui bahasa yang indah. Di sini, siswa belajar menulis, berbicara, dan mengekspresikan ide
                        secara kreatif, sambil tumbuh bersama teman dan guru yang inspiratif.</p>
                    <h3>Rocky Gerung</h3>
                </div>
            </div>

            <div class="testimonials-col">
                <img src="img/user2.png" alt="User 2">
                <div class="testimonials-text">
                    <p>“SMK ini mengajarkan bahwa belajar teknik bisa menyenangkan, menantang, dan tetap
                        relevan dengan masa depan. Siswa tidak hanya belajar teori, tetapi juga praktik langsung untuk
                        menciptakan solusi yang efisien dan bermanfaat.”</p>
                    <h3>Elon Musk</h3>
                </div>
            </div>

            <div class="testimonials-col">
                <img src="img/user3.jpg" alt="User 3">
                <div class="testimonials-text">
                    <p>“Siswa diajarkan bagaimana menjaga kesehatan diri dan orang lain melalui praktik dan teori.
                        Lingkungan belajar yang mendukung membuat mereka siap menjadi tenaga kesehatan yang profesional
                        dan berintegritas.”</p>
                    <h3>Tirta Peng Peng </h3>
                </div>
            </div>
        </div>
    </section>


    <!----- Call To Action ----->

    <section class="cta">
        <h1>Gabung sekarang bersama kami<br>Nikmati fasilitas terbaiknya</h1>
        <a href="daftar.php" class="hero-btn">DAFTAR SEKARANG</a>
    </section>

    <!----- Footer ----->

    <!-- <section class="footer">
        <h4>Tentang Kami</h4>
        <p>Kunjungi kami melalui instagram @smk_binusvi<br>Lokasi Jl. Pegangsaan Timur No. 86</p>
    </section> -->

    <footer class="footer-custom">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-text">Copyright &copy; SMK 11Nya 2025</div>
            </div>
        </div>
    </footer>

    <!-------JavaScript for Toggle Menu-------->
    <script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>