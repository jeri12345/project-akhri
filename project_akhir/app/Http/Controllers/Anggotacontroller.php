<?php

namespace App\Http\Controllers;
use App\Models\anggotaModel;
use Illuminate\Http\Request;

class Anggotacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota =anggotaModel::all();
        return view('halaman.dataanggota', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("halaman.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaanggota' => 'required',
            'alamat' => 'required',
           
        ]);

        anggotamodel::create($request->all());

        return redirect('dataanggota')
            ->with('success', 'anggota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = anggotamodel::find($id);

        return view('halaman.dataanggota.detail', ['anggota' => $anggota]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = anggotamodel::find($id);

        return view('halaman.dataanggota.edit', ['anggota' => $anggota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaanggota' => 'required|min:3',
            'alamat' => 'required|numeric',
            
        ],
       [
                'namabuku.required' => 'Nama Harus di Isi',
                'judul.required' => 'Umur Harus di Isi',
                

        ]);
        anggotaModel::where('id',$id)
        ->update(
            [
                'namaanggota' => $request->input('namaanggota'),
                'alamat' => $request->input('alamat'),
                
            ]
            );
        return redirect('/halaman.dataanggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        anggotaModel::where('id',$id)->delete();

        return redirect('/halaman.databuku');
    }
}