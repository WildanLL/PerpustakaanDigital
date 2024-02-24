<?php
include "../koneksi.php";

    if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $alamat = $_POST['alamat'];
    $level = $_POST['level'];


    $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,email,password,alamat,level) VALUES ('$nama','$username','$email','$password','$alamat','$level')");

    if($insert){
        echo '<script>alert("SELAMAT, REGISTER BERHASIL. SILAHKAN LOGIN"); location.href="../login.php";</script>';
     }else{

        echo'<script>alert("REGISTER GAGAL, SILAHKAN ULANGI KEMBALI. ");</script>';
    }
}
   ?>