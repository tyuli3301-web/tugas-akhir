<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow border-0">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Form Tambah Obat Baru</h4>
        </div>
        <div class="card-body p-4">
            
            {{-- Bagian Validasi Error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Bagian Form Input --}}
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Nama Obat</label>
                    <input type="text" name="nama_obat" class="form-control" value="{{ old('nama_obat') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bahan Aktif</label>
                    <input type="text" name="bahan_aktif" class="form-control" value="{{ old('bahan_aktif') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Target Hama</label>
                    <input type="text" name="target_hama" class="form-control" value="{{ old('target_hama') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Produk Baru</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>