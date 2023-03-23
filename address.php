<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>My Account | MbizSpare</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php include("include/style.php"); ?>
</head>

<body> 

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <?php include("include/header.php"); ?>

        <!-- [ Body Container ] start -->
        <div id="page-content">
            <!--Breadcrumbs-->
            <div class="breadcrumbs-wrapper text-uppercase">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.php" title="Back to the home page">Home</a><span>|</span>
                        <a href="#">Dashboard</a><span>|</span>
                        <span class="fw-bold">Address</span>
                    </div>
                </div>
            </div>
            <!--End Breadcrumbs-->

            <!--Main Content-->
            <section class="my-address-main">
                <div class="container pt-2">
                    <!--Dashboard Content-->
                    <div class="dashboard-upper-info">
                        <div class="row align-items-center g-0">
                            <div class="col-xl-3 col-lg-3 col-sm-6">
                                <div class="d-single-info">
                                    <p class="user-name">Hello <span class="fw-600">Ajay Kumar</span></p>
                                    <p>(not Ajay Kumar? <a class="link-underline fw-600" href="#">Log Out</a>)</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="d-single-info">
                                    <p>Need Assistance? Customer service at.</p>
                                    <p><a href="mailto:admin@example.com">admin@example.com</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-6">
                                <div class="d-single-info">
                                    <p>E-mail them at </p>
                                    <p><a href="mailto:support@example.com">support@example.com</a></p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-sm-6">
                                <div class="d-single-info text-lg-center">
                                    <a class="link-underline fw-600 view-cart" href="cart-style1.html"><i class="icon an an-sq-bag me-2"></i>View Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 mb-lg-5 pb-lg-5">
                        <div class="col-xl-3 col-lg-2 col-md-12 mb-4 mb-lg-0">
                            <!-- Nav tabs -->
                            <?php include("include/user-nav.php"); ?>
                            <!-- End Nav tabs -->
                        </div>

                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <!-- Address Main -->
                            <div class="dashboard-content">
                               <!-- Address -->
                               <div class="user-address">
                                    <div class="mb-3">
                                        <h3 class="mb-0">Address</h3>
                                        <p class="xs-fon-13">The following addresses will be used on the checkout page by default.</p>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="card-wrap border rounded mb-4">
                                                <div class="card-header px-3 py-2 br-bottom d-flex align-items-center justify-content-between">
                                                    <div class="card-header-flex d-flex align-items-center">
                                                        <h4 class="fs-md ft-bold mb-0">
                                                            <label for="pa1" class="radio-custom-label mb-0">Home</label>
                                                        </h4>
                                                        <p class="m-0 p-1"><span class="text-success bg-success bg-opacity-25 px-2 py-1">Primary Account</span></p>
                                                    </div>
                                                    <div class="card-head-last-flex">
                                                        <a class="text-primary bg-primary bg-opacity-25 p-3 d-inline-flex align-items-center justify-content-center" href="#"><i class="bi bi-pencil-square position-absolute"></i></a>
                                                        <a class="text-danger bg-danger bg-opacity-25 p-3 d-inline-flex align-items-center justify-content-center" href="#"><i class="bi bi-x-lg position-absolute"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card-wrap-body px-3 py-3">
                                                    <h5 class="ft-medium mb-1">Henry V. Derr</h5>
                                                    <p class="text-muted">1354 Green Street Nashville<br>Drive Dodge City, KS 67801<br>United States</p>
                                                    <p class="lh-1 mt-2 text-muted"><span class="text-dark ft-medium">Email:</span> dhananjaypreet@gmail.com</p>
                                                    <p class="text-muted mt-2"><span class="text-dark ft-medium">Call:</span> +91 458 753 6924</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-wrap border rounded mb-4">
                                                <div class="card-header px-3 py-2 br-bottom d-flex align-items-center justify-content-between">
                                                    <div class="card-header-flex d-flex align-items-center">
                                                        <h4 class="fs-md ft-bold mb-1">
                                                            <label for="pa1" class="custom-label">Office</label>
                                                        </h4>
                                                    </div>
                                                    <div class="card-head-last-flex">
                                                        <a class="text-primary bg-primary bg-opacity-25 p-3 d-inline-flex align-items-center justify-content-center" href="#"><i class="bi bi-pencil-square position-absolute"></i></a>
                                                        <a class="text-danger bg-danger bg-opacity-25 p-3 d-inline-flex align-items-center justify-content-center" href="#"><i class="bi bi-x-lg position-absolute"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card-wrap-body px-3 py-3">
                                                    <h5 class="ft-medium mb-1">Henry V. Derr</h5>
                                                    <p class="text-muted">1354 Green Street Nashville<br>Drive Dodge City, KS 67801<br>United States</p>
                                                    <p class="lh-1 mt-2 text-muted"><span class="text-dark ft-medium">Email:</span> dhananjaypreet@gmail.com</p>
                                                    <p class="text-muted mt-2"><span class="text-dark ft-medium">Call:</span> +91 458 753 6924</p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <!-- [ Add New Address offcanvas ] Start -->
                                    <button class="btn btn-primary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#addAddress" aria-controls="addAddress"><i class="bi bi-plus me-2"></i>Add New Address</button>
                                
                                </div>
                                <!-- End Address -->

                            </div>
                            <!-- End Tab panes -->
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </section>
            <!--End Container-->

        </div>
        <!-- [ Body Container ] start -->

    </div>
    <!--Page Wrapper-->

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>