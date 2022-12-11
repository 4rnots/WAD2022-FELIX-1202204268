@extends('layout.main')

@section('section')
  @include('components.navbar')
  <div class="container d-flex align-content-center justify-content-center">
    <div class="row align-items-center home">
      <div class="col-md-6">
        @auth
          <h1 class="fw-bold">Selamat Datang di Showroom {{ auth()->user()->name }}</h1>
        @else
          <h1 class="fw-bold">Selamat Datang di Showroom</h1>
        @endauth
        <p>mau jual beli mobil? ya di EAD!!</p>
        <a class="btn btn-primary mycar" href="/showrooms">MyCar</a>
        <div class="d-flex align-items-center logo-nama">
          <img src="/image/logo-ead.png" alt="Logo EAD" width="120">
          <span class="ms-5">Felix_1202204268</span>
        </div>
      </div>
      <div class="col-md-6">
        <img class="rounded-3" src="/image/mustang.png" alt="Mustang" width="100%">
      </div>
    </div>
  </div>

  @if(session()->has('yellow-toast'))
    <div class="home-showroom-toast">
      @include('toast.red-toast')
    </div>
  @endif
@endsection