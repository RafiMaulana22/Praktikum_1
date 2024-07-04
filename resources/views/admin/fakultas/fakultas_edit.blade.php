@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/fakultas">Fakultas</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Form --}}
    <form method="POST" action="/fakultas/{{ $detail->id }}/edit" class="card">
        @csrf
        <div class="card-header">
            <b>Form Fakultas</b>
        </div>
        <div class="card-body mt-3">
            <div class="row">
                <div class="col-lg-3">
                    <label for="nama_fakultas">Nama Fakultas</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" value="{{ $detail->nama_fakultas }}"
                        placeholder="Masukkan nama fakultas...">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan Data</button>
            <a href="/fakultas" class="btn btn-danger">Kembali</a>
        </div>
    </form>
    {{-- End Form --}}
@endsection
