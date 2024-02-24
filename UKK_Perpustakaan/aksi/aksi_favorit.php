<?php
    include "../koneksi.php";

    if(isset($_GET['bukuID'])){
        $bukuID = $_GET['bukuID'];
        $userID = $_SESSION['user']['userID'];

        $cek = "SELECT COUNT(*) AS total FROM koleksipribadi WHERE userID=$userID AND bukuID = $bukuID";
        $cek_result = mysqli_query($koneksi, $cek);
        $cek_data = mysqli_fetch_assoc($cek_result);
       

        if($cek_data['total'] > 0){
            echo '<script>alert("BUKU SUDAH ADA DI FAVORIT.");location.href="../daftar_buku.php";</script>';
        }else{
            $query = "INSERT INTO koleksipribadi(userID,bukuID) VALUES ('$userID','$bukuID')";
            mysqli_query($koneksi,$query);

            echo '<script>alert("TAMBAH FAVORIT BERHASIL.");location.href="../daftar_buku.php";</script>';
        }
    }
?>