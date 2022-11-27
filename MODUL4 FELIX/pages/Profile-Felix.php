<?php
if(!isset($_SESSION)){
  session_start();
}

require '../config/conector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM user_felix WHERE id = $id";

$result = mysqli_query($koneksi, $sql);

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
    <nav class="navbar navbar-expand navbar-dark bg-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "primary"; ?>">
      <div class="container py-2">
        <?php if(isset($_SESSION["login"])) : ?>
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="<?php mycar(); ?>">MyCar</a>
          </div>
          <div class="d-flex">
            <a href="../pages/Add-Felix.php" class="btn btn-light text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "primary"; ?>" role="button">Add Car</a>
            <div class="dropdown ms-4">
              <button class="btn btn-light dropdown-toggle text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "primary"; ?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $data_login["nama"]; ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "primary"; ?>" href="">Profile</a></li>
                <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "primary"; ?>" href="../config/logout.php">Log Out</a></li>
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
  <!-- Nav End -->

  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class='tambahh1'>Profile</h1>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama'>Email</label>
                    <input type='text' id='email' name='email' value='" . $getDetail["email"] . "' readonly>
                    <label for='pemilik'>Nama</label>
                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama"] . "' readonly>
                    <label for='merk'>Nomor Handphone</label>
                    <input type='text' id='nohp' name='nohp' value='" . $getDetail["no_hp"] . "' readonly>
                    <hr>
                    <label for='password'>Kata Sandi</label>
                    <input type='password' id='password' name='password' value='" . $getDetail["password"] . "' readonly>
                    <label for='password'> Konfirmasi Kata Sandi</label>
                    <input type='password' id='password' name='password' value='' readonly>
                    <label for='text'> Warna Navbar</label>
                    <input type='text' id='text' name='text' value='' readonly>
                    <a href='update-Felix.php?id=" . $getDetail["id"] . "' class='btn btn-primary' style='margin-top: 40px;'>Update</a>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>