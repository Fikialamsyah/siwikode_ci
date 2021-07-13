<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title; ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('Travel/update') ?>" method="post">
                <input type="hidden" name="id"  value="<?= $travel['id']; ?>">
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Nama Kuliner</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama" class="form-control"  value="<?= $travel['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="jenis" class="col-sm-2 label" >Jenis</label>
                    <div class="col-sm-5">
                    <input type="text" name="jenis" class="form-control" value="<?= $travel['jenis']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="alamat" class="col-sm-2 label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text-area" name="alamat"  value="<?= $travel['alamat']; ?>" rows="3" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Telp</label>
                    <div class="col-sm-5">
                        <input type="text" name="telp" class="form-control" value="<?= $travel['telp']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Bintang</label>
                    <div class="col-sm-5">
                        <input type="text" name="bintang" class="form-control" value="<?= $travel['bintang']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Foto</label>
                    <div class="col-sm-5">
                        <input type="text" name="foto" class="form-control" value="<?= $travel['foto']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="submit" value="submit" onclick="confirm('Are you sure to update ? ')" class="btn btn-info">
                        <a class="btn btn-danger" href="<?= base_url('Travel/registrasi');?>">Cancel</a>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>