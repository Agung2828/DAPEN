@extends('layout.admin.index')

@section('content')
    <h4>Tambah Gallery</h4>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Judul Gallery</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Gallery</label>
                    <input type="file" name="images[]" class="form-control" multiple required>
                    <small class="text-muted">
                        Bisa pilih banyak foto sekaligus (Ctrl / Shift)
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Caption (opsional, urut sesuai foto)</label>
                    <input type="text" name="captions[]" class="form-control mb-2" placeholder="Caption foto 1">
                    <input type="text" name="captions[]" class="form-control mb-2" placeholder="Caption foto 2">
                    <input type="text" name="captions[]" class="form-control mb-2" placeholder="Caption foto 3">
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </div>
        </div>
    </form>
@endsection
