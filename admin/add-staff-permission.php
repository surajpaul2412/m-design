<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Add Staff Permission | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Staff Permission</h4>

                                    <div class="page-title-right"> 
                                        <a href="staff-permissions.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-12">  

                                <form action="#">

                                    <div class="row"> 
                                        <div class="col-lg-12">

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Staff Permission Information</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Staff Permission Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter your full name..." required/>
                                                            </div>
                                                        </div>     

                                                    </div> 
                                                </div>
                                                <!-- <div class="card-footer"></div> -->
                                            </div>
                                            <!-- end card --> 

                                            <div class="card">
                                                <div class="card-header"> 
                                                    <h4 class="card-title mb-0">Set Staff Permission</h4> 
                                                </div>
                                                <div class="card-body">  
                                                    <div class="row">
                                                        <div class="col-lg-12"> 
                                                            <table id="" class="table table-bordered nowrap w-100">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>Menu</th> 
                                                                        <th class="col-1">List</th>   
                                                                        <th class="col-1">Add</th>  
                                                                        <th class="col-1">Edit</th>
                                                                        <th class="col-1">Delete</th> 
                                                                    </tr>
                                                                </thead> 

                                                                <tbody>
                                                                    <tr> 
                                                                        <td>Customers</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="customers-switch1" switch="status" checked/>
                                                                                <label for="customers-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td> </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="customers-switch2" switch="status" />
                                                                                <label for="customers-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="customers-switch3" switch="status" />
                                                                                <label for="customers-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td>Seller</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="seller-switch1" switch="status" checked/>
                                                                                <label for="seller-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td> </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="seller-switch2" switch="status" checked/>
                                                                                <label for="seller-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="seller-switch3" switch="status" />
                                                                                <label for="seller-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 

                                                                    <tr class="table-light"> 
                                                                        <th colspan="5">Manage Store</th>  
                                                                    </tr>  
                                                                    <tr> 
                                                                        <td>Products</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="product-switch1" switch="status" checked/>
                                                                                <label for="product-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="product-switch2" switch="status" />
                                                                                <label for="product-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="product-switch3" switch="status" checked/>
                                                                                <label for="product-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="product-switch4" switch="status" />
                                                                                <label for="product-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr>  
                                                                    <tr> 
                                                                        <td>Product Category</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="category-switch1" switch="status" checked/>
                                                                                <label for="category-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="category-switch2" switch="status" />
                                                                                <label for="category-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="category-switch3" switch="status" checked/>
                                                                                <label for="category-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="category-switch4" switch="status" />
                                                                                <label for="category-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td>Product Type</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="type-switch1" switch="status" checked/>
                                                                                <label for="type-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="type-switch2" switch="status" />
                                                                                <label for="type-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="type-switch3" switch="status" checked/>
                                                                                <label for="type-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="type-switch4" switch="status" />
                                                                                <label for="type-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td>Brands</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="brand-switch1" switch="status" checked/>
                                                                                <label for="brand-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="brand-switch2" switch="status" />
                                                                                <label for="brand-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="brand-switch3" switch="status" checked/>
                                                                                <label for="brand-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="brand-switch4" switch="status" />
                                                                                <label for="brand-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td>Attributes</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="attribute-switch1" switch="status" checked/>
                                                                                <label for="attribute-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="attribute-switch2" switch="status" />
                                                                                <label for="attribute-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="attribute-switch3" switch="status" checked/>
                                                                                <label for="attribute-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="attribute-switch4" switch="status" />
                                                                                <label for="attribute-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr> 
                                                                    <tr> 
                                                                        <td>Coupon</td> 
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="coupon-switch1" switch="status" checked/>
                                                                                <label for="coupon-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="coupon-switch2" switch="status" />
                                                                                <label for="coupon-switch2" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>   
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="coupon-switch3" switch="status" checked/>
                                                                                <label for="coupon-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td>  
                                                                        <td>
                                                                            <div class="square-switch">
                                                                                <input type="checkbox" id="coupon-switch4" switch="status" />
                                                                                <label for="coupon-switch4" data-on-label="Yes" data-off-label="No"></label>
                                                                            </div>
                                                                        </td> 
                                                                    </tr>   
                                                                </tbody>
                                                            </table>
                                                        </div>  
                                                    </div> 
                                                </div> 
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