<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Apply Candidate | Hirbox</title>

    

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
                                <h4 class="mb-sm-0 font-size-18">View Apply Candidates</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                                        <li class="breadcrumb-item active">Candidate List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Candidate List</h4>
                                    
                                </div>
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Applied For</th>
                                                <th>Exprience</th>
                                                <th>Education Level</th>
                                                <th>Action</th>
                                                <th>Mapped</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Tanisha Roy</td>
                                                <td>tanisha@gmail.com</td>
                                                <td>9090909090</td>
                                                <td>Fashion Designer</td>
                                                <td>2 Years</td>
                                                <td>Masters</td>
                                                <td style="width: 100px">
                                                   <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-eye"></i> 
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
                                                <td>Muskan Jain</td>
                                                <td>muskan@gmail.com</td>
                                                <td>9090909090</td>
                                                <td>Web Developer</td>
                                                <td>4 Years</td>
                                                <td>Graduation</td>
                                                <td style="width: 100px">
                                                   <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-eye"></i> 
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
                                                <td>Ankit SHarma</td>
                                                <td>ankit@gmail.com</td>
                                                <td>9090909090</td>
                                                <td>Business Developer</td>
                                                <td>1 Years</td>
                                                <td>Masters</td>
                                                <td style="width: 100px">
                                                   <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-eye"></i> 
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