@extends('layout.main')

@section('section')
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6 register-login"></div>
      <div class="col-md-6">
        <div class="m-auto form">
          <h2 class="fw-bold mb-4">Register</h2>
          <form action="/register" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label required">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
            </div>
            <div class="mb-3">
              <label for="name" class="form-label required">Nama</label>
              <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
            </div>
            <div class="mb-3">
              <label for="no_hp" class="form-label required">Nomor Handphone</label>
              <input type="tel" class="form-control" id="no_hp" name="no_hp" required value="{{ old('no_hp') }}">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label required">Kata Sandi</label>
              <input type="password" class="form-control" id="password" name="password" required> 
            </div>
            <div class="mb-4">
              <label for="konfirmasi_password" class="form-label required">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password" name="konfirmasi_password" required>
              @error('konfirmasi_password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
            </div>
            <button type="submit" class="btn btn-primary px-4">Daftar</button>
          </form>
          <p class="mt-3">Anda sudah punya akun? <a href="/login">Login</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection