@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Peminjaman</div>

                <div class="card-body">
                    <form >
                        <div class="form-group">
                            <label for="anggota_id">Nama Anggota</label>
                            <input type="text" readonly value="{{$peminjaman->anggota->namaanggota}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="buku_id">Judul Buku</label>
                            <input type="text" readonly value="{{$peminjaman->buku->namabuku}}" class="form-control">
                        </div>
                        <a href="{{ route('peminjaman.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection