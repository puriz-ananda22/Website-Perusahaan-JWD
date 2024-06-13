<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Perusahaan Unibis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.jpg" alt="Logo Perusahaan Unibis" class="logo">
        </div>
        <h1> PERUSAHAAN UNIBIS </h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?></h2>
        <p>Ini adalah halaman dashboard Perusahaan Unibis.</p>
    </main>

    <footer>
        <p> copyright &copy; 2024, Putri Rizky Ananda Malayu - JWD Juni 2024 UIN Sumatera Utara </p>
    </footer>
</body>
</html>