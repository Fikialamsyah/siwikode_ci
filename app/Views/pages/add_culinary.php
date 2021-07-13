<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title; ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('Culinary/save') ?>" method="post">
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Culinary Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="jenis" class="col-sm-2 label" >Type</label>
                    <div class="col-sm-4">
                        <select class="form-select" id="jenis" name="jenis">
                            <option>--Pilih--</option>
                            <?php foreach($culinarys as $culinary) :?>
                            <option value="<?= $culinary; ?>"><?= $culinary; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Address</label>
                    <div class="col-sm-4">
                        <textarea type="text-area" name="alamat" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Telp</label>
                    <div class="col-sm-4">
                        <input type="text" name="telp" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Star</label>
                    <div class="col-sm-4">
                        <input type="text" name="bintang" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Photo</label>
                    <div class="col-sm-4">
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="submit" value="submit" class="btn btn-info">
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>