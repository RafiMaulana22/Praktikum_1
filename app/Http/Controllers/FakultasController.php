<?php

namespace App\Http\Controllers;

use App\Models\FakultasModel;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $title = 'Fakultas';
        $fakultas = FakultasModel::get();
        $no = 1;

        return view('admin.fakultas.fakultas', compact(
            'title',
            'fakultas',
            'no'
        ));
    }

    public function tambah()
    {
        $title = 'Tambah Fakultas';

        return view('admin.fakultas.fakultas_tambah', compact(
            'title'
        ));
    }

    public function action_tambah(Request $request)
    {
        $nama_fakultas = $request->nama_fakultas;

        $fakultas = new FakultasModel();
        $fakultas->nama_fakultas = $nama_fakultas;

        $fakultas->save();
        return redirect('/fakultas')->with('success', 'Fakultas berhasil di tambah');
    }

    public function edit($id)
    {
        $title = 'Edit Fakultas';
        $detail = FakultasModel::findOrFail($id);

        return view('admin.fakultas.fakultas_edit', compact(
            'title',
            'detail'
        ));
    }

    public function action_edit($id, Request $request)
    {
        $nama_fakultas = $request->nama_fakultas;

        $fakultas = FakultasModel::findOrFail($id);
        $fakultas->update([
            'nama_fakultas' => $nama_fakultas
        ]);

        return redirect('/fakultas')->with('success', 'Fakultas berhasil di update.');
    }

    public function hapus($id)
    {
        $fakultas = FakultasModel::findOrFail($id);
        $fakultas->delete();

        return back()->with('success', 'Fakultas berhasil di hapus.');
    }
}
