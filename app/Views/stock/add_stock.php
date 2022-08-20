<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <form class="p-4">
                    <div class="mb-3">
                        <label class="form-label">Product name</label>
                        <input type="text" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Discount</label>
                        <input type="number" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tax rate</label>
                        <select class="form-select shadow-none rounded-0">
                            <option>0%</option>
                            <option>5%</option>
                            <option>12%</option>
                            <option>18%</option>
                            <option>28%</option>
                        </select>
                    </div>
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item me-3">
                            <a class="nav-link active rounded-0" href="<?= esc(base_url('pos_page')) ?>">Add more</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link active bg-danger rounded-0" href="<?= esc(base_url()) ?>">Next</a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-lg-4 col-md-3 col-12">
                <form class="p-4">
                    <div class="mb-3">
                        <label class="form-label">Customer name</label>
                        <input type="text" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Customer Contact</label>
                        <input type="tel" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Customer Email</label>
                        <input type="email" class="form-control shadow-none rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">GSTIN</label>
                        <input type="text" class="form-control shadow-none rounded-0">
                    </div>
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item me-3">
                            <a class="nav-link active rounded-0" href="<?= esc(base_url()) ?>">Edit</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link active bg-danger rounded-0" href="<?= esc(base_url('pos_page')) ?>">Done</a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-lg-4 col-md-3 col-12">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                        </p>
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>