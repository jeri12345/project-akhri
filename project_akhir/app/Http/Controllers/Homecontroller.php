<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("halaman.dashboard");
    }

    public function tables()
    {
        return view('halaman.data');
    }

    public function databuku()
    {
        return view('halaman.databuku'); 
    }
    public function dataanggota()
    {
        return view('halaman.dataanggota'); 
    }
    public function datapeminjaman()
    {
        return view('halaman.datapeminjaman'); 
    }
    
    
}
