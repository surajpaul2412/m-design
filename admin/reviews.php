<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Reviews & Rating | MbizSpare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="@bhisan Technology" />

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
                                    <h4 class="mb-sm-0 font-size-18">All Reviews & Rating</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Reviews & Rating</li>
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
                                                    <th>#</th>
                                                    <th>Product</th> 
                                                    <th>Customer</th> 
                                                    <th>No. Star</th>   
                                                    <th>Created At</th>
                                                    <th>Status</th>
                                                    <th class="col-1">Action</th> 
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr> 
                                                    <td>1</td>
                                                    <td class="text-wrap"><a href="#">Air Conditioning</a></td>
                                                    <td class="text-wrap">
                                                        <p class="m-0">William</p>
                                                        <p class="m-0"><b>[customer@gmail.com]</b> </p>
                                                    </td>                                                     
                                                    <td>
                                                        <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0 text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i> 
                                                        </div>
                                                    </td>
                                                    <td>2022-12-30</td> 
                                                    <td><span class="badge badge-soft-success font-size-12">Approved</span></td>
                                                    <td class="text-center">  
                                                        <a href="javascript:void(0);" class="btn btn-soft-danger btn-sm waves-effect waves-light sa-delete" title="Reject Refund Request"><i class="bx bx-history font-size-16"></i></a>  
                                                        <a href="javascript:void(0);" class="btn btn-soft-warning btn-sm waves-effect waves-light" title="View Reson" data-bs-toggle="modal" data-bs-target="#viewReson"><i class="mdi mdi-eye font-size-16"></i></a> 
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

        <!-- [ Payout View Modal ] start -->
        <div id="viewReson" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Rating and Reviews</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row"> 

                            <!-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-from-label" for="amount">Product Name:</label>                                  
                                    <input type="text" name="name" class="form-control" value="Air Conditioning" disabled />
                                </div>
                            </div> -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-from-label" for="amount">Review Content:</label>                                  
                                    <textarea name="description" class="form-control" rows="5" disabled>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</textarea>
                                </div>
                            </div> 

                        </div>        
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-success waves-effect waves-light">Pay</button> -->
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div> 

        <?php include('include/right-sidebar.php'); ?> 
        <?php include('include/script.php'); ?> 
           

    </body> 
</html>