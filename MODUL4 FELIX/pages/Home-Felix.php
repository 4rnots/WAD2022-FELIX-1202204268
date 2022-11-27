<?php
if(!isset($_SESSION)){
  session_start();
}

require '../config/conector.php';

$query = "SELECT * FROM showroom_felix_table";
$result = mysqli_query($koneksi, $query);

function mycar() {
  global $result;
  if(mysqli_num_rows($result) > 0) {
    echo "ListCar-Felix.php";
  } else {
    echo "Add-Felix.php";
  }
}

if(isset($_SESSION["login"])) {
  $login_as = $_SESSION["email"];
  $result_login = mysqli_query($koneksi, "SELECT * FROM user_felix WHERE email = '$login_as'");
  $data_login = mysqli_fetch_assoc($result_login);
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Felix_1202204268</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
    <nav class="navbar navbar-expand navbar-dark bg-primary">
      <div class="container py-2">
        <?php if(isset($_SESSION["login"])) : ?>
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="<?php mycar(); ?>">MyCar</a>
          </div>
          <div class="d-flex">
            <a href="../pages/Add-Felix.php" class="btn btn-light" role="button">Add Car</a>
            <div class="dropdown ms-4">
              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $data_login["nama"]; ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/Profile-Felix.php">Profile</a></li>
                <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        <?php else: ?>
          <div class="navbar-nav w-100 d-flex justify-content-between">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="../pages/Login-Felix.php">Login</a>
          </div>
        <?php endif; ?>
      </div>
    </nav>
    

  <!-- Jumbotron -->
  <?php if(isset($_SESSION["message"])) : ?>
    <div class="alert alert-success alert-dismissible fade show fade in" role="alert">
      <?= $_SESSION["message"]; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
  <?php unset($_SESSION["message"]); endif; ?>
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Felix</h1>
          <p class="mt-3">jual beli kendaraan terpercaya<br /> ya cuma di EAD.</p>
          <a href=<?php mycar(); ?>><button type="button"class="button btn-primary">My Car</button></a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "../asset/image/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Felix_1202204268</p>
          </div>
        </div>
        <img src="<?php echo "../asset/image/mustang.png" ?>" alt="mustang">
      </div>
    </div>
  <!-- Jumbotron End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>