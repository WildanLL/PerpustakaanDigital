<?php
    include "../koneksi.php";
    if(isset($_POST['submit'])){
        $kategori = $_POST['kategoribuku'];
        $query = mysqli_query($koneksi, "INSERT INTO kategoribuku(nama_kategori) VALUES ('$kategori')");

        if($query){
            echo '<script>alert("TAMBAH DATA BERHASIL.");location.href="../kategori.php";</script>';
        }else{
            echo '<script>alert("TAMBAH DATA GAGAL.");</script>';
        }
    }
?>