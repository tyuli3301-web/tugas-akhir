<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('katalog', compact('obats'));
    }
    public function adminIndex()
    {
        $obats = Obat::all();
        return view('admin.index', compact('obats'));
    }
    public function adminCreate()
    {
        return view('admin.create');
    }
    public function adminStore(Request $request)
    {
        $request->validate([
           'nama_obat' => 'required',
           'bahan_aktif' => 'required',
           'target_hama' => 'required',
           'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ]);
        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img'), $namaGambar);

        Obat::create([
            'nama_obat' => $request->nama_obat,
            'bahan_aktif' => $request->bahan_aktif,
            'target_hama' => $request->target_hama,
            'gambar' => $namaGambar
        ]);
        return redirect()->route('admin.index')->with('sukses', 'Obat berhasil ditambahkan!');
    }
    public function adminEdit($id)
        {
        $obat = Obat::findOrFail($id);
        return view('admin.edit', compact('obat'));
        }
        public function adminUpdate(Request $request, $id)
        {
        $obat = Obat::findOrFail($id);
        $request->validate([
            'nama_obat' => 'required',
            'bahan_aktif' => 'required',
            'target_hama' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
       
        $namaGambar = $obat->gambar;

        if ($request->hasFile('gambar')) {
            if  (file_exists(public_path('img/' . $obat->gambar))) {
            unlink(public_path('img/' . $obat->gambar));
            }
            $namaGambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $namaGambar);
        }

        $obat->update([
            'nama_obat' => $request->nama_obat,
            'bahan_aktif' => $request->bahan_aktif,
            'target_hama' => $request->target_hama,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.index')->with('sukses', 'Obat berhasil diperbaharui!');
        }
    public function adminDestroy($id)
    {
        $obat = Obat::findOrFail($id);

        if (file_exists(public_path('img/' . $obat->gambar))) {
            unlink(public_path('img/' . $obat->gambar));
        }
        $obat->delete();
        return redirect()->route('admin.index')->with('sukses', 'Obat berhasil dihapus!');
    }

}
