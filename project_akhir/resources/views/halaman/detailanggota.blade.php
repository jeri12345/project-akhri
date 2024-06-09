@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Anggota</div>

                <div class="card-body">
                    <form>

                        <div class="form-group">
                            <label for="namaanggota">namaanggota</label>
                            <input readonly type="text" class="form-control" id="namaanggota" name="namaanggota" value="{{ $anggota->namaanggota }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input readonly type="text" class="form-control" id="alamat" name="alamat" value="{{ $anggota->alamat }}">
                            </div>
                            <a href="{{ route('anggota.index')}}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection