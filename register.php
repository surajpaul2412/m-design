<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>Login | MbizSpare</title>
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
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Login</span></div>
                </div>
            </div>
            <!--End Breadcrumbs-->

            <!-- [ Register Main Content ] start-->
            <section class="login-main">
                <div class="container">
                    <!--Main Content-->
                    <div class="mainlogin-sliding my-5 py-0 py-lg-4">
                        <div class="row">
                            <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                <div class="row g-0 form-slider">
                                    <div class="col-lg-6 login-img-bg" style="background-image: url(assets/images/login-bg.jpg);"></div>
                                    <div class="col-lg-6">
                                        <!-- Register Wrapper -->
                                        <div class="login-wrapper">
                                            <!-- Register Inner -->
                                            <div class="login-inner">
                                                <!-- Register Logo -->
                                                <a href="index.php" class="logo d-inline-block mb-4"><img src="assets/images/logo.png" alt="logo" /></a>
                                                <!-- End Register Logo -->
                                                <!-- User Form -->
                                                <div class="user-loginforms">
                                                    <form method="post" action="#" accept-charset="UTF-8" class="customer-form">
                                                    <h4 class="text-start mb-3">Register to your account</h4>    
                                                    <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="CustomerFirstName" class="d-none">First Name <span class="required">*</span></label>
                                                                    <input id="CustomerFirstName" type="text" name="customer[first-name]" placeholder="First Name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="CustomerLastName" class="d-none">Last Name <span class="required">*</span></label>
                                                                    <input id="CustomerLastName" type="text" name="customer[Last-name]" placeholder="Last Name" required="">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="CustomerMobile" class="d-none">Mobile Number <span class="required">*</span></label>
                                                                    <input id="CustomerMobile" type="text" name="customer[mobile]" placeholder="Mobile" required="">
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="CustomerEmail" class="d-none">Email Address <span class="required">*</span></label>
                                                                    <input id="CustomerEmail" type="email" name="customer[email]" placeholder="Email" required="">
                                                                </div>
                                                            </div> 

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                                    <input id="CustomerPassword" type="password" name="customer[Password]" placeholder="Password" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="CustomerConfirmPassword" class="d-none">Confirm Password <span class="required">*</span></label>
                                                                    <input id="CustomerConfirmPassword" type="Password" name="customer[ConfirmPassword]" placeholder="Confirm Password" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group w-100">
                                                                <div class="customCheckbox cart_tearm">
                                                                    <input type="checkbox" class="form-check-input" id="agree" value="">
                                                                    <label for="agree">I agree the Terms and Conditions</label>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                             
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <button type="submit" class="btn btn-primary rounded w-100 register-link">Register</button>
                                                            </div> 
                                                            <div class="col-lg-12 text-center mt-2">
                                                                Already have an account?<a href="login.php" class="fw-500 ms-1 btn-link back-to-login">Sign In</a>
                                                            </div>
                                                        </div>  

                                                    </form>
                                                </div>
                                                <!-- End User Form -->
                                            </div>
                                            <!-- End Login Inner -->
                                        </div>
                                        <!-- End Login Wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--[ End Main Content ] -->
                </div>
            </section>
            <!-- [ End Register Container ] -->

        </div>
        <!-- [ Body Container ] start -->

    </div>
    <!--Page Wrapper-->

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>