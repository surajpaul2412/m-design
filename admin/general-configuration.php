<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>General Configuration | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">General Configuration</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li> 
                                            <li class="breadcrumb-item active">Website Configuration</li>
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
                                        <div class="col-lg-7">

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">General Settings</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Site Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Website Name..." required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Site Slogan:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Website Slogan..." required/>
                                                            </div>
                                                        </div> 

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Contact Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Email Id <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Website Name..." required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Contact Number <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Website Name..." required/>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Address <sup class="text-danger fs-5">*</sup> :</label>
                                                                <textarea id="name" class="form-control" placeholder="Enter Your Website Name..."></textarea>
                                                            </div>
                                                        </div> 

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Global SEO Meta Tags</h4> 
                                                </div>
                                                <div class="card-body">  
                                                     
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Meta Title:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" required/>
                                                            </div>
                                                        </div>  

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description" class="form-label">Meta Keywords:</label>
                                                                <textarea name="" id="description" class="form-control" placeholder="Write somthing..."></textarea> 
                                                            </div>
                                                        </div>   

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description" class="form-label">Meta Description:</label>
                                                                <textarea name="" id="description" class="form-control" placeholder="Write somthing..."></textarea> 
                                                            </div>
                                                        </div>  

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 
                                    
                                        </div> 
                                        
                                        <div class="col-lg-5"> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Advance Configuration</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">  

                                                        <div class="col-lg-12">
                                                            <div class="form-group d-flex justify-content-between align-itema-center">
                                                                <label for="name" class="form-label fw-bold">Show Topbar Header <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch3" switch="status" />
                                                                    <label for="square-switch3" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>  
                                                        
                                                    </div> 
                                                </div> 
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Website Logo</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label fw-bold">Dark Logo:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 500x500 </small>
                                                            </div>
                                                        </div>   
                                                        <div class="col-sm-6">
                                                            <div class="form-label">
                                                                <label class="form-label fw-bold">Light Logo:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 500x500 </small>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Website Icon</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label fw-bold">Dark Site Icon:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 128x128 </small>
                                                            </div>
                                                        </div>   
                                                        <div class="col-sm-6">
                                                            <div class="form-label">
                                                                <label class="form-label fw-bold">Light Site Icon:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 128x128 </small>
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