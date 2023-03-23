<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>All Customers | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">All Customers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Customers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card border"> 
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">Sr. No.</th>
                                                    <th>Name</th>
                                                    <th>Email Id</th>
                                                    <th>Phone No.</th>
                                                    <th>Registerd Date</th> 
                                                    <th class="col-1 text-center">User Verify</th> 
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr>
                                                    <td>#001</td>
                                                    <td>Abhishek Singh</td>
                                                    <td>abhis1@gmail.com</td>
                                                    <td>+919999585812</td>
                                                    <td>2011/04/25</td>
                                                    <td class="text-center"> 
                                                        <button type="button" class="btn btn-success btn-sm waves-effect waves-light"><i class="bx bxs-user-check font-size-18"></i></button> 
                                                    </td>
                                                    <td class="text-center">  
                                                        <a href="edit-user.php" class="btn btn-soft-info btn-sm waves-effect waves-light"><i class="bx bx-pencil font-size-16"></i></a> 
                                                        <button type="button" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete"><i class="bx bx-trash font-size-16"></i></button> 
                                                    </td>
                                                     
                                                </tr> 
                                                <tr>
                                                    <td>#001</td>
                                                    <td>Amarnath Pandey</td>
                                                    <td>amar@gmail.com</td>
                                                    <td>+9199992211</td>
                                                    <td>2011/04/25</td>
                                                    <td class="text-center"> 
                                                        <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"><i class="bx bx-user-x font-size-18"></i></button> 
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