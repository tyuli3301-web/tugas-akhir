<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow border-0">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Form Edit Obat</h4>
        </div>
        <div class="caard-body p-4">
            <form action="{{ route('admin.update', $obat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Obat</label>
                    <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bahan Aktif</label>
                    <input type="text" name="bahan_aktif" class="form-control" value="{{ $obat->$bahan_aktif }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Target Hama</label>
                    <input type="text" name="target_hama" class="form-control" value="{{ $obat->$target_hama }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Produk Baru (Kosongkan jika tidak diganti)</label>
                    <input type="file" name="gambar" class="form-control">
                    <div class="mt-2">
                    <small class="text-muted">Foto saat ini:</small><br>
                    <img src="{{ asset('img/' . $obat->gambar) }}" style="width: 80px; height: 80px; object-fit: contain;">
                </div>
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning">Perbarui Data</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
</html>