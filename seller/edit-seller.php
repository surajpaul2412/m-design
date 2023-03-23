<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Edit Seller | MbizSpare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="@bhisan Technology" />

        <?php include('include/style.php'); ?> 

        <!-- Lightbox css -->
        <link href="../assets/admin/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        
    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> --> 

        <!-- [ Start: Layout Wrapper ] -->
        <div id="layout-wrapper">

            <?php include('include/header.php'); ?>   
            <?php include('include/sidenav.php'); ?>  
            
            <!--[ Main Content ] start --> 
            <div class="main-content"> 

                <!--[ Page Content ] start --> 
                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- [ breadcrumb ] start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Edit Seller</h4>

                                    <div class="page-title-right"> 
                                        <a href="view-seller.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to Profile</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">

                                <!--[ Seller Information ] start --> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header d-flex justify-content-between align-items-center"> 
                                            <h4 class="card-title mb-0">Seller Information</h4>  
                                            <span class="badge badge-pill badge-soft-danger font-size-12 p-2 border w-md">Account is Not Verified </span>
                                        </div>
                                        <div class="card-body">  
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="profile-image">
                                                        <img class="rounded-circle img-fluid" src="../assets/admin/images/users/avatar-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Seller Name <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Store Name <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Email Id <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <input type="email" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Mobile Number <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">DOB <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <input type="date" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Gender <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <select class="form-select form-control form-control-sm">
                                                                    <option value="">Male</option>
                                                                    <option value="">Female</option>
                                                                </select> 
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="address" class="form-label">Address <sup class="text-danger fs-5">*</sup> :</label></label>
                                                                <textarea name="address" id="address" class="form-control"></textarea>
                                                            </div>
                                                        </div> 

                                                    </div> 
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div> 
                                
                                <!--[ Change Password ] start --> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header"> 
                                            <h4 class="card-title mb-0">Change Password</h4> 
                                        </div>
                                        <div class="card-body">  
                                            <div class="row"> 
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">New Password:</label>
                                                        <div class="input-group auth-pass-inputgroup">
                                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Confirm Password:</label>
                                                        <div class="input-group auth-pass-inputgroup">
                                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div> 
                                
                                <!--[ Legal Documents ] start --> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header"> 
                                            <h4 class="card-title mb-0">Legal Documents</h4> 
                                        </div>
                                        <div class="card-body">  

                                            <!--[ alert ] start --> 
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                A simple danger alert—check it out!
                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                                            </div>

                                            <div class="row row-cols-2 row-cols-lg-4">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Upload Store Registration <sup class="text-danger fs-5">*</sup> :</label></label>
                                                        <input type="file" id="name" class="form-control" required/>
                                                    </div>
                                                </div> 
                                                 
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div> 
                                
                                <!--[ Bank Account Details ] start --> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header"> 
                                            <h4 class="card-title mb-0">Bank Account Details</h4> 
                                        </div>
                                        <div class="card-body">  
                                            <div class="row"> 
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Account Holder Name:</label>
                                                        <input type="password" class="form-control" placeholder="Enter Account Holder Name..." /> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Account Number:</label>
                                                        <input type="password" class="form-control" placeholder="Enter Account Number..." /> 
                                                    </div>
                                                </div> 

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Bank Name:</label>
                                                        <input type="password" class="form-control" placeholder="Enter Bank Name..." /> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">IFSC Code:</label>
                                                        <input type="password" class="form-control" placeholder="Enter IFSC Code..." /> 
                                                    </div>
                                                </div> 
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">Branch Name:</label>
                                                        <input type="password" class="form-control" placeholder="Enter Branch Name..." /> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div> 
                                
                                <!--[ UPI Details ] start --> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header"> 
                                            <h4 class="card-title mb-0">UPI Details</h4> 
                                        </div>
                                        <div class="card-body">  
                                            <div class="row"> 
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">UPI Holder Name:</label>
                                                        <input type="password" class="form-control" placeholder="Enter UPI Holder Name..." /> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name" class="form-label">UPI ID:</label>
                                                        <input type="password" class="form-control" placeholder="Enter UPI id..." /> 
                                                    </div>
                                                </div>  
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div> 
                            </div> 
                        </div>
                        <!-- end row -->
                        
                        
                    </div>
                    <!-- container-fluid -->
                </div> 

                <?php include('include/footer.php'); ?> 

            </div>  
        </div> 

        <?php include('include/right-sidebar.php'); ?> 
        <?php include('include/script.php'); ?> 

        <!-- Magnific Popup-->
        <script src="../assets/admin/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- lightbox init js-->
        <script src="../assets/admin/js/pages/lightbox.init.js"></script>
           

    </body> 
</html>