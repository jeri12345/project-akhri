<?php

namespace App\Http\Controllers;
use App\Models\peminjamanModel;
use Illuminate\Http\Request;

class Peminjamancontroller extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = PeminjamanModel::with('anggota', 'buku')->get();
        return view('halaman.datapeminjaman', compact('peminjaman'));
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
            'namabuku' => 'required',
            
        ]);

        peminjamanmodel::create($request->all());

        return redirect('datapeminjaman')
            ->with('success', 'peminjaman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = peminjamanmodel::find($id);

        return view('halaman.detail', ['peminjaman' => $peminjaman]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = peminjamanmodel::find($id);

        return view('halaman.edit', ['peminjaman' => $peminjaman]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaanggota' => 'required|min:3',
            'namabuku' => 'required|numeric',
          
        ],
       [
                'namaanggota.required' => 'Nama Harus di Isi',
                'namabuku.required' => 'Umur Harus di Isi',
                

        ]);
        peminjamanModel::where('id',$id)
        ->update(
            [
                'namaanggota' => $request->input('namaanggota'),
                'namabuku' => $request->input('namabuku'),
                
            ]
            );
        return redirect('/datapeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        peminjamanModel::where('id',$id)->delete();

        return redirect('/datapeminjaman');
    }
}