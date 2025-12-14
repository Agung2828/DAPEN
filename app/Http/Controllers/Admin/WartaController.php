<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warta;
use Illuminate\Http\Request;

class WartaController extends Controller
{
    // ================= ADMIN =================

    // List warta (admin)
    public function index()
    {
        $wartas = Warta::latest()->get();
        return view('admin.warta.index', compact('wartas'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.warta.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required',
            'kategori' => 'required',
            'tanggal'  => 'required',
            'file_pdf' => 'required|mimes:pdf|max:10240',
        ]);

        $path = $request->file('file_pdf')->store('warta', 'public');

        Warta::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori'  => $request->kategori,
            'tanggal'   => $request->tanggal,
            'file_pdf'  => $path,
        ]);

        return redirect()->route('admin.warta.index')
            ->with('success', 'Warta berhasil ditambahkan');
    }

    // ================= USER =================

    // Halaman publik warta
    public function warta()
    {
        $wartas = Warta::latest()->get();
        return view('Warta', compact('wartas'));
    }
}
