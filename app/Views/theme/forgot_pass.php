<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card shadow border-0 rounded-0 mb-3">
                    <div class="card-body">
                        <form class="p-4">
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control shadow-none rounded-0" id="" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none rounded-0" id="">
                            </div>
                            <div class="d-grid gap-2">
                                <!-- <button type="submit" class="btn btn-primary shadow-none rounded-0 mt-2">Update Password</button> -->
                                <a class="btn btn-primary shadow-none rounded-0 mt-2" href="<?= esc(base_url('/')); ?>">Update Password</a>
                            </div>
                        </form>
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="<?= esc(base_url('/')); ?>">Login now</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc(base_url('create_account')) ?>">Create Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
        </div>
    </div>
</section>