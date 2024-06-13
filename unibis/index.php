<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Perusahaan Unibis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.jpg" alt="Logo Perusahaan Unibis" class="logo">
        </div>
        <h1>PERUSAHAAN UNIBIS</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a>
                    <ul>
                        <li><a href="foto.php">Foto</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="visi.php">Visi & Misi</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Selamat Datang di Perusahaan Unibis</h2>
        <p style="text-align: justify;">
            Pertama kali didirikan pada tahun 1972, unibis merupakan anak perusahaan PT universal Indofood produk yang mengutamakan produksi biskuit manis. Di bawah pimpinan Bapak Irawan, Unibis kemudian dengan cepat membuka cabang dan mengembangkan produk biskuit yang semakin beragam.
            Apa yang dimulai sebagai perusahaan produksi menengah di Sumatera Utara segera berubah menjadi pemasok massal dengan kapasitas produksi tahunan yang dioptimalkan untuk memenuhi permintaan pasar domestik yang tinggi di Indonesia serta pasar Asia tenggara yang berkembang pesat 
            lainnya termasuk Singapura, Malaysia, Vietnam, Hongkong, Korea dan lain-lain. Dengan lebih dari 1000 staf dan 200 personel distribusi, unibis telah berhasil membangun stabilitas dalam penjualan, jaringan distribusi dan hubungan konsumen di seluruh negeri. Dengan ketekunan 
            dan konsisten dalam menegakkan Citra mereknya, unibis membayangkan dirinya sebagai pemimpin pasar dalam biskuit berkualitas. Hal ini akan memungkinkan unibis untuk terus mendukung sistem kerja bangsa melalui berbagai program kepedulian sosial dan lingkungan dan akhirnya mampu 
            menciptakan masyarakat dan komunitas yang sehat, sejahtera dan seimbang.</p>
    </main>

    <main>
            <?php
                if (isset($_GET['page'])) {
                    require $_GET['page'] . ".php";
                } else {
                    require "main.php";
                }
            ?>

        </main>

    <footer>
        <p> copyright &copy; 2024, Putri Rizky Ananda Malayu - JWD Juni 2024 UIN Sumatera Utara </p>
    </footer>
</body>
</html>