<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>Checkout | MbizSpare</title>
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
            
            <!-- [ Breadcrumbs ] start -->
            <div class="breadcrumbs-wrapper text-uppercase">
                <div class="container">
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Checkout</span></div>
                </div>
            </div> 
            
            <!-- [ Main Content ] start -->
            <section class="checkout-main">
                <div class="container">

                    <div class="row ">

                        <div class="col-lg-8 col-md-12 col-sm-12 mb-3 mb-lg-0">

                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="customer-box returning-customer mb-3">
                                        <h3 class="rounded-1 bg-success"><i class="me-2 icon an an-user"></i>Returning customer? <a href="#customer-login" id="customer" class="text-white fw-bolder link-color-white" data-bs-toggle="collapse">Click here to login</a></h3>
                                    </div>

                                </div>
                            </div>

                            <div class="guest-checkout-area"></div>

                            <div class="address-area">
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
                                <button class="btn btn-primary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#addAddress" aria-controls="addAddress"><i class="bi bi-plus me-2"></i>Add New Address</button>
                                <!-- [ Add New Address offcanvas ] Start -->
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="checkout_info border">

                                <div class="card mb-4 p-0">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-sm list-group-flush-y list-group-flush border-0">
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ">
                                                <span>Bag Total</span> <span class="ml-auto text-dark text-detail">Rs.98.12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ">
                                                <span>Sub Total</span> <span class="ml-auto text-dark text-detail">Rs.98.12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Offer Discount</span> <span class="text-success ml-auto text-detail">- Rs.10.00</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Delievery Charge</span> <span class="text-danger ml-auto text-detail">+ Rs.10.00</span>
                                            </li>
                                            <!-- <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Delivery Charges</span> <span class="ml-auto text-danger text-detail">Rs.10.00</span>
                                            </li> -->
                                            <!-- <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                    <span>Tax</span> <span class="ml-auto text-dark ft-medium">Rs.10.00</span>
                                                </li> -->
                                            <li class="list-group-item d-flex justify-content-between text-dark fs-sm ft-regular">
                                                <span>Total Amount</span> <span class="ml-auto text-dark text-detail"><strong>Rs.108.22</strong></span>
                                            </li>
                                            <li class="list-group-item fs-sm text-center"> Inclusive of all taxes and Charges. * </li>
                                        </ul>
                                    </div>
                                </div>

                                <hr>
                                <div class="payment-method p-2">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border">
                                            <div class="card-header p-0" id="h_cod">
                                                <div class="payment-link w-100" data-bs-toggle="collapse" data-bs-target="#cod" aria-expanded="true">
                                                    <label class="r_cod" for="r_cod">
                                                    <img src="assets/images/1.png" class="img-fluid" alt="">
                                                        Cash On Delivery
                                                        <input type="radio" class="radio_animated payment_method" checked="" id="r_cod" name="payment" value="Cash On Delivery" required="">
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="cod" class="collapse show" aria-labelledby="h_cod" data-bs-parent="#accordionExample">
                                                <div class="card-body p-2">You Can Pay During Order Delivery.</div>
                                            </div>
                                        </div>
                                        <div class="card border">
                                            <div class="card-header p-0" id="h_cod">
                                                <div class="payment-link w-100" data-bs-toggle="collapse" data-bs-target="#onlinepay" aria-expanded="false">
                                                    <label class="r_cod" for="r_online">
                                                    <img src="assets/images/2.png" class="img-fluid" alt="">
                                                        Online Pay
                                                        <input type="radio" class="radio_animated payment_method" checked="" id="r_online" name="payment" value="Cash On Delivery" required="">
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="onlinepay" class="collapse" aria-labelledby="h_cod" data-bs-parent="#accordionExample">
                                                <div class="card-body p-2">You Can Online Pay.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>

                                <div class="checkout-action-btn p-2">
                                    <a href="order-placed.php" class="cartCheckout fs-6 btn btn-lg rounded w-100 fw-500 text-white checkout">Place order</a>
                                    <a href="product.php" class="d-flex justify-content-center align-items-center">
                                        <i class="me-1 icon an an-angle-left-l"></i> Continue shopping
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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