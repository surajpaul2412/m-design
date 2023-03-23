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

    <!-- [ Page Wrapper ] start -->
    <div class="page-wrapper">

        <?php include("include/header.php"); ?>

        <!-- [ Body Container ] start -->
        <div id="page-content">

            <!-- [ Breadcrumbs ] start -->
            <div class="breadcrumbs-wrapper text-uppercase">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.php" title="Back to the home page">Home</a><span>|</span>
                        <a href="#">Dashboard</a><span>|</span>
                        <span class="fw-bold">Wishlist</span>
                    </div>
                </div>
            </div> 

            <!-- [ Main Content ] start -->
            <section class="my-account-main">
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
                            <div class="dashboard-content">

                                <!-- Wishlist -->
                                <div class="product-wishlist active">
                                    <h3>My Wishlist</h3>
                                    <!-- Grid Product -->
                                    <div class="wishlist-grid mt-4">
                                        <div class="row row-cols-1 row-cols-lg-2"> 
                                            <div class="col">
                                                <div class="card my-account-card border rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="image me-2">
                                                                <a href="product-details.php">
                                                                    <img src="assets/images/products/1.jpg" class="img-fluid" width="90px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="details">
                                                                <div class="cart_single_caption pl-2">
                                                                    <h4 class="product_title fs-md ft-medium mb-1">Air Conditioning</h4>
                                                                    <div class="cart_attributes mb-2">
                                                                        <span class="text-success bg-success bg-opacity-25 px-2 me-1">Size: 40</span><span class="text-success bg-success bg-opacity-25 px-2 me-1">Color: Blue</span>
                                                                    </div> 
                                                                    
                                                                    <div class="product-price">
                                                                        <span class="old-price">Rs.169.00</span>
                                                                        <span class="price">Rs.155.00</span>
                                                                        <span class="product-discountPercentage ms-2 text-danger">(24% OFF)</span>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-white br-top p-2 d-flex align-items-center justify-content-end">
                                                        <a href="#" class="text-success me-3"><i class="bi bi-heart"></i> Move to Cart</a>
                                                        <a href="#" class="text-danger"><i class="bi bi-trash3"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col">
                                                <div class="card my-account-card border rounded mb-4">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="image me-2">
                                                                <a href="product-details.php">
                                                                    <img src="assets/images/products/1.jpg" class="img-fluid" width="90px" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="details">
                                                                <div class="cart_single_caption pl-2">
                                                                    <h4 class="product_title fs-md ft-medium mb-1">Air Conditioning</h4>
                                                                    <div class="cart_attributes mb-2">
                                                                        <span class="text-success bg-success bg-opacity-25 px-2 me-1">Size: 40</span><span class="text-success bg-success bg-opacity-25 px-2 me-1">Color: Blue</span>
                                                                    </div> 
                                                                    
                                                                    <div class="product-price">
                                                                        <span class="old-price">Rs.169.00</span>
                                                                        <span class="price">Rs.155.00</span>
                                                                        <span class="product-discountPercentage ms-2 text-danger">(24% OFF)</span>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-white br-top p-2 d-flex align-items-center justify-content-end">
                                                        <a href="#" class="text-success me-3"><i class="bi bi-heart"></i> Move to Cart</a>
                                                        <a href="#" class="text-danger"><i class="bi bi-trash3"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <!-- End Grid Product-->
                                </div>
                                <!-- End Wishlist -->

                            </div>
                            <!-- End Tab panes -->
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </section> 

        </div> 
    </div> 

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>