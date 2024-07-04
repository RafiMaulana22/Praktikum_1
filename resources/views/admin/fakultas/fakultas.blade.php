@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Tabel --}}
    <div class="card">
        <div class="card-header">
            <b>List Fakultas</b>
        </div>
        <div class="card-body mt-3">
            <a href="/fakultas/tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Fakultas</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Fakultas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fakultas as $key => $value)
                        <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->nama_fakultas }}</td>
                                <td>
                                    <a href="/fakultas/{{ $value->id }}/edit" class="badge bg-primary">
                                        Edit
                                    </a>
                                    <a href="/fakultas/{{ $value->id }}/hapus" class="badge bg-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- End Tabel --}}
@endsection
