<?= $this->extend('layout/login_template'); ?>


<?= $this->section('content'); ?>
<section class="herosiwikode">
    <div class="container mt-5">
        <div class="row">
            <div class="col  d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block ">
                <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_Tdoufu.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop mode="normal" autoplay></lottie-player>

            </div>
            <div class="col-md-5">
                <div class="card p-3">
                    <form method="POST" id="login" class="w-100">
                        <div class="img-container w-100 mb-5 mt-5 text-center">
                            <p class="h2">Sign In</p>
                            <a href="<?= base_url('Home/index'); ?>" class="text-decoration-none siwikode display-5">SIWIKODE</a>
                        </div>
                        <div id="frame">
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input id="username" placeholder="username" type="text" name="text" class="form-control" required autocomplete="off" autofocus>

                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input id="password" placeholder="password" type="password" name="password" class="form-control" required autocomplete="off" autofocus>

                            </div>
                            <a href="<?= base_url('Home/')?>" class="btn btn-danger" onclick="alert('Berhasil Login')">Sign in</a>
                            <p class="text-center">Not a member? <a href="sign_up.html">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
function validasi(){
    var username = document.forms['login']['username'].value;
    var password = document.forms['login']['username'].value;

    if(username == "admin" && password == "123"){
        alert('Login berhasil...');
        return true;
    }
}

</script>
<?= $this->endSection(); ?>