<!DOCTYPE html>
< lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Insektisida - ObatTimun</title>
    <style>
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
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f9f4; }
        header { background-color: #76d73b; padding: 15px; }
        nav { max-width: 900px; margin: auto; display: flex; justify-content: flex-start; }
        .nav-item { color: white; text-decoration: none; font-weight: bold; font-size: 16px; padding: 8px 16px; border-radius: 20px; transition: all 0.2s ease-in-out; }
        
        /* Efek hover biru ketika disentuh kursor */
        .nav-item:hover { background-color: #007bff; }

        .container { padding: 20px; max-width: 900px; margin: auto; }
        h1 { color: #2e6f40; }
        .grid-obat { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px; }
        .kartu-obat { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-top: 4px solid #76d73b; text-align: center; }
        .foto-produk { width: 100%; height: 180px; background-color: #eee; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; border-radius: 4px; overflow: hidden; }
        .kartu-obat h3 { margin: 10px 0 5px 0; color: #333; }
        .bahan-aktif { font-size: 12px; color: #666; font-style: italic; margin-bottom: 10px; }
        .target-hama { font-size: 14px; color: #d32f2f; font-weight: bold; }
    </style>
</head>
<>

    <header>
         <div class="hero-section">
        <nav class="navbar">
            <a href="{{ route('home')}}" class="nav-item">Beranda</a>
            <a href="{{route('katalog')}}" class="nav-item">Katalog Obat</a>
            <a href="{{route('dosis')}}" class="nav-item">Dosis & Aplikasi</a>
        </nav>
         </div>
    </header>

       <div class="container">
    <h2>Katalog Obat Timun</h2>
    <p>Berikut adalah daftar produk insektisida resmi yang dapat digunakan untuk melindungi tanaman mentimun dari berbagai serangan hama:</p>

   <div class="grid-obat" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding: 20px;">
        @foreach($obats as $obat)
            <div class="kartu-obat" style="background: white; border: 1px solid #e0e0e0; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 320px; padding: 20px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                
                <div class="foto-produk" style="background-color: #f5f5f5; width: 100%; height: 260px; display: flex; align-items: center; justify-content: center; border-radius: 10px; overflow: hidden; margin-bottom: 20px;">
                    <img src="{{ asset('img/' . $obat->gambar) }}" alt="{{ $obat->nama_obat }}" style="max-width: 90%; max-height: 90%; object-fit: contain;">
                </div>

                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 8px;">{{ $obat->nama_obat }}</h3>
                <p class="bahan-aktif" style="font-size: 14px; color: #666; font-style: italic; margin-bottom: 10px;">Bahan Aktif: {{ $obat->bahan_aktif }}</p>
                <p class="target-hama" style="font-size: 16px; color: red; font-weight: bold;">Target Hama: {{ $obat->target_hama }}</p>
                
            </div>
       @endforeach
     </div>
     </div>
</body>
</html>