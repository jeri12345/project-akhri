@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Buku</div>

                <div class="card-body">
                    <form >
                        <div class="form-group">
                            <label for="namabuku">nama buku</label>
                            <input readonly type="text" class="form-control" id="namabuku" name="namabuku" value="{{ $buku->namabuku }}">
                        </div>

                        <div class="form-group">
                            <label for="judul">judul</label>
                            <input readonly type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
                        </div>

                        <div class="form-group">
                            <label for="kategory">kategory</label>
                            <input readonly type="text" class="form-control" id="kategory" name="kategory" value="{{ $buku->kategory }}">
                        </div>
                        <a href="{{route('buku.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection