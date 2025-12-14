<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaInformasi;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BeritaInformasiController extends Controller
{
    /**
     * LIST / INDEX ADMIN
     */
    public function index()
    {
        $berita = BeritaInformasi::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * DASHBOARD USER
     */
    public function dashboard()
    {
        $berita = BeritaInformasi::orderBy('tanggal', 'desc')->get();
        return view('Dashboard', compact('berita'));
    }

    public function detail($id)
    {
        $berita = BeritaInformasi::findOrFail($id);
        return view('admin.berita.detail', compact('berita'));
    }

    /**
     * STORE (CREATE)
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori'  => 'required|string',
            'tanggal'   => 'required|date',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            // rapikan nama asli (hapus spasi)
            $original     = $file->getClientOriginalName();
            $safeOriginal = preg_replace('/\s+/', '_', $original);

            // nama file super unik (anti ketimpa)
            $namaFoto = Str::uuid() . '_' . $safeOriginal;

            $file->move(public_path('uploads/berita'), $namaFoto);
        }

        BeritaInformasi::create([
            'kategori'  => $request->kategori,
            'tanggal'   => $request->tanggal,
            'foto'      => $namaFoto,  // simpan nama file saja
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * UPDATE (EDIT)
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori'  => 'required|string',
            'tanggal'   => 'required|date',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $berita = BeritaInformasi::findOrFail($id);

        if ($request->hasFile('foto')) {

            // hapus foto lama (aman walau DB nyimpen path)
            if ($berita->foto) {
                $oldFotoName = basename(str_replace('\\', '/', $berita->foto));
                $oldPath = public_path('uploads/berita/' . $oldFotoName);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // upload foto baru
            $file = $request->file('foto');

            $original     = $file->getClientOriginalName();
            $safeOriginal = preg_replace('/\s+/', '_', $original);

            // nama file super unik (anti ketimpa)
            $namaFoto = Str::uuid() . '_' . $safeOriginal;

            $file->move(public_path('uploads/berita'), $namaFoto);

            $berita->foto = $namaFoto;
        }

        $berita->update([
            'kategori'  => $request->kategori,
            'tanggal'   => $request->tanggal,
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto'      => $berita->foto,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $berita = BeritaInformasi::findOrFail($id);

        if ($berita->foto) {
            $fotoName = basename(str_replace('\\', '/', $berita->foto));
            $path = public_path('uploads/berita/' . $fotoName);

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $berita->delete();

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
