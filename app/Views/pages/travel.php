<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<section class="herosiwikode">
    <div class="container mt-3">
        <section>
                <?php
                    $target = 'a'; 
                    foreach($travels as $travel): ?>
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4 box-shadow bg-white">
                                    <img class="card-img-top" src="<?= base_url('images/'.$travel['foto']); ?>" height="500" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-dark display-5"><?= $travel['nama']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary mr-1 p-3" data-bs-toggle="modal" data-bs-target="<?= '#'.$target;?>">Detail</button>
                                            </div>
                                            <div class="modal fade" id="<?= $target;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content bg-dark text-white">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel"><?= $travel['nama'] ?></h4>
                                                        </div>
                                                        <div class="modal-body bg-white text-primary">
                                                            <img src="<?= base_url('images/'.$travel['foto']); ?>" class="w-100 h-30">
                                                            <div class="mb-4 p-3 bg-dark text-white">
                                                                <h5><i class="fas fa-star">  <?= $travel['bintang'] ?></i></h5>
                                                            </div>
                                                            <h5><i class="fas fa-umbrella-beach"></i> Jenis</h5>
                                                            <p><?= $travel['jenis'] ?></p>
                                                            <h5><i class="fas fa-road"></i> Address</h5>
                                                            <p><?= $travel['alamat'] ?></p>
                                                            <h5><i class="fas fa-phone"></i> Phone</h5>
                                                            <p><?= $travel['telp'] ?></p>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php $target++; endforeach; ?>
                </div>
        </section>
    </div>
</section>


<?= $this->endSection(); ?>