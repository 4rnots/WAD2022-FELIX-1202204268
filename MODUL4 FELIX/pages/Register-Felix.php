<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car | Felix_1202204268</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <!-- Form -->
  <section id='register'>
  <div class="container-fluid">
    <div class="row">
        <div class="col">
            <img src="../asset/image/mustang.png" alt="login image" width="900" height="1050"/>
        </div>
        <div class="col">
            <div class="container-fluid">
                <h1 class="tambahh1">Register</h1>
                <form action="Login-Felix.php" method="POST" enctype="multipart/form-data">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control w-75">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control w-75">
                    <label for="nohp">Nomor Handphone</label>
                    <input type="text" id="nohp" name="nohp" class="form-control w-75">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" id="pass" name="pass" class="form-control w-75">
                    <label for="pass1">Konfirmasi Kata Sandi</label>
                    <input type="password" id="pass1" name="pass1" class="form-control w-75">
                    <button type="submit" name="register"class="btn btn-primary" style="margin-top: 40px;">Daftar</button>
                    <p>Anda sudah punya akun? <a href="Login-Felix.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
  </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>