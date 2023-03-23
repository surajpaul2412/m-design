<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Refund Configuration | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Refund Configuration</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Refund Configuration</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">  

                                <form action="#">

                                    <div class="row"> 
                                        <div class="col-lg-6">

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Set Refund Time</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="refundTime" class="form-label fw-bold">Set Time for sending Refund Request <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="refundTime" placeholder="Enter Refund Time..." />
                                                                    <div class="input-group-text">Day</div>
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Default Refund Time is <b>7 Days</b>.</small>
                                                            </div>
                                                        </div> 

                                                    </div> 
                                                </div>
                                                <div class="card-footer text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                                </div>
                                            </div>
                                            <!-- end card --> 
                                    
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