<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
    <div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title ?></b>
        </div>
        <div class="card-body">
            <a href="<?= base_url('Travel/add'); ?>" class="btn btn-info">Add Data </a>
            <br><br>
            <table class="table  table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Star</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($travels as $travel) : ?>
                    <tr class="table-hover">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $travel['nama']; ?></td>
                        <td><?php echo $travel['jenis']; ?></td>
                        <td><?php echo $travel['bintang']; ?></td>
                        <td>
                            <a class="btn-warning btn" href="/Travel/edit/<?php echo $travel['id']; ?>">Edit</a>
                            <a class="btn-danger btn" onclick="confirm('Are you sure to delete ?')" href="/Travel/delete/<?php echo $travel['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
        </div>
        <div class="modal-footer">
        <a href="/Travel/delete/<?php echo $travel['id']; ?>" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </div>
    </div>
</div>


<?= $this->endSection(); ?>