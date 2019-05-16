<h2>Data Produk</h2>
<?php
if (isset($_GET['success'])) : ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Success! Data berhasil ditambahkan</strong>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-bordered table-striped">
            <thead>
                <th  style="text-align: center;">No</th>
                <th  style="text-align: center;">Nama</th>
                <th  style="text-align: center;">Harga</th>
                <th  style="text-align: center;">Foto</th>
                <th  style="text-align: center;">Opsi</th>
            </thead>
            <tbody>
                <?php $query = mysqli_query($dbconnect, "SELECT * FROM produk") ?>
                <?php $nomor = 1 ?>
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td style="text-align: center;"><?= $nomor ?></td>
                    <td><?= $row['nama_produk']; ?></td>
                    <td style="text-align: center;"><?= $row['harga_produk']; ?></td>
                    <td style="text-align: center;">
                        <img src="../foto_produk/<?= $row['gambar_produk'] ?>" width="100">
                    </td>
                    <td  style="text-align: center;">
                        <a href="index.php?page=hapusproduk&id=<?= $row['id_produk'] ?>" class="btn btn-danger" onClick="return confirmation();"><i class="fa fa-trash"></i> Hapus</a>
                        <a href="index.php?page=ubahproduk&id=<?= $row['id_produk'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Ubah</a>
                    </td>
                </tr>
                <?php $nomor++ ?>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a href="index.php?page=tambahproduk" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
</div> 