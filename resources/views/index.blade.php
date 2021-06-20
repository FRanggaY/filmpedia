@extends('layouts.app')
@section('title', 'Dashboard')
@extends('layouts.navigation')
@section('content')
<div class="container">
    @if (Session::get('success'))
    <div class="btn btn-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="container py-5 px-5">

    @if (auth()->user()->akses==="admin")
    <div class="card" style="width: 24rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-info">
              <p class="text-black">Selamat Datang, {{ auth()->user()->akses }}</p>
            </li>
          <li class="list-group-item">
            <p>Pengaturan</p>
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body btn-primary">
                          <a href="{{ route('indexadminfilm') }}" class="card-link text-white">
                            <h5 class="card-title">Semua Data Film</h5>
                          </a>
                        </div>
                      </div>
                </div>
            </div>
          </li>
        </ul>
      </div>
      @endif


    </div>
</div>


@endsection
