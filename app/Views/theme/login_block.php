<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card shadow border-0 rounded-0 mb-3">
                    <div class="card-body">
                        <form class="p-4">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none rounded-0" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none rounded-0" id="">
                            </div>
                            <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input shadow-none rounded-0" id="">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                            <div class="d-grid gap-2">
                                <!-- <button type="submit" class="btn btn-primary shadow-none rounded-0 mt-2">LOGIN</button> -->
                                <a class="btn btn-primary shadow-none rounded-0 mt-2" href="<?= esc(base_url('/dashboard')); ?>">LOGIN</a>
                            </div>
                        </form>
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="<?= base_url('forgot_password'); ?>">Reset Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('create_account'); ?>">Create Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
        </div>
    </div>
</section>