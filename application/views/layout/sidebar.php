<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php if ($menu == "dash") { ?> active fw-bold<?php } ?>" aria-current="page" href="<?= $base; ?>">
                    <span data-feather="home"></span>
                    Dashboard

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($menu == "info") { ?> active  fw-bold<?php } ?>" href="<?= $base; ?>info">
                    <span data-feather="file"></span>
                    Info
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($menu == "barang") { ?> active  fw-bold<?php } ?>" href="<?= $base; ?>databarang">
                    <span data-feather="file"></span>
                    Data Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($menu == "customer") { ?> active  fw-bold<?php } ?>" href="<?= $base; ?>datacustomer">
                    <span data-feather="file"></span>
                    Data Customer
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($menu == "supplier") { ?> active  fw-bold<?php } ?>" href="<?= $base; ?>datasupplier">
                    <span data-feather="file"></span>
                    Data Supplier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_barang">
                    <span data-feather="file"></span>
                    Duplicat
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link<?php if ($menu == "transaksi") { ?> active  fw-bold<?php } ?>" href="<?= $base; ?>transaksi">
                    <span data-feather="file"></span>
                    Transaksi
                </a>
            </li>
        </ul>
       
        </ul>
    </div>
</nav>