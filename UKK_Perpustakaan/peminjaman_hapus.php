<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE peminjamanID=$id");
?>
<script>
    alert('HAPUS BUKU BERHASIL.');
    location.href = "laporan.php";
</script>