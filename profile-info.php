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
                        <span class="fw-bold">Profile Info</span>
                    </div>
                </div>
            </div>
            <!--End Breadcrumbs-->

            <!--Main Content-->
            <section class="my-profile-info">
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

                        </div>

                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <div class="dashboard-content">

                                <!-- Profile Info -->
                                <div class="profile-info">
                                    <h3>Account details </h3>
                                    <div class="account-login-form bg-light-gray padding-20px-all">
                                        <form>
                                            <fieldset>
                                                 
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="input-firstname" class="form-label">First Name <span class="required-f">*</span></label>
                                                            <input name="firstname" placeholder="First Name" value="" id="input-firstname" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="input-lastname" class="form-label">Last Name <span class="required-f">*</span></label>
                                                            <input name="lastname" placeholder="Last Name" value="" id="input-lastname" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="input-email" class="form-label">Email Id <span class="required-f">*</span></label>
                                                            <input name="email" placeholder="Email" value="" id="input-email" class="form-control" type="email" required>
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="input-telephone" class="form-label">Mobile <span class="required-f">*</span></label>
                                                            <input name="telephone" placeholder="Mobile" value="" id="input-telephone" class="form-control" type="tel">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date of Birth<span class="required-f">*</span></label>
                                                            <input name="birthdate" class="form-control" type="date">
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Gender<span class="required-f">*</span></label>
                                                            <select class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">Male</option>
                                                                <option value="">Female</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <!-- <div class="row mb-4">
                                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                                        <div class="customCheckbox clearfix mb-2">
                                                            <input id="offers" name="offers" type="checkbox" />
                                                            <label for="offers">Receive offers from our partners</label>
                                                        </div>
                                                        <div class="customCheckbox clearfix">
                                                            <input id="newsletter" name="newsletter" type="checkbox" />
                                                            <label for="newsletter">Sign up for our newsletter</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary rounded">Save</button>
                                        </form>
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