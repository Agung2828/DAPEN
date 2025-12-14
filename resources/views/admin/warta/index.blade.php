@extends('layout.admin.index')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Warta</h4>
        <a href="{{ route('admin.warta.create') }}" class="btn btn-primary">
            + Tambah Warta
        </a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wartas as $warta)
                <tr>
                    <td>{{ $warta->judul }}</td>
                    <td>{{ $warta->kategori }}</td>
                    <td>{{ $warta->tanggal }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $warta->file_pdf) }}" target="_blank">
                            Lihat PDF
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
