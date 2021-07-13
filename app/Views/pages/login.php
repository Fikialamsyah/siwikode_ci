<?= $this->extend('layout/login_template'); ?>


<?= $this->section('content'); ?>
<section class="herosiwikode">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block ">
                <img src="<?= base_url('images/hero.png');?>" alt="" class="w-70">
            </div>
            <div class="col-md-5">
                <div class="card p-3">
                    <form method="POST" class="w-100">
                        <div class="img-container w-100 mb-5 text-center">
                            <a href="<?= base_url('pages/');?>"><img src="<?= base_url('images/siwikodelogo.png');?>"></a>
                            <p class="h2">Sign In</p>
                        </div>
                        <div id="frame">
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input id="username" placeholder="username" type="text" name="text" class="form-control" required autocomplete="off" autofocus>

                            </div>
                            <div class="form-group  mb-3">
                                <label for="">Password</label>
                                <input id="password" placeholder="password" type="password" name="password" class="form-control" required autocomplete="off" autofocus>

                            </div>
                            <button type="submit" value="login" id="login" class="btn btn-primary justify-content-center">Sign in</button>
                            <p class="text-center">Not a member? <a href="sign_up.html">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection(); ?>