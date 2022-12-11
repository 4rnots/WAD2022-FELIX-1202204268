@extends('layout.main')

@section('section')
  @include('components.navbar')
  <div class="container mt-4">
    <h2 class="fw-bold">My Show Room</h2>
    <p>List Show Room Felix - 1202204268</p>
    <div class="row mt-5">
      @foreach ($showroom as $car)  
        <div class="col-lg-5 mb-5">
          <div class="card rounded-3 shadow h-100">
            <img src="{{ asset('storage/image/')}}/{{ $car->image }}" class="card-img-top p-2 rounded-4 h-100" alt="{{ $car->image }}">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $car->name }}</h5>
              <p class="card-text" style="text-align: justify;">{{ Str::limit($car->description, 108) }}</p>
              <div class="d-flex">
                <a href="/showrooms/{{ $car->id }}" class="btn btn-primary rounded-5 px-5 me-3 button">Detail</a>
                <form action="/showrooms/{{ $car->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger rounded-5 px-5 me-3">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="pb-4">
      <p class="fw-bold">Jumlah Mobil: {{ $jml }}</p>
    </div>
  </div>

  @if(session()->has('blue-toast'))
    <div class="home-showroom-toast">
      @include('toast.blue-toast')
    </div>
  @elseif(session()->has('yellow-toast'))
    <div class="home-showroom-toast">
      @include('toast.yellow-toast')
    </div>
  @elseif(session()->has('red-toast'))
    <div class="home-showroom-toast">
      @include('toast.red-toast')
    </div>
  @endif
@endsection