<?php

namespace App\Http\Controllers;
use App\Models\peminjamanModel;
use App\Models\anggotaModel;
use App\Models\bukuModel;
use Illuminate\Http\Request;

class Peminjamancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = PeminjamanModel::with('anggota', 'buku')->get();
        $dataAnggota = anggotaModel::all();
        $dataBuku = bukuModel::all();
        return view('halaman.datapeminjaman', compact('peminjaman', 'dataAnggota', 'dataBuku'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman = peminjamanmodel::find($id);
        $dataAnggota = anggotaModel::all();
        $dataBuku = bukuModel::all();
        return view('halaman.editpeminjaman', ['peminjaman' => $peminjaman, 'dataAnggota' => $dataAnggota, 'dataBuku' => $dataBuku]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            
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
        $dataAnggota = anggotaModel::all();
        $dataBuku = bukuModel::all();
        return view('halaman.detailpeminjaman', compact('peminjaman', 'dataAnggota', 'dataBuku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjaman = peminjamanmodel::find($id);
        $dataAnggota = anggotaModel::all();
        $dataBuku = bukuModel::all();
        return view('halaman.editpeminjaman', ['peminjaman' => $peminjaman, 'dataAnggota' => $dataAnggota, 'dataBuku' => $dataBuku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
          
        ]);
        peminjamanModel::where('id',$id)
        ->update(
            [
                'anggota_id' => $request->input('anggota_id'),
                'buku_id' => $request->input('buku_id'),
                
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