<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Payout Request | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Payout Request</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Payout Request</li>
                                        </ol> 
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">  
                            <div class="col-xl-12">
                                <div class="card border"> 
                                    <div class="card-header"> 
                                        <h4 class="card-title mb-0">Seller Withdraw Request</h4>  
                                    </div>
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">#</th> 
                                                    <th>Seller Name</th>  
                                                    <th>Requested Amount</th>
                                                    <th>Total Amount to Pay</th>
                                                    <th class="col-1">Created At</th>
                                                    <th class="col-1">Status</th>
                                                    <th class="col-1">Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr> 
                                                    <td>1</td>
                                                    <td>
                                                        <p class="m-0"><b>Shanni Gaund</b></p>
                                                        <p class="m-0">[myara AutoMobiles]</p>
                                                    </td>  
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>200.00</b>
                                                    </td>  
                                                    <td>
                                                        <b><i class="bx bx-rupee"></i>2400.00</b>
                                                    </td> 
                                                    <td>2022-07-25 22:28:19</td>
                                                    <td><span class="badge badge-soft-warning font-size-12">pending</span></td> 
                                                    <td class="text-center"> 
                                                        <a href="javascript:void(0);" class="btn btn-soft-info btn-sm waves-effect waves-light" title="Pay Now" data-bs-toggle="modal" data-bs-target="#payNow"><i class="bx bx-money font-size-16"></i></a> 
                                                        <a href="javascript:void(0);" class="btn btn-soft-success btn-sm waves-effect waves-light" title="View Details" data-bs-toggle="modal" data-bs-target="#prView"><i class="mdi mdi-eye font-size-16"></i></a> 
                                                        <a href="payouts.php" class="btn btn-soft-warning btn-sm waves-effect waves-light" title="Payment History"><i class="bx bx-history font-size-16"></i></a> 
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


        <!-- [ Pay Now Modal ] start -->
        <div id="payNow" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Pay to seller</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="table-success">
                                            <th colspan="2">UPI/Bank Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Due to seller</td>
                                            <td><i class="bx bx-rupee "></i>139.500</td>
                                        </tr> 
                                        <tr>
                                            <td>Bank Name</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bank Account Name</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bank Account Number</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bank Routing Number</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-from-label" for="amount">Requested Amount <sup class="text-danger fs-5">*</sup> :</label>                                  
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bx bx-rupee fs-3"></i></div>
                                        <input type="number" lang="en" min="0" step="0.01" name="amount" id="amount" value="10" class="form-control" required="" disabled/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label fw-bold" for="payment_option">Payment method <sup class="text-danger fs-5">*</sup> :</label> 
                                    <select name="payment_option" id="payment_option" class="form-control" required="">
                                        <option value="">Select Payment Method</option>
                                        <option value="cash">Cash</option>
                                        <option value="bank_payment">Bank Payment</option>
                                        <option value="upi">UPI</option>
                                    </select>
                                </div>
                            </div>

                        </div>        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success waves-effect waves-light">Pay</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>   

        <!-- [ Payout View Modal ] start -->
        <div id="prView" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Payout Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered"> 
                                    <tbody> 
                                        <tr>
                                            <th>Seller Name</th>
                                            <td>Abhishek Singh</td>
                                        </tr>
                                        <tr>
                                            <th>Store Name</th>
                                            <td>Aisha Decor</td>
                                        </tr>
                                        <tr>
                                            <th>Due to seller</th>
                                            <td><i class="bx bx-rupee "></i>139.500</td>
                                        </tr> 
                                        <tr>
                                            <th>Requested Amount</th>
                                            <td><i class="bx bx-rupee"></i>50.00</td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-from-label" for="amount">Description:</label>                                  
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