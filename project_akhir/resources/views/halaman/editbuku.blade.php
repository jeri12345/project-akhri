@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Buku</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('buku.update', $buku->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="namabuku">nama buku</label>
                            <input type="text" class="form-control" id="namabuku" name="namabuku" value="{{ $buku->namabuku }}">
                        </div>

                        <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
                        </div>

                        <div class="form-group">
                            <label for="kategory">kategory</label>
                            <input type="text" class="form-control" id="kategory" name="kategory" value="{{ $buku->kategory }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection