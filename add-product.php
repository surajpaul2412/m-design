<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Add Product | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
                                            <li class="breadcrumb-item active">Edit User</li>
                                        </ol> -->
                                        <a href="products.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
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

                                            <!-- [ Product Information ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Product Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Slug <sup class="text-danger fs-5">*</sup> :</label> 
                                                                <div class="input-group">
                                                                    <div class="input-group-text">https://mbizspare.com/product/</div>
                                                                    <input type="text" class="form-control" id="slug" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Choose Category <sup class="text-danger fs-5">*</sup> :</label>
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

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Choose Brands <sup class="text-danger fs-5">*</sup> :</label>
                                                                <select class="form-control select2" id="parentCategory">
                                                                    <option>Select</option> 
                                                                    <option value="AK">Brand 1</option>  
                                                                    <option value="AK">Brand 2</option> 
                                                                    <option value="HI">Brand 3</option> 
                                                                </select>
                                                            </div>
                                                        </div>  
                                                        
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">SKU <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter SKU Number" required/>
                                                            </div>
                                                        </div>

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div> 

                                            <!-- [ Product Description ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Description</h4> 
                                                </div>
                                                <div class="card-body">  
                                                     
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description" class="form-label fw-bold">Description:</label>
                                                                <textarea name="description" id="editor1"></textarea>
                                                            </div>
                                                        </div>  

                                                    </div> 
                                                </div> 
                                            </div>  
                                            
                                            <!-- [ Product Images Gallery ] Start --> 
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Images Gallery</h4> 
                                                </div>
                                                <div class="card-body">   
                                                    
                                                    <div class="row"> 
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label fw-bold">Images Gallery:</label>
                                                                <input type="file" id="input-file-now" class="dropify" multiple/>
                                                                <small class="text-muted"><b>Example::</b> image size - 1000x1000.</small>
                                                            </div>
                                                        </div>  
                                                    </div>

                                                    <div class="row row-cols-2 row-cols-lg-4 mt-3">
                                                        <div class="col">
                                                            <div class="document-box border text-center">
                                                                <div class="remove-doc">
                                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                                </div>
                                                                <a class="image-popup-no-margins" href="../assets/admin/images/small/img-1.jpg" title="Document 1">
                                                                    <img class="img-fluid" src="../assets/admin/images/small/img-1.jpg"> 
                                                                </a> 
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="document-box border text-center">
                                                                <div class="remove-doc">
                                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                                </div>
                                                                <a class="image-popup-no-margins" href="../assets/admin/images/small/img-2.jpg" title="Document 1">
                                                                    <img class="img-fluid" src="../assets/admin/images/small/img-2.jpg"> 
                                                                </a> 
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="document-box border text-center">
                                                                <div class="remove-doc">
                                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                                </div>
                                                                <a class="image-popup-no-margins" href="../assets/admin/images/small/img-3.jpg" title="Document 1">
                                                                    <img class="img-fluid" src="../assets/admin/images/small/img-3.jpg"> 
                                                                </a> 
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="document-box border text-center">
                                                                <div class="remove-doc">
                                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                                </div>
                                                                <a class="image-popup-no-margins" href="../assets/admin/images/small/img-4.jpg" title="Document 1">
                                                                    <img class="img-fluid" src="../assets/admin/images/small/img-4.jpg">
                                                                </a> 
                                                            </div>
                                                        </div> 
                                                    </div>

                                                </div> 
                                            </div> 

                                            <!-- [ Product Variation ] Start --> 
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Variation</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Select Multiple Attributes:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text">Attributes</div>
                                                                    <select id="choice_attributes" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose Attributes...">
                                                                        <option value="1">Size</option>
                                                                        <option value="2">Fabric</option>
                                                                        <option value="4">Sleeve</option>
                                                                        <option value="5">Wheel</option>
                                                                        <option value="6">Liter</option> 
                                                                    </select>
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Choose the attributes of this product and then input values of each attribute. </small>
                                                            </div>
                                                        </div>

                                                        <div class="row customer_choice_options" id="customer_choice_options"></div>

                                                    </div> 
                                                </div> 
                                            </div>  
                                            
                                            <!-- [ SEO Meta Tags ] Start --> 
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
                                            </div>  
                                    
                                        </div> 
                                        
                                        <div class="col-lg-4"> 

                                            <!-- [ Advance Configuration ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Advance Configuration</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">  

                                                        <div class="col-lg-12">
                                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                                <label for="name" class="form-label fw-bold">Published <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch1" switch="status" checked/>
                                                                    <label for="square-switch1" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                                <label for="name" class="form-label fw-bold">Featured <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch2" switch="status" />
                                                                    <label for="square-switch2" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>   

                                                        <div class="col-lg-12">
                                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                                <label for="name" class="form-label fw-bold">In Stock <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch3" switch="status" checked/>
                                                                    <label for="square-switch3" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                                <label for="name" class="form-label fw-bold">Cash On Delivery <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch4" switch="status" />
                                                                    <label for="square-switch4" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
                                                            </div>
                                                        </div>  

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div> 
                                            
                                            <!-- [ Product Price ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Price</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Regular price <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bx bx-rupee fs-4"></i></div>
                                                                    <input type="text" id="name" class="form-control" placeholder="Enter Regular price..." required/>
                                                                </div> 
                                                                <!-- <small class="text-muted"><b>Note::</b> Default Shipping is <b>3 Days</b>. </small> -->
                                                            </div> 
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Sale price:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bx bx-rupee fs-4"></i></div>
                                                                    <input type="text" id="name" class="form-control" placeholder="Enter Sale price..." />
                                                                </div>  
                                                                <!-- <small class="text-muted"><b>Note::</b> Default Shipping is <b>3 Days</b>. </small> -->
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>

                                            <!-- [ Product Images ] Start --> 
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Product Thumbnail Image</h4> 
                                                </div>
                                                <div class="card-body">   
                                                    
                                                    <div class="row"> 
                                                        <div class="col-sm-12">
                                                            <div class="form-group"> 
                                                                <input type="file" id="input-file-now" class="dropify" />
                                                                <small class="text-muted"><b>Example::</b> image size - 1000x1000.</small>
                                                            </div>
                                                        </div>  
                                                    </div> 

                                                </div> 
                                            </div>
                                            
                                            <!-- [ Estimate Shipping Time ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Estimate Shipping Time</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">   

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Shipping Days:</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="name" class="form-control" placeholder="Enter Shipping Days" />
                                                                    <div class="input-group-text">days</div>
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Default Shipping is <b>3 Days</b>. </small>
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>  
                                              
                                            <!-- [ Stock Configuration ] Start -->
                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Stock Configuration</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row"> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Product Stock:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Shipping Days" />
                                                                <!-- <small class="text-muted"><b>Note::</b> Default Shipping is <b>3 Days</b>. </small> -->
                                                            </div> 
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Low Stock Quantity Warning:</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Shipping Days" /> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div> 

                                            <!-- [ Refund Request Configuration ] Start -->
                                            <div class="card"> 
                                                <div class="card-header d-flex justify-content-between"> 
                                                    <h4 class="card-title mb-0">Refundable</h4> 
                                                    <div class="square-switch">
                                                        <input type="checkbox" id="square-switch5" switch="status" />
                                                        <label class="mb-0" for="square-switch5" data-on-label="Yes" data-off-label="No"></label>
                                                    </div>
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">  
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="refundTime" class="form-label fw-bold">Set Time for sending Refund Request:</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="refundTime" placeholder="Enter Refund Time..." />
                                                                    <div class="input-group-text">Day</div>
                                                                </div>
                                                                <small class="text-muted"><b>Note::</b> Default Refund Time is <b>7 Days</b>.</small>
                                                            </div>
                                                        </div>  

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>  
                                    
                                        </div> 

                                        <div class="col-lg-12">

                                            <!-- [ Action Button ] Start -->
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

<script type="text/javascript">

    // $('select').selectpicker();

    $('#choice_attributes').on('change', function() {
        
        $('#customer_choice_options').html(null);
        $.each($("#choice_attributes option:selected"), function(){  
            $('#customer_choice_options').append('<div class="col-lg-12"><div class="form-group"><div class="input-group"><div class="input-group-text">Size</div><select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose Values..."><option value="1">blue</option><option value="2">green</option><option value="4">red</option><option value="5">yellow</option><option value="6">pink</option></select></div></div></div>'); 
        }); 
    }); 
</script>  
