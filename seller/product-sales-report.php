<!doctype html>
<html lang="en"> 
<head> 
        <meta charset="utf-8" />
        <title>Product Sales Report | MbizSpare</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Product Sales Report</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">All Banner</li>
                                        </ol> --> 
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <!-- [ breadcrumb ] end -->

                        <div class="row">  
                            <div class="col-xl-12">
                                <div class="card border"> 
                                    <div class="card-header">  
                                        <!-- Filter Area -->
                                        <div class="filter-area">
                                            <div class="row justify-content-start align-items-center">
                                                <div class="col-lg-10">
                                                    <form class="custom-form" method="POST" action="#">
                                                        <div class="row align-items-center"> 
                                                            <div class="col">
                                                                <div class="input-group form-group mb-0">
                                                                <label class="input-group-text form-control-sm">Start Date</label> 
                                                                    <input type="date" class="form-control form-control-sm" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="input-group form-group mb-0">
                                                                <label class="input-group-text form-control-sm">End Date</label> 
                                                                    <input type="date" class="form-control form-control-sm" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2"> 
                                                                <button type="submit" class="btn btn-success waves-effect waves-light">Filter</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body"> 
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">#</th> 
                                                    <th>Product Name</th>  
                                                    <th>Category Name</th>
                                                    <th class="col-1">Number Of Sale</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr> 
                                                    <td>1</td>
                                                    <td class="text-wrap">Air Conditioning</td> 
                                                    <td>Filters</td>
                                                    <td><span class="badge badge-soft-success font-size-16">20</span></td>
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