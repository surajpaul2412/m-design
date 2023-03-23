<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>All Sellers | MbizSpare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="@bhisan Technology" />

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
                                    <h4 class="mb-sm-0 font-size-18">All Sellers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Sellers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card border"> 
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">Sr. No.</th>
                                                    <th>Seller/store Name</th>
                                                    <th>Email Id</th>
                                                    <th>Phone No.</th>
                                                    <th>Registerd Date</th> 
                                                    <th class="col-1">Seller Verify</th>
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr>
                                                    <td>#001</td>
                                                    <td class="text-wrap">
                                                        <p class="m-0">Abhishek Singh</p>
                                                        <p class="m-0"><b>[Isha Decor]</b></p>
                                                    </td>
                                                    <td>abhis1@gmail.com</td>
                                                    <td>+919999585812</td>
                                                    <td>2011/04/25</td>
                                                    <td class="text-center"><span class="badge badge-pill badge-soft-success font-size-12 p-2 border w-md">Verified </span></td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical font-size-18"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="view-seller.php" class="dropdown-item"><i class="mdi mdi-account-box font-size-16 text-info me-1"></i> Profile</a></li>
                                                                <!-- <li><a href="#" class="dropdown-item"><i class="bx bx-money font-size-16 text-warning me-1"></i> Go to Payment</a></li> -->
                                                                <li><a href="payouts.php" class="dropdown-item"><i class="mdi mdi-clipboard-list font-size-16 text-default me-1"></i> Payment History</a></li>
                                                                <li><a href="edit-seller.php" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item sa-delete"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td>#002</td>
                                                    <td class="text-wrap">
                                                        <p class="m-0">Amarnath Pandey</p>
                                                        <p class="m-0"><b>[Meena Decor]</b></p>
                                                    </td>
                                                    <td>amar@gmail.com</td>
                                                    <td>+9199992211</td>
                                                    <td>2011/04/25</td>
                                                    <td class="text-center"><span class="badge badge-pill badge-soft-danger font-size-12 p-2 border w-md">Unverified </span></td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical font-size-18"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="view-seller.php" class="dropdown-item"><i class="mdi mdi-account-box font-size-16 text-info me-1"></i> Profile</a></li>
                                                                <!-- <li><a href="#" class="dropdown-item"><i class="bx bx-money font-size-16 text-warning me-1"></i> Go to Payment</a></li> -->
                                                                <li><a href="payouts.php" class="dropdown-item"><i class="mdi mdi-clipboard-list font-size-16 text-default me-1"></i> Payment History</a></li>
                                                                <li><a href="edit-seller.php" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item sa-delete"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
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