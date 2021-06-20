@extends('layouts.app')
@section('title', 'Dashboard')
@extends('layouts.navigation')
@section('content')
<div class="container">
    <div class="row">
        <div class="py-5">
            <h2>Data Film</h2>
            <a class="btn btn-primary" href="{{ route('indexadminfilm') }}">Kembali</a>
        </div>
    </div>

    <div class="card col-lg-8 col-md-8 col-sm-8">
        <div class="card-body ">
            <img src="{{ asset('uploads/film/'. $film->foto ) }}" class="mx-auto" width="300" height="300" >
            <div class="card" >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Judul Film : {{ $film->judul }} </li>
                  <li class="list-group-item">Produser : {{ $film->produser }} </li>
                  <li class="list-group-item">Tipe : {{ $film->tipe }} </li>
                  <li class="list-group-item">Tanggal Dipost : {{ $settanggal }} </li>
                </ul>
              </div>
        </div>
      </div>





</div>


@endsection
