<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perusahaan Unibis</title>
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
        <div class="login-container">
            <h2>Login</h2>
            <h2>
            <form action="authenticate.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </h2>
            
            <h2>    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </h2>
            <h2> <button type="submit">Login</button> </h2>
            </form>
        </div>
    </main>
</body>
</html>