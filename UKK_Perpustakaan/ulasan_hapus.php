<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE ulasanID=$id");
?>
<script>
    alert('HAPUS BUKU BERHASIL.');
    location.href = "ulasan.php";
</script>