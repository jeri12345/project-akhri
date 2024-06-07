<?php

namespace App\Http\Controllers;

use App\Models\Bukumodel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Bukumodel::all();
        return view('halaman.databuku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namabuku' => 'required',
            'judul' => 'required',
            'kategory' => 'required',
        ]);

        Bukumodel::create($request->all());

        return redirect('databuku')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $buku = Bukumodel::all();
    // code to show the book details
    return view('buku.show', ['buku' => $buku]);
}

public function edit($id)
{
    $buku = Bukumodel::all();
    // code to edit the book details
    return view('halaman.edit', ['buku' => $buku]);
}


public function destroy($id)
{
    // code to delete the book
    $buku = Bukumodel::find($id);
    $buku->delete();
    return redirect()->route('halamanbuku.index'); // redirect to the book index page
}
}