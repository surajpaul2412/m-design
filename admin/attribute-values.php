<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Attribute Values | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Attribute Values</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Attributes</li>
                                        </ol> -->
                                        <a href="attributes.php" class="btn btn-primary waves-effect waves-light"><i class="fas fa-reply-all"></i> Back to list</a>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-4"> 
                                <div class="card border">
                                    <form action="#">
                                        <div class="card-header"> 
                                            <h4 class="card-title mb-0">Add New Attribute Value</h4>  
                                        </div>
                                        <div class="card-body">  
                                            <div class="row"> 
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Attribute Name:</label>
                                                                <input type="text" id="name" class="form-control" Value="Color" disabled required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Value Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Value Name" required/> 
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Value Color <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" class="form-control" id="colorpicker-showinput-intial" value="#f46a6a" required/>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Value Image <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div> 

                                                    </div> 
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                        </div> 
                                    </form>
                                </div>
                                <!-- end card --> 
                            </div> <!-- end col -->

                            <div class="col-xl-8">
                                <div class="card border"> 
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">#</th> 
                                                    <th>Value Name</th> 
                                                    <th>Value Image/Color</th> 
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Red</td>  
                                                    <td>
                                                        <span class="badge bg-danger rounded-circle">&nbsp;</span>
                                                    </td>
                                                    <td class="text-center">   
                                                        <a href="edit-user.php" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Edit Attribute"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete" title="Delete Attribute"><i class="bx bx-trash font-size-16"></i></button> 
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td>2</td>
                                                    <td>Blue</td>   
                                                    <td>
                                                        <span class="badge bg-primary rounded-circle">&nbsp;</span>
                                                    </td>
                                                    <td class="text-center">   
                                                        <a href="#" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Edit Attribute"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete" title="Delete Attribute"><i class="bx bx-trash font-size-16"></i></button> 
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td>3</td>
                                                    <td>Green</td>   
                                                    <td>
                                                        <span class="badge bg-success rounded-circle">&nbsp;</span>
                                                    </td>
                                                    <td class="text-center">   
                                                        <a href="#" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Edit Attribute"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete" title="Delete Attribute"><i class="bx bx-trash font-size-16"></i></button> 
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