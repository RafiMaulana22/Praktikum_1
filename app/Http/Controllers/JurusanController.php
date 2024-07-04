<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $title = 'Data Jurusan';
        $jurusan = JurusanModel::get();
        $no = 1;

        return view('admin.jurusan.jurusan', compact(
            'title',
            'jurusan',
            'no'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Jurusan';

        return view('admin.jurusan.jurusan_tambah', compact(
            'title'
        ));
    }

    public function action_tambah(Request $request)
    {
        $nama_jurusan = $request->nama_jurusan;

        $jurusan = new JurusanModel();
        $jurusan->nama_jurusan = $nama_jurusan;

        $jurusan->save();
        return redirect('/jurusan')->with('success', 'Jurusan berhasil di tambah.');
    }

    public function edit($id)
    {
        $title = 'Edit Jurusan';
        $detail = JurusanModel::findOrFail($id);

        return view('admin.jurusan.jurusan_edit', compact(
            'title',
            'detail'
        ));
    }

    public function action_edit($id, Request $request)
    {
        $nama_jurusan = $request->nama_jurusan;

        $jurusan = JurusanModel::findOrFail($id);
        $jurusan->update([
            'nama_jurusan' => $nama_jurusan
        ]);

        return redirect('/jurusan')->with('success', 'Jurusan berhasil di update.');
    }

    public function hapus($id)
    {
        $jurusan = JurusanModel::findOrFail($id);
        $jurusan->delete();

        return back()->with('success', 'Jurusan berhasil di hapus.');
    }
}
