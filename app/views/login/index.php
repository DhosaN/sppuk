<div class="body bg-dark">
<div class="container">
<div class="row justify-content-center mt">
    <div class="col-xl-13 col-lg-12 col-md-9">
    <?php Flasher::flash(); ?>
        <div class="card o-hidden border-0 shadow-lg my-5 bg-gradient-dark">
            <div class="card-body p-0 ">
                <div class="row">
                    <img src="<?=BASE_URL?>/img/undraw_rocket.svg" class="col-lg-6 d-none d-lg-block"></img>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-light mb-4">Selamat Datang! di SPPUK</h1>
                            </div>
                            <form action="<?= BASE_URL ?>/login/sign" method="POST">
                            <div class="form-group">
                            <input type="text" name="username" id="login-username-input" class="my-5 form-control form-control-user" required maxlength="32" placeholder="Username. . ." autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="login-Password-input" class="my-5 form-control form-control-user" required maxlength="32" placeholder="Password. . .">
                            </div>
                            <input type="submit" class="btn btn-warning btn-user btn-block" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
</div>