<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model BukuModel
use App\Models\BukuModel;
class bukucontroller extends Controller
{
    //method untuk tampil data buku
    public function bukutampil()
    {
        $databuku = BukuModel::orderby('kode_buku', 'ASC')
        ->paginate(5);

        return view('halaman/view_buku',['buku'=>$databuku]);
    }

    //method untuk tambah data buku
    public function bukutambah(Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required'
        ]);

        BukuModel::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'kategori' => $request->kategori
        ]);

        return redirect('/buku');
    }

     //method untuk hapus data buku
     public function bukuhapus($id)
     
        
        {
            casts::where('id',$id)->delete();
    
            return redirect('/casts');
        }
    
     }

     //method untuk edit data buku
    public function bukuedit($id, Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required'
        ]);

        $id_buku = BukuModel::find($id);
        $id_buku->kode_buku   = $request->kode_buku;
        $id_buku->judul      = $request->judul;
        $id_buku->pengarang  = $request->pengarang;
        $id_buku->kategori   = $request->kategori;

        $id_buku->save();

        return redirect()->back();
    }
}
