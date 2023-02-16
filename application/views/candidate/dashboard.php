<?php include 'includes/header-link.php' ?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/header.php' ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Welcome <?= sessionId('cname'); ?> ! </h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Candidate Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex bb-0 res-flex-column justify-content-between">
                                <span class="row">
                                    <h2 class="card-title mb-0 flex-grow-1 f-24"><i class="fas fa-user mr-10"></i> <?= sessionId('cname') ?></h2>
                                    <?php
                                    $jobrole = getRowById('tbl_role', 'rid', $candidate[0]['designation']);
                                    ?>
                                    <h5 class="candidate_dash_role"><?= (($jobrole[0]['rid'] == '14') ? $candidate[0]['other_role'] : $jobrole[0]['role']) ?></h5>
                                </span>

                                <div class="edit_btn">
                                    <i class="fa fa-eye"></i>
                                    <a href="<?= base_url('Candidate/view_profile') ?>" class="mr-10">View your public profile</a>
                                    <i class="fa fa-edit"></i>
                                    <a href="<?= base_url('Candidate') ?>"> Edit</a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="dash_info">
                                    <?php
                                    if (!empty($candidate[0]['city'] || $candidate[0]['country'])) {
                                    ?>
                                        <h6> <i class="fas fa-map-marker-alt"></i> &nbsp; <?= $candidate[0]['city'] . ((!empty($candidate[0]['city'] && $candidate[0]['country'])) ? ', ' : '') . $candidate[0]['country'] ?></h6>
                                    <?php
                                    }
                                    ?>
                                    <h6> <i class="fas fa-phone-alt"></i> &nbsp;<?= $candidate[0]['number'] ?></h6>
                                    <h6> <i class="fas fa-envelope"></i> &nbsp;<?= $candidate[0]['email'] ?></h6>
                                </div>

                                <p>Keep your job status up-to-date to inform employers of your search.</p>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary orange_btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ready To Interview <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" href="#"><i data-feather="chevrons-right"></i> Ready To Interview</a></li>
                                        <li><a class="dropdown-item" href="#"><i data-feather="check-square"></i> Open to Offers</a></li>
                                        <li><a class="dropdown-item" href="#"><i data-feather="x"></i> Close to Offers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>

                </div>
                <div class="row">
                    <div class="card-header align-items-center d-flex bb-0">
                        <h4 class="card-title mb-0 flex-grow-1"><b>Recently Applied Jobs</b></h4>
                    </div>
                    <div class="card-body skills-box text-center">
                        <h4>Currenly you haven’t applied to any jobs</h4>
                        <a href="<?= base_url('candidate/view_jobs') ?>" class="btn  btn-dark  waves-effect waves-light">Browse Jobs</a>
                    </div>

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<div class="rightbar-overlay"></div>
<?php include 'includes/footer-link.php'; ?>

</body>

</html>