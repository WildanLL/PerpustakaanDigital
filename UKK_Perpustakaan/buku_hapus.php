<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM buku WHERE bukuID=$id");
?>
<script>
    alert('HAPUS BUKU BERHASIL.');
    location.href = "buku.php";
</script>
