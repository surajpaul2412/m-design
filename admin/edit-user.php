<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Edit User | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Edit User</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
                                            <li class="breadcrumb-item active">Edit User</li>
                                        </ol> -->
                                        <a href="users.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header d-flex justify-content-between align-items-center"> 
                                            <h4 class="card-title mb-0">Customer Information</h4>  
                                        </div>
                                        <div class="card-body">  
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="profile-image">
                                                        <img class="rounded-circle" src="../assets/admin/images/users/avatar-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">First Name:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Email Id:</label>
                                                                <input type="email" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Mobile Number:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">DOB:</label>
                                                                <input type="date" id="name" class="form-control" placeholder="Enter Your Full Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Gender:</label>
                                                                <select class="form-select form-control form-control-sm">
                                                                    <option value="">Male</option>
                                                                    <option value="">Female</option>
                                                                </select> 
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">User Verify:</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch3" switch="bool" checked />
                                                                    <label for="square-switch3" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
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
                                <!-- end card --> 
                                
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
                                <!-- end card -->
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
           

    </body> 
</html>