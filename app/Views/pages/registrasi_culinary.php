<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container mt-3">
    <a href="<?= base_url('pages/create_culinary'); ?>" class="btn-success btn">Tambah Data</a><br><br>
<table class="table"><
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Kuliner</th>
            <th>Jenis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($culinarys as $culinary) : ?>
            <tr>
                <td><?= $culinary['id'] ?></td>
                <td>
                    <strong><?= $culinary['nama'] ?></strong><br>
                </td>
                <td>
                    <?= $culinary['jenis'] ?>
                </td>
                <td>
                    <a href="<?= base_url('pages/' . $culinary['id'] . '/preview') ?>" class="btn btn-sm btn-outline-info" target="_blank">Preview</a>
                    <a href="<?= base_url('pages/' . $culinary['id'] . '/edit') ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                    <a href="#" data-href="<?= base_url('pages/' . $culinary['id'] . '/delete_culinary') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-primary">Delete</a>
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