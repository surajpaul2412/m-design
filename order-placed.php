<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>Order Placed | MbizSpare</title>
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
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Order Placed</span></div>
                </div>
            </div> 

            <!-- [ Main Content ] start -->
            <section class="order-placed-main">
                <div class="container">
                    <div class="checkout-success-content py-2">
                        <!--Order Card-->
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="checkout-scard card border-0 rounded">
                                    <div class="card-body text-center">
                                    <div class="align-items-center justify-content-center mx-auto mb-4">
                                        <img src="assets/images/check-circle.gif" class="img-fluid" alt="">
                                        <!-- <p class="card-icon"><i class="icon an an-shield-check fs-1"></i></p> -->
                                        <h4 class="card-title">Thank you for your order!</h4>
                                        <p class="card-text mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                                        <p class="card-text mb-2">All necessary information about the delivery, we sent to your email</p>
                                        <p class="card-text mb-0">Order date: 14 Nov 2021</p>
                                        <p class="card-text text-order badge bg-success mb-1">Your order # is: <b>00000123</b></p>
                                        <p class="m-0">
                                            <a href="#">Track Your Order</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Order Card-->
                    </div>
                </div>
            </section> 

        </div> 
    </div> 

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>