<?php
    include "../koneksi.php";
    if(isset($_POST['submit'])){
        $kategoriID = $_POST['kategori'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $foto = $_POST['foto'];
        $query = mysqli_query($koneksi, "INSERT INTO buku(kategoriID,judul,penulis,penerbit,tahun_terbit,deskripsi,stok,foto) VALUES ('$kategoriID','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi','$stok','$foto')");

        if($query){
            echo '<script>alert("TAMBAH BUKU BERHASIL.");location.href="../buku.php";</script>';
        }else{
            echo '<script>alert("TAMBAH BUKU GAGAL.");</script>';
        }
    }
?>