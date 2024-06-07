<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model BukuModel
use App\Models\AnggotaModel;
class anggotacontroller extends Controller
{
    //method untuk tampil data anggota
    public function anggotatampil()
    {
        $dataanggota = AnggotaModel::orderby('id_anggota', 'ASC')
        ->paginate(5);

        return view('halaman/view_anggota',['anggota'=>$dataanggota]);
    }

    //method untuk tambah data anggota
    public function anggotatambah(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        ]);

        AnggotaModel::create([
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'prodi' => $request->prodi,
            'hp' => $request->hp
        ]);

        return redirect('/anggota');
    }

     //method untuk hapus data anggota
     public function anggotahapus($id)
     {
         $dataanggota=AnggotaModel::find($id);
         $dataanggota->delete();
 
         return redirect()->back()->with('succes, data berhasil dihapus');
     }

     //method untuk edit data anggota
    public function anggotaedit($id, Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        ]);

        $id_anggota = AnggotaModel::find($id);
        $id_anggota->nim   = $request->nim;
        $id_anggota->nama_anggota      = $request->nama_anggota;
        $id_anggota->prodi  = $request->prodi;
        $id_anggota->hp   = $request->hp;

        $id->save();

        return redirect()->back();
    }
}