<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Order invoice | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Order invoice</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
                                            <li class="breadcrumb-item active">Edit User</li>
                                        </ol> -->
                                        <a href="orders.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->
                         
                        <div class="row">
                            <div class="col-lg-12" id="printTable"> 
                                <!-- [ Invoice ] start -->
                                <div>
                                    <div class="card">
                                        <div class="row invoice-contact border-bottom pt-3">
                                            <div class="col-md-8">
                                                <div class="invoice-box row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-responsive invoice-table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="index.html" class="b-brand">
                                                                            <img class="img-fluid" width="200px" src="../assets/admin/images/logo-dark.png" alt="Logo" />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5>Company name</h5>
                                                                        <p class="m-0"><b>Address:</b>1065 Mandan Road, Columbia MO, Missouri. (123)-65202</p>
                                                                        <p class="m-0"><b>Email Id:</b>demo@gmail.com</p>
                                                                        <p class="m-0"><b>Mobile No:</b>+91 9999585812</p>
                                                                    </td>
                                                                </tr> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="invoice-box row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-responsive invoice-table table-borderless text-end">
                                                            <tbody>
                                                                <tr><td><h3>Invoice</h3></td></tr>
                                                                <tr>
                                                                    <td>
                                                                        <h5><b>Order ID:</b> 20220912</h5>
                                                                        <p class="m-0"><b>Order date:</b> 12-09-2022</p> 
                                                                        <p class="m-0"><b>Payment method:</b> Cash On Delivery</p>
                                                                    </td>
                                                                </tr> 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row invoive-info">
                                                <div class="col-md-12 col-xs-12 invoice-client-info">
                                                    <h5><b>Bill to :</b></h5>
                                                    <p class="m-0"><b>Name:</b> Paul K. Jensen</p> 
                                                    <p class="m-0"><b>Address:</b>1065 Mandan Road, Columbia MO, Missouri. (123)-65202</p>
                                                    <p class="m-0"><b>Email Id:</b>demo@gmail.com</p>
                                                    <p class="m-0"><b>Mobile No:</b>+91 9999585812</p> 
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table border invoice-detail-table mt-4">
                                                            <thead class="table-light">
                                                                <tr class="thead-default">
                                                                    <th class="col-8">Description</th>
                                                                    <th>Quantity</th>
                                                                    <th>Amount</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr> 
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <img class="rounded avatar-sm me-1" src="../assets/admin/images/product/1.jpg">
                                                                            <div class="desc">
                                                                                <h6 class="m-0">Product Name Here</h6> 
                                                                                <span><b>Size:</b> M</span> | 
                                                                                <span><b>color:</b> blue</span> 
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>6</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 200.00</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 1200.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <img class="rounded avatar-sm me-1" src="../assets/admin/images/product/1.jpg">
                                                                            <div class="desc">
                                                                                <h6 class="m-0">Product Name Here</h6> 
                                                                                <span><b>Size:</b> M</span> | 
                                                                                <span><b>color:</b> blue</span> 
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>7</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 100.00</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 700.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <img class="rounded avatar-sm me-1" src="../assets/admin/images/product/1.jpg">
                                                                            <div class="desc">
                                                                                <h6 class="m-0">Product Name Here</h6> 
                                                                                <span><b>Size:</b> M</span> | 
                                                                                <span><b>color:</b> blue</span> 
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>5</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 150.00</td>
                                                                    <td><i class="fas fa-rupee-sign"></i> 750.00</td>
                                                                </tr>  

                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="2"></th>
                                                                    <th>Sub Total :</th>
                                                                    <th><i class="fas fa-rupee-sign"></i> 4725.00</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2"></th>
                                                                    <th>Shipping cost :</th>
                                                                    <th class="text-danger"><i class="fas fa-rupee-sign"></i> 100.00</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2"></th>
                                                                    <th>Total Tax :</th>
                                                                    <th class="text-danger"><i class="fas fa-rupee-sign"></i> 57.00</th>
                                                                </tr><tr>
                                                                    <th colspan="2"></th>
                                                                    <th>Offer Discount :</th>
                                                                    <th class="text-success"> - <i class="fas fa-rupee-sign"></i> 45.00</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2"></th>
                                                                    <th>Coupon Discount :</th>
                                                                    <th class="text-success"> - <i class="fas fa-rupee-sign"></i> 45.00</th>
                                                                </tr>
                                                                <tr class="text-info table-light">
                                                                    <th colspan="2"></th>
                                                                    <th> 
                                                                        <h5 class="text-primary">Grand Total :</h5>
                                                                    </th>  
                                                                    <th> 
                                                                        <h5 class="text-primary"><i class="fas fa-rupee-sign"></i>  4827.00</h5>
                                                                    </th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6>Terms and Condition :</h6>
                                                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12 invoice-btn-group text-center">
                                            <button type="button" class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10">Print</button>
                                            <!-- <button type="button" class="btn waves-effect waves-light btn-secondary m-b-10 ">Cancel</button> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Invoice ] end --> 
                            </div>
                        </div>  
                        
                    </div>
                    <!-- container-fluid -->
                </div> 

                <?php include('include/footer.php'); ?> 

            </div>  
        </div> 

        <?php include('include/right-sidebar.php'); ?> 
        <?php include('include/script.php'); ?> 

        <script>
            document.querySelector('.btn-print-invoice').addEventListener('click', function () {
                var link2 = document.createElement('link');
                link2.innerHTML =
                    '<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}.pcoded-main-container{margin-left:0px;}a:not(.btn){text-decoration:none}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.page-header,.pc-sidebar,.pc-mob-header,.pc-header,.pct-customizer,.modal,.pcoded-navbar,.print-btn{display:none}.pc-container{top:0;}.invoice-contact{padding-top:0;}@page,.card-body,.card-header,body,.pcoded-content{padding:0;margin:0}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}..table tfoot{borbackgroundder-color:#B9B9B9}</style>';

                document.getElementsByTagName('head')[0].appendChild(link2);
                window.print();
            })
        </script>
           

    </body> 
</html>