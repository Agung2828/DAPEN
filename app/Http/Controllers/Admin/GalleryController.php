<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('items')->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'judul' => 'required|string|max:255',
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gallery = Gallery::create([
            'judul' => $request->judul,
            'lokasi' => $request->lokasi,
        ]);

        // ✅ CEK FILE
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $i => $image) {
                $path = $image->store('gallery', 'public');

                GalleryItem::create([
                    'gallery_id' => $gallery->id,
                    'image' => $path,
                    'caption' => $request->captions[$i] ?? null,
                ]);
            }
        }

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery berhasil ditambahkan');
    }

    public function destroyItem($id)
    {
        $item = GalleryItem::findOrFail($id);

        // ✅ HAPUS FILE FISIK
        if (Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }

        // ✅ HAPUS DB
        $item->delete();

        return back()->with('success', 'Foto berhasil dihapus');
    }
}
