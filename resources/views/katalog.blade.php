<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Insektisida - ObatTimun</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f9f4; }
        header { background-color: #76d73b; padding: 15px; }
        nav { max-width: 900px; margin: auto; display: flex; justify-content: flex-start; }
        .nav-item { color: white; text-decoration: none; font-weight: bold; font-size: 16px; padding: 8px 16px; border-radius: 20px; transition: all 0.2s ease-in-out; }
        
        /* Efek hover biru ketika disentuh kursor */
        .nav-item:hover { background-color: #007bff; }

        .container { padding: 20px; max-width: 900px; margin: auto; }
        h1 { color: #2e6f40; }
        .grid-obat { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; margin-top: 20px; }
        .kartu-obat { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-top: 4px solid #76d73b; text-align: center; }
        .foto-produk { width: 100%; height: 180px; background-color: #eee; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; border-radius: 4px; overflow: hidden; }
        .kartu-obat h3 { margin: 10px 0 5px 0; color: #333; }
        .bahan-aktif { font-size: 12px; color: #666; font-style: italic; margin-bottom: 10px; }
        .target-hama { font-size: 14px; color: #d32f2f; font-weight: bold; }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="index.html" class="nav-item"> Kembali ke Beranda</a>
        </nav>
    </header>

    <div class="container">
        <h1>Katalog Insektisida</h1>
        <p>Berikut adalah daftar produk insektisida resmi yang dapat digunakan untuk melindungi tanaman mentimun dari berbagai serangan hama:</p>
        
        <div class="grid-obat">
            <div class="kartu-obat">
                <div class="foto-produk">
                    <img src="img/prevathon.jpeg" alt="Prevathon" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <h3>Prevathon 50 SC</h3>
                <div class="bahan-aktif">Bahan Aktif: Klorantraniliprol 50 g/l</div>
                <p class="target-hama">Target Hama: Ulat Grayak & Penggorok Daun</p>
            </div>

            <div class="kartu-obat">
                <div class="foto-produk">
                    <img src="img/mutual.jpeg" alt="Mutual" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <h3>Mutual 25/25 WP</h3>
                <div class="bahan-aktif">Bahan Aktif: Asetamiprid 25% + Buprofezin 25%</div>
                <p class="target-hama">Target Hama: Kutu Kebul & Thrips</p>
            </div>

            <div class="kartu-obat">
                <div class="foto-produk">
                    <img src="img/avidor.jpeg" alt="Avidor" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <h3>Avidor 25 WP</h3>
                <div class="bahan-aktif">Bahan Aktif: Imidakloprid 25%</div>
                <p class="target-hama">Target Hama: Kutu Daun, Thrips & Wereng</p>
            </div>
        </div>
    </div>

</body>
</html>>