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
            color: #333;
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
        h2 {
            color: #003366;
        }
        .img-center {
            display: block;
            margin: 20px auto;
            max-width: 60%;
            border-radius: 10px;
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
    <h1>SIEGA</h1>
    <p>Sistem Informasi - E Commerce - Game Technology - Akuntansi + Sistem Informasi</p>
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
    <h2>Apa itu SIEGA?</h2>
    <p>SIEGA adalah gaya hidup, semangat, dan pengalaman baru
    Dalam bahasa Spanyol, Siega artinya panen. Dalam komunitas SIEGA atau
    Sistem Informasi, E Commerce, Game Technology, dan Akuntansi + Sistem Informasi
    di Unika Soegijapranata, kami mempercayai bahwa penguasaan teknologi informasi adalah keniscayaan. 
    Jika penerapannya sesuai, maka kita akan memanen kehidupan manusia yang lebih baik</p>

    <h3>Visi</h3>
    <p>Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian
    dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran</p>

    <h3>Misi</h3>
    <ul>
        <li>Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh dan potensi kepemimpinan.</li>
        <li>Melakukan penelitian untuk pengembangan ilmu dan teknologi demi meningkatkan kesejahteraan manusia.</li>
        <li>Melakukan pengabdian kepada masyarakat sebagai penerapan ilmu dan teknologi yang telah dikembangkan dalam penelitian dan kesejahteraan manusia.</li>
    </ul>
</section>

<footer>
    <p>&copy; 2025 SIEGA - Sistem Informasi</p>
</footer>

</body>
</html>
