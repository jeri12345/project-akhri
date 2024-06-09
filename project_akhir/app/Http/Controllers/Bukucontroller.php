<?php

namespace App\Http\Controllers;

use App\Models\Bukumodel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function __construct()
    {
        if($this->middleware('auth')){
            return redirect('home');
        }
    }

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
        $buku = Bukumodel::find($id);
        return view('halaman.detailbuku', compact('buku'));
}

public function edit($id)
{
    $buku = Bukumodel::find($id);
    // code to edit the book details
    return view('halaman.editbuku', ['buku' => $buku]);
}
public function update(Request $request, string $id)
    {
        $request->validate([
            'namabuku' => 'required|min:3',
            'judul' => 'required',
            'kategory' => 'required',
            
        ]);
        bukuModel::where('id',$id)
        ->update(
            [
                'namabuku' => $request->input('namabuku'),
                'judul' => $request->input('judul'),
                'kategory' => $request->input('kategory'),
                
            ]
            );
        return redirect('/buku');
    }
public function destroy($id)
{
    // code to delete the book
    $buku = Bukumodel::find($id);
    $buku->delete();
    return redirect()->route('buku.index'); // redirect to the book index page
}
}