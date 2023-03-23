<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Add Product Category | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Product Category</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
                                            <li class="breadcrumb-item active">Edit User</li>
                                        </ol> -->
                                        <a href="product-category.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
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
                                                    <h4 class="card-title mb-0">Product Category Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Category Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Slug <sup class="text-danger fs-5">*</sup> :</label> 
                                                                <div class="input-group">
                                                                    <div class="input-group-text">https://mbizspare.com/category/</div>
                                                                    <input type="text" class="form-control" id="slug" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Choose Parent Category <sup class="text-danger fs-5">*</sup> :</label>
                                                                <select class="form-control select2" id="parentCategory">
                                                                    <option>Select</option> 
                                                                    <option value="AK">Category 1</option>
                                                                    <optgroup label="Category 2">
                                                                        <option value="CA">Category 2.1</option>
                                                                        <option value="CA">Category 2.2</option>
                                                                        <option value="CA">Category 2.3</option> 
                                                                    </optgroup> 
                                                                    <option value="HI">Category 3</option> 
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12" id="productType">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Choose Type:</label>
                                                                <select class="form-control select2">
                                                                    <!-- <option>Select</option>  -->
                                                                    <option value="AK">Auto Parts</option>
                                                                    <option value="HI">Electronics</option>  
                                                                </select>
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
                                                    <h4 class="card-title mb-0">Advance Configuration</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">  
                                                        
                                                        <div class="col-lg-12 border-bottom mb-2">
                                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                                <label for="name" class="form-label fw-bold">Published <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch1" switch="status" checked="">
                                                                    <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Ordering Number:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Order Lavel" required/>
                                                                <small class="text-muted"><b>Note::</b> Higher number has high priority </small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Filtering Attributes:</label>
                                                                <select class="form-control select2 select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                    <option>Select</option> 
                                                                    <option value="AK">Size</option> 
                                                                    <option value="HI">Color</option> 
                                                                    <option value="HI">Sleeve</option> 
                                                                    <option value="HI">Fabric</option> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Category Images</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label fw-bold">Profile Image:</label>
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 500x500 </small>
                                                            </div>
                                                        </div>   
                                                        <div class="col-sm-12">
                                                            <div class="form-label">
                                                                <label class="form-label fw-bold">Profile Icon Image:</label>
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