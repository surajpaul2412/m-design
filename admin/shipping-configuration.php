<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Shipping Configuration | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Shipping Configuration</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Shipping Configuration</li>
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
                                                    <!-- <h4 class="card-title mb-0">Free Shipping</h4>  -->
                                                    <div class="form-group d-flex justify-content-between align-items-center m-0">
                                                        <label for="name" class="form-label fw-bold fs-5">Enable Free Shipping</label>
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch1" switch="status" checked="">
                                                            <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                        </div>   
                                                    </div>

                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="refundTime" class="form-label fw-bold">Set Minimum Order Amount for Free Shipping  <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bx bx-rupee fs-4"></i></div>
                                                                    <input type="text" class="form-control" id="refundTime" placeholder="Enter Minimum Order Amount for Free Shipping..." />
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Default Minimum Order Amount for Free Shipping is <b><i class="bx bx-rupee"></i>499.00</b>.</small>
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
                                        <div class="col-lg-6"> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <!-- <h4 class="card-title mb-0">Free Shipping</h4>  -->
                                                    <div class="form-group d-flex justify-content-between align-items-center m-0">
                                                        <label for="name" class="form-label fw-bold fs-5">Univaseral Shipping Cost</label>
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch1" switch="status" checked="">
                                                            <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                        </div>   
                                                    </div>

                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="refundTime" class="form-label fw-bold">Set Univaseral Shipping Cost <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bx bx-rupee fs-4"></i></div>
                                                                    <input type="text" class="form-control" id="refundTime" placeholder="Enter Minimum Order Amount for Free Shipping..." />
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Default Minimum Order Amount for Free Shipping is <b><i class="bx bx-rupee"></i>49.00</b>.</small>
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