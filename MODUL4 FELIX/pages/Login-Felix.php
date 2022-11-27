<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require "../config/regis.php";
    require "../config/conector.php";
    if(isset($_POST["register"])){
        if(registrasi($_POST)){
            echo "<script> 
            alert('user baru berhasil ditambahkan');  
        </script>";
        }else{
            echo mysqli_error($koneksi);
        }
    }

    if (isset($_SESSION["login"])){
        header("Location: Home-Felix.php");
        exit;
    }

    if(isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];

        $result = mysqli_query($koneksi, "SELECT * FROM user_felix WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $_SESSION["email"] = $row["email"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["nohp"] = $row["no_hp"];
                $_SESSION["login"] = true; 
                             
                if(isset($_POST["remember"])){
                    
                    setcookie("id", $row["id"], time()+60);
                    setcookie("key", hash("sha256", $row["email"]));
                }
                $_SESSION["message"] = "berhasil Login";
                header("Location: Home-Felix.php ");
                exit;
            };
        }
        $error = true ;

    }

?>
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
  <section id='login'>
  <div class="container-fluid">
    <div class="row">
        <div class="col">
            <img src="../asset/image/1988.jpg" alt="regis image" width="900" height="1050"/>
        </div>
        <div class="col">
            <div class="container-fluid">
                <h1 class="tambahh1">Login</h1>
                <?php if (isset($error)): ?>
                <p>username/password salah</p>
                <?php endif; ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" id="pass" name="pass">
                    <button type="submit" name="login"class="btn btn-primary" style="margin-top: 40px;">Login</button>
                    <span class="d-flex">
                        <input type="checkbox" name="remember" id="remember" value="remember" style="width: 15px; height: 15px; margin-right:10px;">
                        <label for="remember" style="margin-top: 15px; margin-right:10px;">Remember me</label>
                    </span>
                    <p>Anda belum punya akun? <a href="Register-Felix.php">Daftar</a></p>
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