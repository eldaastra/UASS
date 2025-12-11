<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIEGA </title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: white;
        }
        header {
            background-image: url('img/j.png');
            color: white;
            padding: 20px;
            text-align: center;
        }
nav {
    background: white;
    padding: 12px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav .nav-left img {
    height: 40px; /* bisa diganti sesuai ukuran */
}

nav .nav-right a {
    color: #0055a4 ;
    margin: 0 15px;
    font-weight: bold;
    text-decoration: none;
}

nav .nav-right a:hover {
    text-decoration: underline;
}
        section {
            max-width: 900px;
            margin: auto;
        }
        h2 {
            color: black;
        }
        h3 {
            color: #003366;
        }
        iframe {
            width: 100%;
            height: 350px;
            border: none;
            border-radius: 8px;
        }
        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        .map-img {
    width: 900px;      /* ubah sesuai kebutuhan */
    border-radius: 10px;
    display: block;
    margin: 10px auto;
}

    </style>
</head>

<body>

<header>
    <h1>Kontak SIEGA</h1>
</header>

<nav>
    <div class="nav-left">
        <img src="img/k.png" alt="Logo SIEGA">
    </div>

    <div class="nav-right">
        <a href="index.php">Home</a>
        <a href="tentang.php">Tentang Kami</a>
        <a href="kontak.php">Kontak</a>
    </div>
</nav>

<section>
    <h2>Informasi terkait Program Studi Sistem Informasi</h2>

    <h3>Alamat</h3>
    <p>Gedung Henricus Constant Lt 8 Unika Soegijapranata<br>
    Jl. Pawiyatan Luhur IV/1, Bendan Duwur, Semarang, Jawa Tengah 50234</p>
    
    <h3>Jam Kerja</h3>
    <p>Senin – Jumat pukul 08.00 – 15.00 WIB</p>

    <h3>Email</h3>
    <p>si@unika.ac.id</p>

    <h3>No. Telepon</h3>
    <p>+62-819-0338-5595</p>

<h3>Lokasi</h3>
<img src="img/m.png" alt="Maps SIEGA" class="map-img">

</section>

<footer>
    <p>&copy; 2025 SIEGA - Sistem Informasi</p>
</footer>

</body>
</html>