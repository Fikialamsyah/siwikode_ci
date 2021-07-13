<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<section class="herosiwikode">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div>
                    <h1 class="tipografi mb-3">Discover <span class="text-danger">Recreation</span> and <span class="text-danger">Culinary</span> Experiences</h1>
                </div>
                <p class="explanotory mb-4">Welcome to the Depok city travel and culinary information system, find culinary and travel experiences in the city of Depok and share your experiences in here.</p>
                <a class="btn btn-primary btn-lg gets" href="<?= base_url('Home/login'); ?>" role="button">Get's Started</a>
            </div>
            <div class="col  d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block ">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_Tdoufu.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop mode="normal" autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>