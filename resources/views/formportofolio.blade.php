@extends('admin')

@section('content')
    <div class="container">
        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">        
            @csrf
          <div class="mb-3">
            <label for="" class="form-label">Tittle</label>
            <input type="text" class="form-control" name="tittle" id="tittle" value="{{ $portofolio->tittle }}">  
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Kategori</label>
            <select name="kategori" class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option>Pilih Kategori</option>
              <option value="Tradisional">Tradisional</option>
              <option value="Modern">Modern</option>
            </select>  
            
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $portofolio->deskripsi }}" >  
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto_porto" id="foto_porto"value="{{ $portofolio->foto_porto}}" >  
          </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection