<?php include 'template/headerlink.php'; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'template/header.php'; ?>
       
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Welcome ! Admin </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Admin Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Jobs</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $jobs_count ?>">0</span>
                                            </h4>
                                            
                                        </div>

                                       
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Companies</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $company_count ?>">0</span>
                                            </h4>
                                            
                                        </div>
                                       
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Registered users</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $user_count ?>">0</span>
                                            </h4>
                                            
                                        </div>
                                       
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Recruiter</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $recruiter_count ?>">0</span>
                                            </h4>
                                            
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Enquiry</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="admin-table">Sr. No.</th>
                                                    <th class="admin-table">Name</th>
                                                    <th class="admin-table">Email</th>
                                                    <th class="admin-table">Contact No.</th>
                                                    <th class="admin-table">Messages</th>
                                                    <th class="admin-table">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="background: #fff; color: #495057;">1</th>
                                                    <td>Sagar Thakur</td>
                                                    <td>sagarthakur6947@gmail.com</td>
                                                    <td>6265965711</td>
                                                    <td>This is good</td>
                                                    <td><a href=""> <i class="fas fa-trash"></i>&nbsp; Remove</a></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'template/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <?php include 'template/footerlink.php'; ?>

</body>



</html>