@extends('layout.main')

@section('section')
  @include('components.navbar')
  <div class="container mt-4">
    <h2 class="fw-bold text-center">Profile</h2>
    <form action="/profile/{{ auth()->user()->id }}" method="post">
      @csrf
      @method('put')
      <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="email" name="email" value="{{ auth()->user()->email }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="no_hp" name="no_hp" value="{{ auth()->user()->no_hp }}">
        </div>
      </div>
      <hr>
      <div class="mb-3 row position-relative">
        <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="konfimasi_password" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="konfimasi_password" name="konfirmasi_password" placeholder="Konfirmasi Kata Sandi">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nav_color" class="col-sm-2 col-form-label">Warna Navbar</label>
        <div class="col-sm-10">
          <select class="form-select" id="nav_color" name="nav_color">
            @foreach ($colors as $color => $value)
              <option value="{{ $color }}" {{ $color === $get_nav_color ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="text-center mt-5">
        <button type="submit" class="btn btn-primary px-4">Update</button>
      </div>
    </form>
    <div class="d-flex align-items-center logo-nama" style="top: 80px">
      <img src="/image/logo-ead.png" alt="Logo EAD" width="100">
      <span class="ms-5">Felix_1202204268</span>
    </div>
  </div>

  @if(session()->has('yellow-toast'))
    <div class="home-showroom-toast">
      @include('toast.yellow-toast')
    </div>
  @endif
@endsection