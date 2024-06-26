@extends('layout.master')

@section('title')
    Data anggota
@endsection

@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <form action="/anggota" method="post">
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
                        <label>nama anggota</label>
                        <input type="text" class="form-control" name="namaanggota">
                      </div>
                      <div class="form-group">
                          <label>alamat</label>
                          <input type="text" class="form-control" name="alamat">
                        </div>
                        
                          
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama anggota</th>
                                    <th>alamat</th>
                                  
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->namaanggota }}</td>
                                    <td class="text-bold-500">{{ $item->alamat}}</td>
                                    <td>
                                        <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
  
                                        <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display: inline;">
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
