<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Shipping Countries | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Shipping Countries</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Shipping Countries</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-xl-4"> 
                                <div class="card border">
                                    <form action="#">
                                        <!-- <div class="card-header"> 
                                            <h4 class="card-title mb-0">Add Country</h4>  
                                        </div> -->
                                        <div class="card-body">  
                                            <div class="row"> 
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Country Name <sup class="text-danger fs-5">*</sup> :</label>
                                                                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description" class="form-label">Description:</label>
                                                                <textarea name="" id="description" class="form-control" placeholder="Write somthing..."></textarea> 
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name" class="form-label fw-bold">Published <sup class="text-danger fs-5">*</sup> :</label>
                                                                <div class="square-switch">
                                                                    <input type="checkbox" id="square-switch3" switch="status" checked />
                                                                    <label for="square-switch3" data-on-label="Yes"
                                                                        data-off-label="No"></label>
                                                                </div>   
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
                                                    <th class="col-1">Sr. No.</th>
                                                    <th>Country Name</th> 
                                                    <th class="col-1">Published</th>
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr>
                                                    <td>#001</td>
                                                    <td>India</td>  
                                                    <td class="text-center">
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch3" switch="status" checked/>
                                                            <label for="square-switch3" data-on-label="Yes"
                                                                data-off-label="No"></label>
                                                        </div> 
                                                    </td>
                                                    <td class="text-center">  
                                                        <a href="edit-user.php" class="btn btn-soft-info btn-sm waves-effect waves-light"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete"><i class="bx bx-trash font-size-16"></i></button> 
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <td>#002</td>
                                                    <td>Russia</td>  
                                                    <td class="text-center">
                                                        <div class="square-switch">
                                                            <input type="checkbox" id="square-switch3" switch="status" />
                                                            <label for="square-switch3" data-on-label="Yes"
                                                                data-off-label="No"></label>
                                                        </div> 
                                                    </td>
                                                    <td class="text-center">  
                                                        <a href="edit-user.php" class="btn btn-soft-info btn-sm waves-effect waves-light"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete"><i class="bx bx-trash font-size-16"></i></button> 
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