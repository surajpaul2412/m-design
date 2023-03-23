<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>All Refunds | MbizSpare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="@bhisan Technology" />

        <?php include('include/style.php'); ?> 
        
    </head>

    <body data-sidebar="dark" data-layout-mode="light" class="sidebar-enable vertical-collpsed">

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
                                    <h4 class="mb-sm-0 font-size-18">All Refunds</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Refunds</li>
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
                                                    <th>Order Id</th>
                                                    <th>Product</th>
                                                    <th>Seller Name</th>
                                                    <th>Price</th> 
                                                    <th>Seller Approval</th> 
                                                    <th>Admin Approval</th> 
                                                    <th>Refund Status</th>
                                                    <th>Refund Date</th> 
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr> 
                                                    <td>#mbiz-123456</td>
                                                    <td class="text-wrap"><a href="#">Air Conditioning</a></td>
                                                    <td class="text-wrap">William</td>
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>240.00</b>
                                                    </td>
                                                    <td><span class="badge badge-soft-success font-size-12">Approved</span></td>
                                                    <td><span class="badge badge-soft-warning font-size-12">Pending</span></td> 
                                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                                    <td>2022-12-30</td> 
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