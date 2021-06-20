@extends('layouts.app')
@section('title', 'Dashboard')
@extends('layouts.navigation')
@section('content')
<div class="container">
    <div class="row">
        <div class="py-5">
            <h2>Semua Data Film</h2>
            <a class="btn btn-primary" href="{{ route('createadminfilm') }}">Buat Data Film Baru</a>
        </div>
    </div>
    @if (Session::get('success'))
    <div class="btn btn-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="table table-bordered">
        <tr class="text-center">
            <th>No</th>
            <th>Judul</th>
            <th>Produser</th>
            <th>Tipe</th>
            <th>Foto</th>
            <th>Tanggal Post</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($films as $film)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $film->judul }}</td>
            <td>{{ $film->produser }}</td>
            <td>{{ $film->tipe }}</td>
            <td>
                <div class="card">
                    <a href="{{ asset('uploads/film/'. $film->foto ) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Lihat Poster</a>
                </div>
                <br>nama file: {{ $film->foto }}
            </td>
            <td>{{ $film->created_at }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('showadminfilm',$film->id_film) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('editadminfilm',$film->id_film) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('destroyadminfilm',$film->id_film) }}" onclick="return confirm('yakin mau dihapus?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $films->links() !!}



</div>


@endsection
