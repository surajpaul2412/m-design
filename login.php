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

            <!--Main Content-->
            <section class="login-main">
                <div class="container">
                    <!--Main Content-->
                    <div class="mainlogin-sliding my-5 py-0 py-lg-4">
                        <div class="row">
                            <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                <div class="row g-0 form-slider">
                                    <div class="col-lg-6 login-img-bg" style="background-image: url(assets/images/login-bg.jpg);"></div>
                                    <div class="col-lg-6">
                                        <!-- Login Wrapper -->
                                        <div class="login-wrapper">
                                            <!-- Login Inner -->
                                            <div class="login-inner">
                                                <!-- Login Logo -->
                                                <a href="./" class="logo d-inline-block mb-4"><img src="assets/images/logo.png" alt="logo" /></a>
                                                <!-- End Login Logo -->
                                                <!-- User Form -->
                                                <div class="user-loginforms">
                                                    <!-- Login Form -->
                                                    <form id="form-login" class="text-left user-form-login login-active" action="#" method="post">
                                                        <h4>Login to your account</h4>
                                                        <div class="form-row">
                                                            <div class="form-group w-100">
                                                                <input class="form-control" type="text" placeholder="Email Address" name="email" />
                                                            </div>
                                                            <div class="form-group w-100">
                                                                <input class="form-control" type="password" placeholder="Password" name="password" />
                                                            </div>

                                                            <div class="row justify-content-between">
                                                                <div class="col-lg-6"> 
                                                                    <div class="form-group">
                                                                        <div class="customCheckbox cart_tearm">
                                                                            <input type="checkbox" class="form-check-input" id="agree" />
                                                                            <label for="agree">Remember</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 text-end">
                                                                    <a href="forgot-password.php" class="btn-link fw-500 forgotpass-link">Forgot password?</a>
                                                                </div>
                                                            </div>
                                                             
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <button type="submit" class="btn btn-primary rounded w-100 register-link">Sign In</button>
                                                                </div> 
                                                                <div class="col-lg-12 text-center mt-2">
                                                                    Not registered? <a href="register.php" class="fw-500 ms-1 btn-link signup-link">Create an account</a>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </form>
                                                    <!-- End Login Form -->
                                                </div> 
                                            </div> 
                                        </div>
                                        <!-- End Login Wrapper -->
                                    </div>
                                </div>
                            </div>
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