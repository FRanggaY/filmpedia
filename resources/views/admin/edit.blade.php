@extends('layouts.app')
@section('title', 'Dashboard')
@extends('layouts.navigation')
@section('content')
<div class="container">
    <div class="row">
        <div class="py-5">
            <h2>Edit Data Film Baru</h2>
            <a class="btn btn-primary" href="{{ route('indexadminfilm') }}">Kembali</a>
        </div>
    </div>
    @if (Session::get('success'))
    <div class="btn btn-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <form action="{{ route('updateadminfilm', $film->id_film) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="input-group mb-3">
                <label class="form-control btn-info col-2">Judul Film</label>
                <input type="text" class="form-control" name="judul" value="{{ $film->judul }}">
            </div>
            <div class="input-group mb-3">
                <label class="form-control btn-info col-2">Produser</label>
                <input type="text" class="form-control" name="produser" value="{{ $film->produser }}">
            </div>
            <div class="input-group mb-3">
                <label class="form-control btn-info col-2">Tipe</label>
                <input type="text" class="form-control" name="tipe" value="{{ $film->tipe }}">
            </div>
            <div class="input-group mb-3">
                <label class="form-control btn-info col-2">Poster Film</label>
                <input type="file" class="form-control" name="foto" >
            </div>

        <div class="row">
        <!-- /.col -->
        <div class="col-8">
            <div class="input-group mb-3">
                <img src="{{ asset('uploads/film/'. $film->foto ) }}" height="200" width="200">
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class=" form-control btn btn-primary">Perbaharui</button>
        </div>
        <!-- /.col -->
        </div>
    </form>


</div>


@endsection
