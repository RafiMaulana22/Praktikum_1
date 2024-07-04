<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $mahasiswa = MahasiswaModel::with('jurusan')->get();
        $jurusan = JurusanModel::with('mahasiswa')->get();
        $jumlah_jurusan = JurusanModel::count();
        $laki = MahasiswaModel::where('jenis_kelamin', 'Laki-Laki')->count();
        $perempuan = MahasiswaModel::where('jenis_kelamin', 'Perempuan')->count();

        foreach ($jurusan as $key => $value) {
            $id_jurusan = $value->id;
            $nama_jurusan = $value->nama_jurusan;
            $jumlah = count($value->mahasiswa);
            $jumlah_mahasiswa[$id_jurusan] = [
                'nama_jurusan' => $nama_jurusan,
                'jumlah' => $jumlah
            ];
        }
        // return response()->json($jumlah_mahasiswa);

        return view('admin.dashboard.dashboard', compact(
            'title',
            'mahasiswa',
            'jurusan',
            'jumlah_jurusan',
            'laki',
            'perempuan',
            'jumlah_mahasiswa'
        ));
    }

    public function indjur()
    {
        $data['title'] = 'Dashboard Jurusan';
        $data['welcome'] = 'Fakultas Sains dan Teknologi';

        return view('admin.dashboard.dasjur', $data);
    }
}
