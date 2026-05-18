<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosis & Aplikasi - ObatTimun</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f9f4; }
        header { background-color: #76d73b; padding: 15px; }
        nav { max-width: 800px; margin: auto; display: flex; justify-content: flex-start; }
        .nav-item { color: white; text-decoration: none; font-weight: bold; font-size: 16px; padding: 8px 16px; border-radius: 20px; transition: all 0.2s ease-in-out; }
        
        /* Efek hover biru ketika disentuh kursor */
        .nav-item:hover { background-color: #007bff; }

        .container { padding: 20px; max-width: 800px; margin: auto; }
        h1 { color: #2e6f40; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #76d73b; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .badge-cair { background-color: #2196F3; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .badge-bubuk { background-color: #FF9800; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; }
    </style>
</head>
<body>

    <header>
        <nav>
             <a href="{{ route('home')}}" class="nav-item">Beranda</a>
        </nav>
    </header>

    <div class="container">
        <h1>Panduan Dosis & Aplikasi</h1>
        <p>Gunakan tabel di bawah ini sebagai acuan takaran penyemprotan insektisida yang aman dan efektif untuk tanaman mentimun (asumsi untuk 1 tangki semprot standar 16 Liter):</p>

        <table>
            <thead>
                <tr>
                    <th>Nama Insektisida</th>
                    <th>Formulasi</th>
                    <th>Dosis per Tangki (16L)</th>
                    <th>Keterangan Takaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Prevathon 50 SC</strong></td>
                    <td><span class="badge-cair">Cair (SC)</span></td>
                    <td><strong>40 ml</strong></td>
                    <td>Biasanya dikasih tutup botol ysng ukuran 5oml tiap beli obat Prevathon</td>
                </tr>
                <tr>
                    <td><strong>Mutual 25/25 WP</strong></td>
                    <td><span class="badge-bubuk">Bubuk (WP)</span></td>
                    <td><strong>20 gram</strong></td>
                    <td>Setara dengan 1 sendok makan munjung penuh</td>
                </tr>
                <tr>
                    <td><strong>Avidor 25 WP</strong></td>
                    <td><span class="badge-bubuk">Bubuk (WP)</span></td>
                    <td><strong>20 gram</strong></td>
                    <td>Setara dengan 1 sendok makan munjung penuh</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>