<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellpadding="5" width="100%" cellspacing="0">
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Buku</th>
        <th>Kode Pinjam</th>
        <th>Tanggal peminjaman</th>
        <th>Tanggal pengembalian</th>
        <th>Status peminjaman</th>
    </tr>
    <?php
    include "koneksi.php";
        $i = 1;

        $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user ON user.userID = peminjaman.userID LEFT JOIN buku ON buku.bukuID = peminjaman.bukuIDFA");
        while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['kd_pinjam']; ?></td>
        <td><?php echo $data['tanggal_peminjaman']; ?></td>
        <td><?php echo $data['tanggal_pengembalian']; ?></td>
        <td><?php echo $data['status']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>
<script>
    window.print();
    setTimeout(() => {
        window.close();
    }, 100);
</script>