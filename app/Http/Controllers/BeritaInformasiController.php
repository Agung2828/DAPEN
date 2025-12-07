<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaInformasi;
use Illuminate\Support\Facades\File;

class BeritaInformasiController extends Controller
{
    /**
     * LIST / INDEX
     */
    public function index()
    {
        $berita = BeritaInformasi::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }
    public function dashboard()
    {
        // Ambil semua berita, terbaru dulu
        $berita = BeritaInformasi::orderBy('tanggal', 'desc')->get();

        // Tampilkan ke halaman Dashboard
        return view('Dashboard', compact('berita'));
    }
    /**
     * STORE
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/berita'), $namaFoto);
        }

        BeritaInformasi::create([
            'kategori'   => $request->kategori,
            'tanggal'    => $request->tanggal,
            'foto'       => $namaFoto,
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $berita = BeritaInformasi::findOrFail($id);

        // Jika ada foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($berita->foto && File::exists(public_path('uploads/berita/' . $berita->foto))) {
                File::delete(public_path('uploads/berita/' . $berita->foto));
            }

            // Upload baru
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/berita'), $namaFoto);

            $berita->foto = $namaFoto;
        }

        // Update data
        $berita->update([
            'kategori'  => $request->kategori,
            'tanggal'   => $request->tanggal,
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto'      => $berita->foto,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $berita = BeritaInformasi::findOrFail($id);

        if ($berita->foto && File::exists(public_path('uploads/berita/' . $berita->foto))) {
            File::delete(public_path('uploads/berita/' . $berita->foto));
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
