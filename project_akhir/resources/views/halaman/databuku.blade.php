@extends('layout.master')

@section('title')
    Data Buku
@endsection

@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <form action="/buku" method="post">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  
                      @csrf
                      <div class="form-group">
                        <label>namabuku</label>
                        <input type="text" class="form-control" name="namabuku">
                      </div>
                      <div class="form-group">
                          <label>judul</label>
                          <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label>kategory</label>
                            <input type="text" class="form-control" name="kategory">
                          </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Buku</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->namabuku }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td class="text-bold-500">{{ $item->kategory }}</td>
                                    <td>
                                        <a href="{{ route('buku.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
  
                                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
