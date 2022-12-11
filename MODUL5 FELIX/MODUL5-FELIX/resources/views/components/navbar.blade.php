<nav class="navbar navbar-expand navbar-dark" style="background-color: {{ $set_nav_color }}">
  <div class="container py-2">
    @auth
      <div class="navbar-nav">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link {{ Request::is('showrooms/*') || Request::is('showrooms') ? 'active' : '' }}" href="/showrooms">MyCar</a>
      </div>
      <div class="d-flex">
        <a href="/showrooms/create" class="btn btn-light" style="color: {{ $set_nav_color }}">Add Car</a>
        <div class="dropdown ms-4">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: {{ $set_nav_color }}">
          {{ auth()->user()->name }}</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profile" style="color: {{ $set_nav_color }}">Profile</a></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item" style="color: {{ $set_nav_color }}">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    @else
      <div class="navbar-nav w-100 d-flex justify-content-between">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/login">Login</a>
      </div>
    @endauth
  </div>
</nav>