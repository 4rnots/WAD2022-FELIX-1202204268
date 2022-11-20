<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" \
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="index.css">

  </head>
  <body>
   <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="Home-Felix.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">MyCar</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a href="Add-Felix.php"><button class="btn btn-light btn-outline-primary" type="button">Add Car</button></a>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="text m-4">
        <h1>My Show Room</h1>
        <p>List Show Room Felix_1202204268</p><br>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="../asset/mustang.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Ford Mustang 2018</h5>
            <p class="card-text">V8 5000cc with supercharger make 500whp </p>
            <a href="#" class="btn btn-primary">Detail</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>