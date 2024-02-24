<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM kategoribuku WHERE kategoriID=$id");
?>
<script>
    alert('HAPUS DATA BERHASIL.');
    location.href = "kategori.php";
</script>