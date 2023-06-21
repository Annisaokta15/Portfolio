@extends('admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col col-md-3"></div>
            <div class="col col-md-6">
                <form action="profil/update/{{$profil->id}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="{{ $profil->nama }}">
                    </div>
                    {{-- <div class="mb-3">
                      <label for="" class="form-label">Alamat</label>
                      <textarea name="alamat" id="alamat" class="form-control" cols="70" rows="2" value="{{ $profil->alamat }}"></textarea>
                    </div> --}}
                    {{-- <div class="mt-3 mb-2">
                      <label for="" class="form-label">Jenis Kelamin</label>
                          <!-- <select name="jeniskelamin" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option >Pilih Jenis Kelamin</option>
                            <option value="{{ $profil->jeniskelamin }}">Laki-laki</option>
                            <option value="{{ $profil->jeniskelamin }}">Perempuan</option>
                          </select> -->
                        <input type="Text" class="form-control" name="jeniskelamin" id="jeniskelamin" value="{{ $profil->jeniskelamin}}"> --}}

                  {{-- </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tempat Lahir</label>
                        <input type="Text" class="form-control" name="tempatlahir" id="tempatlahir" value="{{ $profil->tempatlahir }}">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Tanggallahir</label>
                        <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" value="{{ $profil->tanggallahir }}">
                      </div> --}}
                      <div class="mb-3">
                        <label for="" class="form-label">About</label>
                        <textarea name="about" id="about" class="form-control" cols="30" rows="5" value="{{ $profil->about }}"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" value="{{ $profil->foto }}">
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
            </div>
            <div class="col col-md-3"></div>
        </div>
    </div>

 @endsection