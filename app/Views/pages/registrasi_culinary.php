<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <a href="<?= base_url('Culinary/add'); ?>" class="btn btn-info">Tambah </a>
            <br><br>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Bintang</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($culinarys as $culinary) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $culinary['nama']; ?></td>
                        <td><?php echo $culinary['jenis']; ?></td>
                        <td><?php echo $culinary['bintang']; ?></td>
                        <td>
                            <a class="btn-warning btn" href="/culinary/edit/<?php echo $culinary['id']; ?>">Edit</a>
                            <a class="btn-danger btn" onclick="confirm('Are you sure to delete ?')" href="/culinary/delete/<?php echo $culinary['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>