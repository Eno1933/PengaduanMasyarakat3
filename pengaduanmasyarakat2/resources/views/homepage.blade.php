<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f0f2f5;
            color: #333;
        }
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-bottom: 5px solid #2a5298;
        }
        nav {
            display: flex;
            justify-content: center;
            background: #fff;
            padding: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            color: #1e3c72;
            padding: 10px 15px;
            transition: background 0.3s, color 0.3s;
            border-radius: 5px;
            position: relative;
        }
        nav a:hover {
            background: #1e3c72;
            color: white;
        }
        nav a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #1e3c72;
            bottom: -5px;
            left: 0;
            transform: scaleX(0);
            transition: transform 0.3s;
        }
        nav a:hover::after {
            transform: scaleX(1);
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        .content {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .active {
            display: block;
            opacity: 1;
        }
        footer {
            background: #595f6a;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        h2 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #1e3c72;
        }
        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
        img {
            border-radius: 10px;
            margin-top: 15px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>LaporIn</h1>
</header>

<nav>
    <a href="#" onclick="showContent('home')">Home</a>
    <a href="#" onclick="showContent('tentang')">Tentang</a>
    <a href="#" onclick="showContent('kontak')">Kontak</a>
    <a href="#" onclick="showContent('bantuan')">Bantuan</a>
    <a href="{{ route('login') }}" style="background: #1e3c72; color: white;">Login</a>
</nav>

<div class="container">
    <div id="home" class="content active">
        <h2>Selamat Datang</h2>
        <p>Sistem Pengaduan Masyarakat membantu warga untuk melaporkan permasalahan mereka secara online.</p>
        <img src="{{ asset('images/banner.jpg') }}" width="100%" alt="Banner Pengaduan">
    </div>

    <div id="tentang" class="content">
        <h2>Tentang</h2>
        <p>Aplikasi ini dibuat untuk memudahkan masyarakat dalam melaporkan kejadian atau masalah yang mereka hadapi.</p>
    </div>

    <div id="kontak" class="content">
        <h2>Kontak</h2>
        <p>Email: support@pengaduanmasyarakat.com</p>
        <p>Telepon: 0812-3456-7890</p>
        <p>Alamat: Jl. Raya No. 123, Jakarta</p>
    </div>

    <div id="bantuan" class="content">
        <h2>Bantuan</h2>
        <p>Jika Anda mengalami kesulitan dalam penggunaan aplikasi ini, silakan hubungi tim support kami melalui email atau telepon.</p>
    </div>
</div>

<footer>
    <p>&copy; 2025 Pengaduan Masyarakat</p>
</footer>

<script>
    function showContent(id) {
        var contents = document.querySelectorAll('.content');
        contents.forEach(content => content.classList.remove('active'));

        document.getElementById(id).classList.add('active');
    }
</script>

</body>
</html>
