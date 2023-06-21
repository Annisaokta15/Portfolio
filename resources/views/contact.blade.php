@extends('admin')

@section('content')
  
    <div class="container  d-flex justify-content-center pt-5 mt-5">
        <div class="col col-md-8">
            <div class="row">
                <table  table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach ($contact as $item)

                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->pesan }}</td>
                            <td>
                            <a href="contact/delete/{{ $item -> id }}"><button class="btn btn-danger">HAPUS</button></a>
                            </td>
                        </tr>
                        @endforeach
            </div>
        </div>
    </div>

       
    </body>
    

</table>



@endsection