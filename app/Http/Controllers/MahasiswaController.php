<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title = 'Data Mahasiswa';
        $mahasiswa = MahasiswaModel::with('jurusan')->get();
        $no = 1;
        // return response()->json($mahasiswa);

        return view('admin.mahasiswa.mahasiswa', compact(
            'title',
            'mahasiswa',
            'no'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Mahasiswa';
        $jurusan = JurusanModel::get();

        return view('admin.mahasiswa.mahasiswa_tambah', compact(
            'title',
            'jurusan'
        ));
    }

    public function action_tambah(Request $request)
    {
        $nim_mahasiswa = $request->nim_mahasiswa;
        $nama_mahasiswa = $request->nama_mahasiswa;
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $id_jurusan = $request->id_jurusan;

        $mahasiswa = new MahasiswaModel();
        $mahasiswa->nim_mahasiswa = $nim_mahasiswa;
        $mahasiswa->nama_mahasiswa = $nama_mahasiswa;
        $mahasiswa->tanggal_lahir = $tanggal_lahir;
        $mahasiswa->jenis_kelamin = $jenis_kelamin;
        $mahasiswa->id_jurusan = $id_jurusan;

        $mahasiswa->save();
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil di simpan.');
    }

    public function edit($id)
    {
        $title = 'Edit Mahasiswa';
        $detail = MahasiswaModel::findOrFail($id);
        $jurusan = JurusanModel::get();

        return view('admin.mahasiswa.mahasiswa_edit', compact(
            'title',
            'detail',
            'jurusan'
        ));
    }

    public function action_edit($id, Request $request)
    {
        $nim_mahasiswa = $request->nim_mahasiswa;
        $nama_mahasiswa = $request->nama_mahasiswa;
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $id_jurusan = $request->id_jurusan;

        $mahasiswa = MahasiswaModel::findOrFail($id);
        $mahasiswa->update([
            'nim_mahasiswa' => $nim_mahasiswa,
            'nama_mahasiswa' => $nama_mahasiswa,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'id_jurusan' => $id_jurusan
        ]);

        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil di update.');
    }

    public function hapus($id)
    {
        $mahasiswa = MahasiswaModel::findOrFail($id);
        $mahasiswa->delete();

        return back()->with('success', 'Mahasiswa berhasil di hapus.');
    }
}
