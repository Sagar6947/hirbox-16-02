<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->

    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">


    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'includes/header.php'; ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Welcome ! <?= sessionId('login_company_name') ?> </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Company Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Applicants</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $total_applicants ?>"><?= $total_applicants ?></span>
                                            </h4>

                                        </div>


                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Jobs</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $total_jobs ?>"><?= $total_jobs ?></span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Team Members</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="<?= $total_members ?>"><?= $total_members ?></span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->


                    </div><!-- end row-->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Applied Candidate</h4>

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
                                                <th>Education Level</th>
                                                <th>View Profile</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php
                                            if (!empty($applied_candidate)) {
                                                foreach ($applied_candidate as $row) {
                                                    $candidate = getRowById('tbl_candidate_registration', 'candidate_id', $row['candidate_id']);
                                                    $job = getRowById('tbl_job_post', 'job_id', $row['job_id']);
                                            ?>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td><?= $candidate[0]['name'] ?></td>
                                                        <td><?= $candidate[0]['email'] ?></td>
                                                        <td><?= $candidate[0]['number'] ?></td>
                                                        <td><?= $job[0]['job_title'] ?></td>
                                                        <td><?= $job[0]['edu_level'] ?></td>
                                                        <td><a href="<?= base_url('company/view_candidate_profile/' . $candidate[0]['candidate_id'] . '/' . url_title($candidate[0]['name'])) ?>">View Profile</a></td>
                                                        <td style="width: 100px">

                                                        <select id="appliedCandidateStatus">
                                                            <option value="">Sagar</option>
                                                        </select>
                                                            
                                                            <!-- <a href="<?= base_url('company/reject_candidate/' . $get_company[0]['company_id'] . '/' . $candidate[0]['candidate_id'] . '/' . $job[0]['job_id'])  ?>" class="btn btn-danger btn-sm edit" title="Edit">
                                                                Reject
                                                            </a> -->

                                                        </td>

                                                    </tr>

                                            <?php
                                                }
                                            }
                                            ?>




                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <?php include 'includes/footerlink.php'; ?>

</body>



</html>