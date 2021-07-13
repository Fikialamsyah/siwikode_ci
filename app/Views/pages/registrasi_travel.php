<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container mt-3">
    <a href="<?= base_url('pages/create_travel'); ?>" class="btn-success btn">Tambah Data</a><br><br>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Travel</th>
            <th>Jenis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($travels as $travel) : ?>
            <tr>
                <td><?= $travel['id'] ?></td>
                <td>
                    <strong><?= $travel['nama'] ?></strong><br>
                </td>
                <td>
                    <?= $travel['jenis'] ?>
                </td>
                <td>
                    <a href="<?= base_url('pages/news/' . $travel['id'] . '/preview') ?>" class="btn btn-sm btn-outline-info" target="_blank">Preview</a>
                    <a href="<?= base_url('admin/news/' . $travel['id'] . '/edit') ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/news/' . $travel['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-primary">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Are you sure?</h2>
                <p>The data will be deleted and lost forever</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>
<?= $this->endSection(); ?>