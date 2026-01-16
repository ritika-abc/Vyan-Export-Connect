  <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/people/LMOK-Global-Trade/61579730447932/?mibextid=wwXIfr&rdid=KiOUIuGlR7UZiGUR&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1CZ1xY33j6%2F%3Fmibextid%3DwwXIfr"><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-link text-light" href="https://www.linkedin.com/in/lmok-global-trade-29ba88381/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/lmokglobaltrade/?igsh=c3Qya3lsdDdneThp&utm_source=qr#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i> </span>
                    <span class="fs-5 fw-bold">+91 8885271092</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="/" class="navbar-brand ps-5 me-0">
            <img src="https://lmokglobaltrade.com/image/logo/logo.png" height="80px" width="200px" alt="">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link  ">Home</a>
                <a href="https://lmokglobaltrade.com/about.php" class="nav-item nav-link">About</a>
                <a href="https://lmokglobaltrade.com/innovation.php" class="nav-item nav-link">Innovation </a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Products</a>
                    <div class="dropdown-menu bg-light m-0">
                        <?php
                        include("config.php");
                        $s = "select * from `pro`";
                        $q = mysqli_query($con, $s);
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <a href="https://lmokglobaltrade.com/singal-product.php?slug=<?php echo $row['slug']; ?>" target="_blank" class=" text-capitalize dropdown-item"><?php echo $row['name']; ?></a>
                        <?php } ?>

                    </div>
                </div>
                <a href="https://lmokglobaltrade.com/certificate.php" class="nav-item nav-link">Our Certificates</a>
                <a href="https://lmokglobaltrade.com/blog.php" class="nav-item nav-link">Our Blogs</a>

                <a href="https://lmokglobaltrade.com/contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquire Now</a>
        </div>
    </nav>
    <!-- Navbar End -->
