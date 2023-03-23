<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>All Orders | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">All Orders</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Orders</li>
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
                                                    <th>Customer</th>
                                                    <th>Seller</th>
                                                    <th>Amount</th>
                                                    <th>Delivery Status</th>
                                                    <th>Payment method</th> 
                                                    <th>Refund</th> 
                                                    <th>Order Date</th>
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr> 
                                                    <td>#mbiz-123456</td>
                                                    <td>Shyam</td>
                                                    <td>William</td>
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>2450.00</b>
                                                    </td>
                                                    <td><span class="badge badge-soft-success font-size-12">Delivered</span></td>
                                                    <td>Cash On Delivery</td> 
                                                    <td>No Refund</td>  
                                                    <td>2022-12-30</td>
                                                    <td class="text-center">  
                                                        <a href="order-detail.php" class="btn btn-soft-success btn-sm waves-effect waves-light" title="View Order"><i class="mdi mdi-eye font-size-16"></i></a> 
                                                        <a href="order-invoice.php" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Download Invoice"><i class="bx bx-download font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete" title="Delete Order"><i class="bx bx-trash font-size-16"></i></button> 
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