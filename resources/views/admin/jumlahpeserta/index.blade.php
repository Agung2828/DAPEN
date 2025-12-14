@extends('layout.admin.index')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
            <h3>Jumlah Peserta</h3>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                + Edit Data Peserta
            </button>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="stats-section">
            <div class="stats-header">
                <h2>Jumlah Peserta</h2>
            </div>

            <div class="data-stats-grid">
                @foreach (['peserta_aktif' => 'Peserta Aktif', 'pensiun_ditunda' => 'Pensiun Ditunda', 'pensiun_normal' => 'Pensiun Normal', 'pensiun_dipercepat' => 'Pensiun Dipercepat', 'pensiun_janda_duda' => 'Pensiun Janda/Duda', 'pensiun_anak' => 'Pensiun Anak'] as $field => $label)
                    <div class="stat-card {{ $loop->first ? 'active-stat' : '' }}">
                        <div class="stat-number">{{ $data->$field ?? 0 }}</div>
                        <div class="stat-label">{{ $label }}</div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-3 pt-2 border-top">
                <h3 style="color:#1e3c72;font-size:28px;">
                    Total Peserta:
                    <span style="color:#fbbf24;">
                        {{ ($data->peserta_aktif ?? 0) +
                            ($data->pensiun_ditunda ?? 0) +
                            ($data->pensiun_normal ?? 0) +
                            ($data->pensiun_dipercepat ?? 0) +
                            ($data->pensiun_janda_duda ?? 0) +
                            ($data->pensiun_anak ?? 0) }}
                    </span> Orang
                </h3>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5>Edit Jumlah Peserta</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('jumlah-peserta.update', $data->id ?? 0) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        @foreach (['peserta_aktif' => 'Peserta Aktif', 'pensiun_ditunda' => 'Pensiun Ditunda', 'pensiun_normal' => 'Pensiun Normal', 'pensiun_dipercepat' => 'Pensiun Dipercepat', 'pensiun_janda_duda' => 'Pensiun Janda/Duda', 'pensiun_anak' => 'Pensiun Anak'] as $field => $label)
                            <div class="mb-3">
                                <label>{{ $label }}</label>
                                <input type="number" name="{{ $field }}" class="form-control"
                                    value="{{ $data->$field ?? 0 }}" required>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
