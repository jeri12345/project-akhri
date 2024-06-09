@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Peminjaman</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('peminjaman.update', $peminjaman->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="anggota_id">Nama Anggota</label>
                            <select class="form-control" id="anggota_id" name="anggota_id">
                                @foreach ($dataAnggota as $anggota)
                                    <option value="{{ $anggota->id }}" {{ $peminjaman->anggota_id == $anggota->id ? 'selected' : '' }}>{{ $anggota->namaanggota }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="buku_id">Judul Buku</label>
                            <select class="form-control" id="buku_id" name="buku_id">
                                @foreach ($dataBuku as $buku)
                                    <option value="{{ $buku->id }}" {{ $peminjaman->buku_id == $buku->id ? 'selected' : '' }}>{{ $buku->namabuku }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection