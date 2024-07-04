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
            <b>List Mahasiswa</b>
        </div>
        <div class="card-body mt-3">
            <a href="/mahasiswa/tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Mahasiswa</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $key => $value)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->nim_mahasiswa }}</td>
                                <td>{{ $value->nama_mahasiswa }}</td>
                                <td>{{ $value->tanggal_lahir }}</td>
                                <td>{{ $value->jenis_kelamin }}</td>
                                <td>{{ $value->jurusan->nama_jurusan }}</td>
                                <td>
                                    <a href="/mahasiswa/{{ $value->id }}/edit" class="badge bg-primary">
                                        Edit
                                    </a>
                                    <a href="/mahasiswa/{{ $value->id }}/hapus" class="badge bg-danger">
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
