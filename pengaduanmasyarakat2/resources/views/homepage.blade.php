<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporIn - Sistem Pengaduan Masyarakat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --mustard: #F9BE4A;
            --fern: #45B69F;
            --indigo: #283480;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #2c3e50;
            min-height: 100vh;
            position: relative;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, var(--indigo), var(--fern));
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .header-content h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        nav {
            background: white;
            padding: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: var(--indigo);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background: var(--mustard);
            color: white;
            transform: translateY(-2px);
        }

        nav a.login-btn {
            background: var(--mustard);
            color: white;
        }

        nav a.login-btn:hover {
            background: var(--fern);
        }

        .main-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border-top: 4px solid var(--fern);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-top: 4px solid var(--mustard);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: var(--fern);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .feature-card h3 {
            color: var(--indigo);
            margin-bottom: 0.5rem;
        }

        .content {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .content.active {
            display: block;
            opacity: 1;
        }

        .section-title {
            color: var(--indigo);
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: center;
        }

        footer {
            background: var(--indigo);
            color: white;
            text-align: center;
            padding: 1rem;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .highlight {
            color: var(--mustard);
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .header-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>LaporIn</h1>
            <p>Suara Anda, Perubahan Kita Bersama</p>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <a href="#" onclick="showContent('home')">Beranda</a>
            <a href="#" onclick="showContent('tentang')">Tentang</a>
            <a href="#" onclick="showContent('kontak')">Kontak</a>
            <a href="#" onclick="showContent('bantuan')">Bantuan</a>
            <a href="#" class="login-btn">Login</a>
        </div>
    </nav>

    <main class="main-container">
        <div id="home" class="content active">
            <h2 class="section-title">Selamat Datang di <span class="highlight">LaporIn</span></h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">📝</div>
                    <h3>Buat Laporan</h3>
                    <p>Laporkan masalah dengan mudah dan cepat melalui platform kami</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Pantau Progress</h3>
                    <p>Pantau status laporan Anda secara real-time</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Respons Cepat</h3>
                    <p>Tim kami siap merespons setiap laporan dengan cepat</p>
                </div>
            </div>
        </div>

        <div id="tentang" class="content">
            <h2 class="section-title">Tentang <span class="highlight">Kami</span></h2>
            <div class="feature-card">
                <p>LaporIn adalah platform pengaduan masyarakat yang dirancang untuk memudahkan komunikasi antara masyarakat dan pemerintah. Kami berkomitmen untuk menciptakan lingkungan yang lebih baik melalui partisipasi aktif masyarakat.</p>
            </div>
        </div>

        <div id="kontak" class="content">
            <h2 class="section-title">Hubungi <span class="highlight">Kami</span></h2>
            <div class="feature-card">
                <p>Email: support@laporin.id</p>
                <p>Telepon: 0812-3456-7890</p>
                <p>Alamat: Jl. Raya No. 123, Jakarta</p>
            </div>
        </div>

        <div id="bantuan" class="content">
            <h2 class="section-title">Pusat <span class="highlight">Bantuan</span></h2>
            <div class="feature-card">
                <p>Tim support kami siap membantu Anda 24/7. Silakan hubungi kami melalui berbagai channel yang tersedia.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 LaporIn - Sistem Pengaduan Masyarakat</p>
    </footer>

    <script>
        function showContent(id) {
            document.querySelectorAll('.content').forEach(content => {
                content.classList.remove('active');
            });
            document.getElementById(id).classList.add('active');
        }
    </script>
</body>
</html>