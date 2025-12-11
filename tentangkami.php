<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIEGA</title>
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
            max-width: 1000px;
            margin: auto;
        }
        h2, h3, h4 {
            color: #003366;
        }
        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Tentang SIEGA</h1>
</header>

<nav>
    <div class="nav-left">
        <img src="img/k.png" alt="Logo SIEGA">
    </div>

    <div class="nav-right">
        <a href="index.php">Home</a>
        <a href="tentangkami.php">Tentang Kami</a>
        <a href="kontak.php">Kontak</a>
    </div>
</nav>

<section>
    <h2>Tentang Kami</h2>
    <p>Program Studi Sistem Informasi – E Commerce – Game Technology
    Unika Soegijapranata mendapatkan ijin operasional program studi Sistem Informasi pada tahun 2013 
    dengan program konsentrasi Sistem Informasi dan Game Technology. Selanjutnya di tahun 2017, dibuka program
    kuliah ganda Akuntansi+Sistem Informasi (AKSI) dan konsentrasi E-Commerce di tahun 2018.</p>

    <h3>Konsentrasi Pembelajaran di SIEGA</h3>

    <h4>Konsentrasi Sistem Informasi</h4>
    <ul>
        <li>Manajemen Hubungan Pelanggan</li>
        <li>Sistem Informasi Perusahaan</li>
        <li>Kecerdasan Bisnis</li>
        <li>Teknologi Baru dan Inovasi Sistem Informasi</li>
        <li>Perencanaan Sumber Daya Perusahaan</li>
        <li>Audit Sistem Informasi</li>  
    </ul>

    <h4> Konsentrasi E-Commerce</h4>
    <ul>
        <li>Hukum Cyber</li>
        <li>Manajemen Hubungan Pelanggan</li>
        <li>Perilaku Konsumen</li>
        <li>Perdagangan Internasional</li>
        <li>Teknologi Keuangan</li>
        <li>Pemasaran Digital dan Media Baru</li> 
    </ul>

    <h4> Konsentrasi Game Technology</h4>
    <ul>
        <li>Animasi 2D & 3D</li>
        <li>Game Nirkabel</li>
        <li>Kecerdasan Buatan</li>
        <li>Antarmuka Game</li>
        <li>Teknologi Game</li>
        <li>Pengembangan Game Online</li>
    </ul>
</section>

<footer>
    <p>&copy; 2025 SIEGA - Sistem Informasi</p>
</footer>

</body>
</html>