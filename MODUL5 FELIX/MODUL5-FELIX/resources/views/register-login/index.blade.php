@extends('layout.main')

@section('section')
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6 register-login"></div>
      <div class="col-md-6">
        <div class="m-auto form">
          <h2 class="fw-bold mb-4">Login</h2>
          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="remember" name="remember">
              <label class="form-check-label" for="remember">
                Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary px-4">Login</button>
          </form>
          <p class="mt-3">Anda belum punya akun? <a href="/register">Daftar</a></p>
        </div>
      </div>
    </div>
  </div>

  @if(session()->has('red-toast'))
    <div class="login-toast">
      @include('toast.red-toast')
    </div>
  @elseif(session()->has('blue-toast'))
    <div class="login-toast">
      @include('toast.blue-toast')
    </div>
  @endif
  
@endsection