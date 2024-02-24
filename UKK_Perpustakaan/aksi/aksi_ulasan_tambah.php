
<?php
    include "../koneksi.php";
    if(isset($_POST['submit'])){
        $bukuID = $_POST['buku'];
        $userID = $_SESSION['user']['userID'];
        $ulasan = $_POST['ulasan'];
        $rating = $_POST['rating'];
        $query = mysqli_query($koneksi, "INSERT INTO ulasan (bukuID, userID, ulasan, rating) VALUES ('$bukuID','$userID','$ulasan','$rating')");

        if($query){
            echo '<script>alert("ULASAN BERHASIL.");location.href="../ulasan.php";</script>';
        }else{
            echo '<script>alert("ULASAN GAGAL.");</script>';
        }
    }
?>