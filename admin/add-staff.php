<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Add Staff | MbizSpare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="Abhisan Technology" />


        <?php include('include/style.php'); ?> 
        
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
                                    <h4 class="mb-sm-0 font-size-18">Add Staff</h4>

                                    <div class="page-title-right"> 
                                        <a href="staffs.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">  

                                <form action="#">

                                    <div class="row"> 
                                        <div class="col-lg-12">

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Staff Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Staff Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your full name..." required/>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Eamil Id <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your email id..." required/>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Contact Number <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your phone number..." required/>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Choose Role <sup class="text-danger fs-5">*</sup>:</label>
                                                                <select class="form-control select2">
                                                                    <option>Select</option> 
                                                                    <option value="AK">Product manager</option>
                                                                    <option value="HI">Category Manager</option>  
                                                                    <option value="HI">Order Clerks</option>  
                                                                </select>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                            <label for="name" class="form-label fw-bold">Published <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch3" switch="status" checked />
                                                                    <label for="square-switch3" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>   

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Staff Login Password</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Password <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your email id..." required/>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Confirm Password<sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your email id..." required/>
                                                            </div>
                                                        </div>   

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card -->   
                                    
                                        </div>  

                                        <div class="col-lg-12">
                                            <div class="card action-btn text-end">
                                                <div class="card-body p-2">
                                                    <!-- <button type="reset" class="btn btn-warning waves-effect waves-light">Clear</button> -->
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                </form>

                            </div> <!-- end col --> 
                        </div> <!-- end row -->  
                        
                        
                    </div>
                    <!-- container-fluid -->
                </div> 

                <?php include('include/footer.php'); ?> 

            </div>  
        </div> 

        <?php include('include/right-sidebar.php'); ?> 
        <?php include('include/script.php'); ?>  

    </body> 
</html>