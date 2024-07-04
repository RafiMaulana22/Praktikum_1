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
            <b>List Jurusan</b>
        </div>
        <div class="card-body mt-3">
            <a href="/jurusan/tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Jurusan</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $key => $value)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->nama_jurusan }}</td>
                                <td>
                                    <a href="/jurusan/{{ $value->id }}/edit" class="badge bg-primary">
                                        Edit
                                    </a>
                                    <a href="/jurusan/{{ $value->id }}/hapus" class="badge bg-danger">
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
