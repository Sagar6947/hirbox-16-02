<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Job Details | Hirebox</title>

    

    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>





        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">View Job Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                                        <li class="breadcrumb-item active">View Job Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--    <h4 class="card-title">View Job Post</h4>-->
                                   
                                <!--</div>-->
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Job Title</th>
                                                <th>Job category</th>
                                                <th>Location</th>
                                                <th>Job Type</th>
                                                <th>Description</th>
                                                <th>Start date</th>
                                                <th>Action</th>
                                                <th>Mapped</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Developer</td>
                                                <td>It Industry</td>
                                                <td>US</td>
                                                <td>Full Time</td>
                                                <td>this is a it based web developer job</td>
                                                <td>2011/04/25</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i> 
                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                                <td><a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td>2.</td>
                                                <td>Content Writer</td>
                                                <td>Education</td>
                                                <td>US</td>
                                                <td>Full Time</td>
                                                <td>this is a Content Writer job</td>
                                                <td>2011/04/25</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i> 
                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                                <td><a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td>3.</td>
                                                <td>App Developer</td>
                                                <td>It Industry</td>
                                                <td>US</td>
                                                <td>Full Time</td>
                                                <td>this is a it based Application Developer job</td>
                                                <td>2011/04/25</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i> 
                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                                <td><a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            
                                           

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'includes/footer.php'; ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

</body>

</html>