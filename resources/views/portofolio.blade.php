@extends('admin')

@section('content')

<div class="container pb-0 pt-5">
  <div class="row">
    <div class="col col-md-8">
      <a href="{{ url('portofolio/add') }}"><button class="btn btn-primary d-flex justify-content-end">Tambah Data</button></a>
    </div>
    
  </div>
</div>

<div class="container d-flex justify-content-center pt-2">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tittle</th>
          <th scope="col">Kategori</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Foto</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($portofolio as $item)
          
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $item->tittle }}</td>
          <td>{{ $item->kategori }}</td>
          <td>{{ $item->deskripsi }}</td>
          <td>
            <img src="\storage\{{ $item->foto_porto }}" alt="" width="100" height="100"></td>
          <td>
            <a href="portofolio/delete/{{ $item -> id }}"><button class="btn btn-danger">HAPUS</button></a>
            <a href="portofolio/edit/{{ $item -> id }}"><button class="btn btn-success">EDIT</button></a>
          </td>
        </tr>
       
        @endforeach
        
      </tbody>
    </table>
</div>
@endsection
    