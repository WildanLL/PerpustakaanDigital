<?php
    include "../koneksi.php";

    if(isset($_GET['koleksiID'])){
        $koleksiID = $_GET['koleksiID'];
       

        
        $query = mysqli_query($koneksi, "DELETE FROM  koleksipribadi WHERE koleksiID=$koleksiID");

        if($query){
            echo '<script>alert("HAPUS FAVORIT BERHASIL.");location.href="../favorit.php";</script>';
        }else{
            echo '<script>alert("TAMBAH BUKU GAGAL.");</script>';
        }
    }
?>