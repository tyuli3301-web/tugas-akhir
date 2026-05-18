<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObatTimun - Portal Informasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-bg: #76d73b; 
            --text-white: #ffffff;
            --hover-blue: #007bff; 
        }
        
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f9f4; 
        }
        
        .hero-section { 
            background-color: var(--primary-bg); 
            color: var(--text-white); 
            padding: 40px 20px; 
            text-align: center;
            position: relative;
        }

        .navbar {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto 30px auto;
            padding: 0 20px;
        }

        .nav-item {
            color: var(--text-white);
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.2s ease-in-out;
        }

        .nav-item:hover {
            background-color: var(--hover-blue);
            color: var(--text-white);
        }

        .hero-title {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0 10px 0;
        }

        .hero-subtitle {
            font-size: 16px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-katalog {
            background-color: var(--text-white);
            color: #555;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            display: inline-block;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
            font-size: 16px;
        }

        .btn-katalog:hover {
            background-color: #e8f5e9;
        }

        .container { 
            padding: 40px 20px; 
            max-width: 800px; 
            margin: auto; 
            text-align: center; 
        }
        
        .container h2 { 
            color: #2e6f40; 
            margin-bottom: 15px; 
        }
        
        .container p { 
            color: #555; 
            line-height: 1.6; 
            font-size: 16px; 
        }
    </style>
</head>
<body>

    <div class="hero-section">
        <nav class="navbar">
            <a href="{{ route('home')}}" class="nav-item">Beranda</a>
            <a href="{{route('katalog')}}" class="nav-item">Katalog Obat</a>
            <a href="{{route('dosis')}}" class="nav-item">Dosis & Aplikasi</a>
        </nav>

        <h1 class="hero-title">Portal Informasi Obat Timun</h1>
        <p class="hero-subtitle">Panduan Penggunaan Insektisida untuk Pengendalian Hama pada Tanaman Mentimun</p>
        <a href="{{route('katalog')}}" class="btn-katalog">Lihat Daftar Obat</a>
    </div>

    <div class="container">
        <h2>Selamat Datang di ObatTimun</h2>
        <p>Website ini menyajikan informasi mengenai jenis insektisida yang saya pakai dalam menanam timun, avidor dicampur mutualdigunakan untuk membasmi serangga oteng-oteng sedangkan prevathon digunakan untuk hama ulat ketika masa panen</p>
    </div>

</body>
</html>