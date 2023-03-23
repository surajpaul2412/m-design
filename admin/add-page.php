<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Add Page | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Page</h4>

                                    <div class="page-title-right"> 
                                        <a href="pages.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">  

                                <form action="#">

                                    <div class="row"> 
                                        <div class="col-lg-8">

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Page Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Page Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Slug <sup class="text-danger fs-5">*</sup> :</label> 
                                                                <div class="input-group">
                                                                    <div class="input-group-text">https://mbizspare.com/page/</div>
                                                                    <input type="text" class="form-control" id="slug" />
                                                                </div>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description" class="form-label fw-bold">Description:</label> 
                                                                <textarea name="description" id="editor1"></textarea>
                                                            </div>
                                                        </div>   

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">SEO Meta Tags</h4> 
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
                                        
                                        <div class="col-lg-4">  

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Page Banner</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label fw-bold">Banner Images:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 1920x550 </small>
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
                                                    <button type="reset" class="btn btn-warning waves-effect waves-light">Clear</button>
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