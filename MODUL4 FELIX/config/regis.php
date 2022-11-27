<?php 
require "conector.php";
function registrasi ($data){
    global $koneksi;

    $nama = $data["nama"];
    $email = $data["email"];
    $nohp = strtolower(stripslashes($data["nohp"]));
    $pass = mysqli_real_escape_string($koneksi,$data["pass"]); 
    $pass1 = mysqli_real_escape_string($koneksi,$data["pass1"]); 


    $result = mysqli_query($koneksi, "SELECT email FROM user_felix WHERE email = '$email' ");
    
    if(mysqli_fetch_assoc($result)){
        echo "<script> alert('emailnya sudah ada gan') </script>";
        return false;
    }


    if( $pass !== $pass1){
        echo "<script> alert('konfirmasi password salah') </script>";
        return false;
    }


    $pass = password_hash($pass, PASSWORD_DEFAULT); 


    mysqli_query($koneksi, "INSERT INTO user_felix VALUES (
        '','$nama', '$email', '$pass','$nohp'
    )");

    return mysqli_affected_rows($koneksi);

}


?>