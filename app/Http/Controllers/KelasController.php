<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // READ
    public function index()
    {
        $data = Kelas::all();
        return view('kelas.index', compact('data'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('kelas.create');
    } 

    // INSERT
    public function store(Request $request)
    {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('kelas.index');
    }


    // FORM EDIT
    public function edit($id)
    {
        $data = Kelas::find($id);
        return view('kelas.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = Kelas::find($id);

        $data->update([
            'nama_kelas' => $request->nama_kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/kelas');
    }

    // DELETE
    public function destroy($id)
    {
        $data = Kelas::find($id);
        $data->delete();

        return redirect('/kelas');
    }
}
