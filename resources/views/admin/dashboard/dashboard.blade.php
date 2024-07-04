@extends('layout.template')

@section('content')
    {{-- Alert --}}
    <div class="alert alert-primary">
        Selamat Datang <b>{{ Auth::user()->name }}</b> Di Halaman Dashboard
    </div>
    {{-- End Alert --}}
    <div class="row mt-3">
        <div class="col-lg-8">
            <ol class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start bg-primary">
                    <div class="ms-2 me-auto">
                        <div class="text-white">
                            <i class='bx bxs-institution'></i> Jurusan
                        </div>
                    </div>
                    <span class="badge bg-primary rounded-pill">{{ $jumlah_jurusan }}</span>
                </li>
            </ol>

            <div class="row mt-1">
                @foreach ($jumlah_mahasiswa as $key => $value)
                    <div class="col-md-4 mt-3">
                        <div class="card text-bg-light">
                            <div class="card-header text-center bg-primary text-white">
                                <span class="text-white">{{ $value['nama_jurusan'] }}</span>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mt-3"><b>{{ $value['jumlah'] }}</b></h5>
                                <span>Mahasiswa</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-4 mt-3">
            <span><b>Detail Berdasarkan Gender</b></span>
            <div class="card mt-3">
                <div class="card-body">
                    <p class="card-text">Jumlah Mahasiswa Laki-Laki : {{ $laki }}</p>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <p class="card-text">Jumlah Mahasiswa Perempuan : {{ $perempuan }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
