<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@bhis1">

    <title>Contact Us | MbizSpare</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php include("include/style.php"); ?>
</head>

<body>

    <!-- Page Loader -->
    <!-- <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div> -->

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <?php include("include/header.php"); ?>

        <!-- [ Body Container ] start -->
        <div id="page-content">
            <!--Breadcrumbs-->
            <div class="breadcrumbs-wrapper text-uppercase">
                <div class="container">
                    <div class="breadcrumbs"><a href="index.php" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Contact Us</span></div>
                </div>
            </div>
            <!--End Breadcrumbs-->
            
            <!-- [ Contact section ] start -->
            <section class="section contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"> 
                            <!-- Contact Form -->
                            <div class="formFeilds contact-form form-vertical mt-2 mt-md-0">
                                <h1 class="text-start text-capitalize mb-4">Get in Touch</h1>
                                <form action="php/ajax_sendmail.php" name="contactus" method="post" id="contact-form" class="contact-form">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Name">
                                                <span class="error_msg" id="name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Email">
                                                <span class="error_msg" id="email_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="Subject">
                                                <span class="error_msg" id="subject_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="ContactFormMessage" name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                <span class="error_msg" id="message_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mailsendbtn mb-0 w-100">
                                                <input class="btn w-100 rounded" type="submit" name="contactus" value="Send Message">
                                                <div class="loading"><img class="img-fluid" src="assets/images/ajax-loader.gif" alt="loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="response-msg"></div>
                            </div>
                            <!-- End Contact Form --> 
                        </div>
                        <div class="col-lg-6">
                            <h1 class="text-start text-capitalize mb-4">Contact Information</h1>
                            <!-- Contact Details -->
                            <div class="contact-details">
                                <ul class="list-unstyled">
                                    <li class="mb-4 address"><strong class="d-block mb-2">ADDRESS :</strong>
                                        <p class="m-0"><i class="icon an an-map-marker-al me-2 d-none"></i> 143, sec-77, Faridabad, India - 110044</p>
                                    </li>
                                    <li class="mb-3 phone"><strong>PHONE : </strong><i class="icon an an-phone me-2 d-none"></i> +91-8076179211</li>
                                    <li class="email"><strong>EMAIL:</strong><i class="icon an an-envelope-l me-2 d-none"></i> info@mbizspare.com</li>
                                </ul>
                                <hr>
                                <div class="open-hours"><strong class="d-block mb-2">OPENING HOURS</strong>
                                    Mon - Sat : 9am - 11pm<br>
                                    Sunday: 11am - 5pm
                                </div>
                                <hr>
                                <div class="follow-us">
                                    <label class="d-block mb-3"><strong>STAY CONNECTED</strong></label>
                                    <div class="social-sharing d-flex-center">
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Share on Facebook"><i class="icon an an-facebook m-0 pb-1 px-1"></i><span class="d-none share-title">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tweet on Twitter"><i class="icon an an-twitter m-0 pb-1 px-1"></i><span class="d-none share-title">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Pin on Pinterest"><i class="icon an an-pinterest-p pb-1 m-0 px-1"></i> <span class="d-none share-title">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-instagram" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Share on Instagram"><i class="icon an an-instagram m-0 pb-1 px-1"></i><span class="d-none share-title">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-tikTok" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Share on TikTok"><i class="icon an an-tiktok m-0 pb-1 px-1"></i><span class="d-none share-title">TikTok</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Share by Whatsapp"><i class="icon an an-whatsapp m-0 pb-1 px-1"></i><span class="d-none share-title">Whatsapp</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Contact Details -->
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contact map-section">
                                <iframe src="https://www.google.com/maps/embed?pb=" height="350"></iframe>                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <!--End Wrapper-->

    <?php include("include/footer.php"); ?>
    <?php include("include/drawer.php"); ?>

    <?php include("include/script.php"); ?>

</body>

</html>