<main class="col-md-12 ms-sm-auto col-lg-10 px-md-4">

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?= $base ?>assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h2>Form Barang</h2>
    </div>

    <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Form Barang</h4>
            <form action="<?php echo $url_post ?>" method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Kode Barang</label>
                        <input readonly type="text" class="form-control" id="kodebarang" name="kodebarang" value="<?= $kode; ?>" placeholder="Kode Barang" required>
                        <div class="invalid-feedback">
                            Valid Kode Barang is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nm_barang" name="nm_barang" placeholder="Nama Barang" required>
                        <div class="invalid-feedback">
                            Valid Nama Barang is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock_mn" name="stock_mn" placeholder="Stock" required>
                        <div class="invalid-feedback">
                            Valid stock is required.
                        </div>
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-20 btn btn-primary btn-lg" name="submit" type="submit">Save</button>
                <a class="w-20 btn btn-primary btn-lg" href="<?= $base ?>databarang">Cancel</a>
            </form>
        </div>
    </div>
</main>
