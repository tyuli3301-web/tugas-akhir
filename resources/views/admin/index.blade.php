<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard Admin - Daftar Obat</h2>
        <div>
            <a href="{{ route('katalog') }}" class="btn btn-outline-secondary me-2">Lihat Katalog</a>
            <a href="{{ route('admin.create') }}" class="btn btn-success">+ Tambah Obat Baru</a>
        </div>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Obat</th>
                        <th>Bahan Aktif</th>
                        <th>Target Hama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($obats) && $obats->count() > 0)
                        @foreach($obats as $key => $obat)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('img/' . $obat->gambar) }}" alt="" style="width: 60px; height: 60px; object-fit: contain;">
                            </td>
                            <td><strong>{{ $obat->nama_obat }}</strong></td>
                            <td>{{ $obat->bahan_aktif }}</td>
                            <td>{{ $obat->target_hama }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.edit', $obat->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('admin.destroy', $obat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus obat ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data obat timun.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>