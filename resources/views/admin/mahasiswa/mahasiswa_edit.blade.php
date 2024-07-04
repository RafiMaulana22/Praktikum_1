@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Form --}}
    <form method="POST" action="/mahasiswa/{{ $detail->id }}/edit" class="card">
        @csrf
        <div class="card-header">
            <b>Form Mahasiswa</b>
        </div>
        <div class="card-body mt-3">
            <div class="row">
                <div class="col-lg-3">
                    <label for="nim_mahasiswa">NIM Mahasiswa</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" id="nim_mahasiswa" value="{{ $detail->nim_mahasiswa }}"
                        name="nim_mahasiswa" placeholder="Masukkan nomor induk mahasiswa...">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" id="nama_mahasiswa" value="{{ $detail->nama_mahasiswa }}"
                        name="nama_mahasiswa" placeholder="Masukkan nama lengkap mahasiswa...">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                </div>
                <div class="col-lg-9">
                    <input type="date" class="form-control" id="tanggal_lahir" value="{{ $detail->tanggal_lahir }}"
                        name="tanggal_lahir">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
                        <option disabled>Pilih Jenis Kelamin...</option>
                        <option value="Laki-Laki" {{ $detail->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                        </option>
                        <option value="Perempuan" {{ $detail->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="id_jurusan">Jurusan</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-select" name="id_jurusan" aria-label="Default select example">
                        <option disabled>Pilih Jurusan...</option>
                        @foreach ($jurusan as $key => $value)
                            <option value="{{ $value->id }}" {{ $detail->id_jurusan == $value->id ? 'selected' : '' }}>{{ $value->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Edit Data</button>
            <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
        </div>
    </form>
    {{-- End Form --}}
@endsection
