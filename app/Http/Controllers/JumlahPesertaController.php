<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JumlahPeserta;

class JumlahPesertaController extends Controller
{
    // Halaman admin untuk lihat dan edit
    public function index()
    {
        $data = JumlahPeserta::latest()->first();
        return view('admin.jumlahpeserta.index', compact('data'));
    }

    // Update data peserta
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'peserta_aktif' => 'required|integer|min:0',
            'pensiun_ditunda' => 'required|integer|min:0',
            'pensiun_normal' => 'required|integer|min:0',
            'pensiun_dipercepat' => 'required|integer|min:0',
            'pensiun_janda_duda' => 'required|integer|min:0',
            'pensiun_anak' => 'required|integer|min:0',
        ]);

        $peserta = JumlahPeserta::findOrFail($id);
        $peserta->update($validated);

        return redirect()->route('jumlah-peserta.index')->with('success', 'Data peserta berhasil diupdate!');
    }

    // Halaman user untuk lihat data
    public function kepesertaan()
    {
        $data = JumlahPeserta::latest()->first();
        return view('kepesertaan', compact('data'));
    }
}
