@extends('template')

@section('content')


  <div class="d-flex justify-content-center flex-wrap flex-md-nowrap pt-3 mb-3 pb-3 border-bottom">
    <h1 class="h2">Hallo,Selamat datang {{ Auth::user()->name }}</h1>
  </div>

@endsection