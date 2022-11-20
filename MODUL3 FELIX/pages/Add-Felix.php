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
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Home-Felix.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">MyCar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!--add item-->
<div class="container">
    <div class="row">
        <div class="">
            <h1>Tambah Mobil</h1>
            <p>Tambah Mobil Baru Anda Ke List Show Room</p><br>
        </div>
    </div>
    <div class="row" id="daftar">
        <div class="col-md-10">
            <form>
                <div class="mb-3">
                    <label for="namob" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="namob" aria-describedby="namob">                
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemilik</label>
                    <input type="name" class="form-control" id="nama" aria-describedby="nama">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="name" class="form-control" id="merk" aria-describedby="merk">
                </div>
                <div class="mb-3">
                    <label for="Date">Tanggal Beli</label>
                    <input type="date" class="form-control" id="Date" name="Date" required>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="mb-3 radio">
                    <label for="supir" class="form-label">Status Pembayaran</label><br>
                    <input type="radio" id="stat" name="jk"><label for="stat">Lunas</label>
                    <input type="radio" id="stat" name="jk"><label for="satt">Belum Lunas</label>
                </div>
                <button type="submit" class="btn btn-primary" href="ListCar.php">Selesai</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>