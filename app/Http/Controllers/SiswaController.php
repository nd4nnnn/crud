<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Kelas;

class SiswaController extends Controller
{
    // READ (Tampil data)
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create', compact('kelas'));
    }

    // INSERT
    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect('/siswa');
    }

    // FORM EDIT
    public function edit($id)
    {
        $data = Siswa::find($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('data','kelas'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = Siswa::find($id);

        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk
        ]);

        return redirect('/siswa');
    }

    // DELETE
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect('/siswa');
    }
}
