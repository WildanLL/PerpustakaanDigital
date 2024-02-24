<?php
    include "../koneksi.php";
    $query = mysqli_query($koneksi, "SELECT max(kd_pinjam) as kodeterbesar FROM peminjaman");
    $data = mysqli_fetch_array($query);
    $kd_pinjam = $data ['kodeterbesar'];

    $urutan = (int) substr($kd_pinjam, 3, 3);
    $urutan++;

    $huruf = "KD";
    $kd_pinjam = $huruf. sprintf("%03s", $urutan);

    if(isset($_POST['submit'])){
        $userID = $_SESSION['user']['userID'];
        $buku = $_POST['buku'];
        $tanggal_peminjaman = date('y-m-d');
        $tanggal_pengembalian = date('y-m-d', strtotime($tanggal_peminjaman.'+ 7 days'));
        $status = $_POST['status'];
        $jumlah = $_POST['jumlah'];
        $query = mysqli_query($koneksi, "INSERT INTO peminjaman (userID,bukuIDFA,tanggal_peminjaman,tanggal_pengembalian,status,jumlah,kd_pinjam) VALUES ('$userID','$buku','$tanggal_peminjaman','$tanggal_pengembalian','$status','$jumlah','$kd_pinjam')");

        if($query){
            echo '<script>alert("ANDA BERHASIL MEMINJAM.");location.href="../daftar_buku.php";</script>';
        }else{
            echo '<script>alert("GAGAL MEMINJAM.");</script>';
        }
    }
?>
