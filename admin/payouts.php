<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>All Payouts | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">All Payouts</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Payouts</li>
                                        </ol> 
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">  
                            <div class="col-xl-12">
                                <div class="card border"> 
                                    <!-- <div class="card-header"></div> -->
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">#</th> 
                                                    <th>Seller Name</th>  
                                                    <th>Amount</th> 
                                                    <th class="col-1">Payment Method</th>
                                                </tr>
                                            </thead> 
                                            
                                            <tbody>
                                                <tr> 
                                                    <td>1</td>
                                                    <td>
                                                        <p class="m-0"><b>Shanni Gaund</b></p>
                                                        <p class="m-0">[myara AutoMobiles]</p>
                                                    </td>  
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>200.00</b>
                                                    </td>  
                                                    <td><span class="badge badge-soft-success font-size-14">Cash</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>1</td>
                                                    <td>
                                                        <p class="m-0"><b>Shanni Gaund</b></p>
                                                        <p class="m-0">[myara AutoMobiles]</p>
                                                    </td>  
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>200.00</b>
                                                    </td>  
                                                    <td><span class="badge badge-soft-info font-size-14">Online</span></td>
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