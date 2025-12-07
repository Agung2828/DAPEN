@extends('layout.admin.index')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
            <h3>Daftar Berita & Informasi</h3>

            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Tambah Berita
            </button>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow">
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($berita as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if ($item->foto)
                                        <img src="{{ asset('uploads/berita/' . $item->foto) }}" width="80"
                                            class="rounded">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>

                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>

                                <td>
                                    <button class="btn btn-sm btn-warning editBtn" data-item='@json($item)'
                                        data-update-url="{{ route('berita.update', $item->id) }}" data-bs-toggle="modal"
                                        data-bs-target="#editModal">Edit</button>

                                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Hapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>


    {{-- ======================= --}}
    {{--  MODAL CREATE           --}}
    {{-- ======================= --}}
    <div class="modal fade" id="createModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-primary text-white">
                    <h5>Tambah Berita</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Penghargaan">Penghargaan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Foto (Opsional)</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


    {{-- ======================= --}}
    {{--  MODAL EDIT             --}}
    {{-- ======================= --}}
    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-warning">
                    <h5>Edit Berita</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <input type="hidden" id="edit_id">

                        <div class="mb-3">
                            <label>Kategori</label>
                            <select name="kategori" id="edit_kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Penghargaan">Penghargaan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" id="edit_tanggal" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Foto Saat Ini</label><br>
                            <img id="edit_foto_preview" src="" width="120" class="rounded mb-2 d-none">
                        </div>

                        <div class="mb-3">
                            <label>Ganti Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="judul" id="edit_judul" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea id="edit_deskripsi" name="deskripsi" class="form-control" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-warning">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


    {{-- ======================= --}}
    {{--  SCRIPT EDIT MODAL      --}}
    {{-- ======================= --}}
    <script>
        document.querySelectorAll('.editBtn').forEach(btn => {
            btn.addEventListener('click', function() {

                let item = JSON.parse(this.getAttribute('data-item'));

                document.getElementById('edit_kategori').value = item.kategori;
                document.getElementById('edit_tanggal').value = item.tanggal;
                document.getElementById('edit_judul').value = item.judul;
                document.getElementById('edit_deskripsi').value = item.deskripsi;

                let img = document.getElementById('edit_foto_preview');
                if (item.foto) {
                    img.src = "/uploads/berita/" + item.foto;
                    img.classList.remove('d-none');
                } else {
                    img.classList.add('d-none');
                }

                let updateUrl = this.getAttribute('data-update-url');
                document.getElementById('editForm').action = updateUrl;
            });
        });
    </script>
@endsection
