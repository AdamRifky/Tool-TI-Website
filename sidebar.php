<main class="d-flex flex-nowrap bg-dark">
    <!-- <h1 class="visually-hidden">Sidebars examples</h1> -->
    <div class="flex-shrink-0 p-3" style="width: 220px; height: 100vh;">
        <!--<a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
	  <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
	  <span class="fs-5 fw-semibold">MENU</span>
	</a>-->
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed">
                    <a href="index.php?page=dasboard" class="text-decoration-none text-white">Dashboard</a>
                </button>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-white" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    Master Data
                </button>
                <div class="collapse show" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="index.php?page=Pelanggan" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Pelanggan</a></li>
                        <li><a href="index.php?page=barang" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Barang</a></li>
                        <li><a href="index.php?page=pegawai" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Pegawai</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-white" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Orders
                </button>
                <div class="collapse show" id="orders-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="index.php?page=booking" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Ordered</a></li>
                        <li><a href="index.php?page=pesanan" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">pesanan</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-white" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    <img src="gambar/user2.png" alt="" width="40px"><?php echo $_SESSION['username']; ?>
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Settings</a></li>
                        <li><a href="logout.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-white">Sign out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</main>