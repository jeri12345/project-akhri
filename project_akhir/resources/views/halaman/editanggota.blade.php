@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Buku</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('anggota.update', $anggota->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="namaanggota">namaanggota</label>
                            <input type="text" class="form-control" id="namaanggota" name="namaanggota" value="{{ $anggota->namaanggota }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $anggota->alamat }}">
                        </div>

                        

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection