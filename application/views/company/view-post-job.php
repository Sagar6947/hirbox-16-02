

    <?php include 'includes/headerlink.php'; ?>



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
                                <h4 class="mb-sm-0 font-size-18">View Job Post</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                                        <li class="breadcrumb-item active">View Job Post</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <?php
                            if ($this->session->has_userdata('msg')) {
                                echo $this->session->userdata('msg');
                                $this->session->unset_userdata('msg');
                            }
                            ?>
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
                                                <th>Posted</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            if (!empty($job)) {
                                                $i = 0;
                                                foreach ($job as $row) {
                                                    $i = $i + 1;
                                            ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $row['job_title'] ?></td>
                                                        <td><?= $row['industry'] ?></td>
                                                        <td><?= $row['city'] ?></td>
                                                        <td><?= (($row['job_type'] == 0)? 'Full Time' : '') ?> <?= (($row['job_type'] == 1)? 'Part Time' : '' ) ?> <?= (($row['job_type'] == 2)? 'Part Time' : '')?></td>
                                                        <td><?= substr($row['job_description'], 0, 100) ?>...</td>
                                                        
                                                        <td><?= convertDatedmy($row['create_date']); ?></td>
                                                        <td style="width: 100px">
                                                            <a href="<?= base_url('update-job/' . $row['job_id']) ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="<?= base_url('delete-job') ?>?BdID=<?= $row['job_id'] ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
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