@extends('layouts.app')
@section('title', 'Login')

@section('content')

    <!-- Login Form -->
  <div class="container">
    @if (Session::get('failed'))
    <div class="btn btn-danger">
        {{ Session::get('failed') }}
    </div>
    @endif
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">
            <form action="{{ route('postlogin') }}" method="POST">
                @csrf
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"/>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" />
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
