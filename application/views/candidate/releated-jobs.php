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
                            <h4 class="mb-sm-0 f-24">Related Jobs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Related Jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card-body">
                        <!-- Nav tabs -->


                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="browse-all" role="tabpanel">
                                <div class="row">

                                    <!-- end col -->
                                    <div class="col-xl-12">
                                        <?php
                                        if ($job_list) {
                                            foreach ($job_list as $row) {
                                                $company = getRowById('tbl_company_registration', 'company_id', $row['company_id']);
                                                $saved_info = getRowByMoreId('tbl_saved_job', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));
                                                $applied_info = getRowByMoreId('tbl_applied_candidate', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));

                                                $get_skills = json_decode($row['industry']);
                                                $tech = getAllRow('tbl_industries');


                                        ?>

                                                <div class="card">
                                                    <div class="card-body job_list">
                                                        <div class="detail-box d-flex flex-column ">
                                                            <div class="post_detial d-flex border-bottom">
                                                                <div class="post_image mr-10">
                                                                    <img src="<?= base_url() ?>uploads/company/<?= $company[0]['logo_image'] ?>" width="60px" alt="Company Logo">
                                                                </div>
                                                                <div class="company_detail">
                                                                    <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>">
                                                                        <h5><?= $row['job_title'] ?></h5>
                                                                    </a>
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <p><?= $company[0]['company_name'] ?></p>
                                                                    </div>
                                                                    <div class="d-flex align-items-center job_boxer">
                                                                        <p><i class="fas fa-industry"></i> <?= $row['industry'] ?></p>
                                                                        <p><i class="fas fa-user-friends"></i> <?= $row['num_of_position'] ?></p>
                                                                        <p><i class="fas fa-map-marker-alt"></i> <?= $row['city'] ?>, <?= $row['state'] ?></p>
                                                                        <p><i class="fas fa-rupee-sign"></i> <?= $row['salary_from'] ?> <?= -$row['salary_to'] ?></p>
                                                                        <p><i class="fas fa-clock"></i> <?= (($row['job_type'] == 0) ? 'Full Time' : '') ?> <?= (($row['job_type'] == 1) ? 'Part Time' : '') ?> <?= (($row['job_type'] == 2) ? 'Part Time' : '') ?></p>
                                                                        <p><i class="fas fa-briefcase"></i> <?= $row['exprience'] ?></p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="jobs_desc py-3">
                                                                <?= substr($row['job_description'], 0, 200) ?>...
                                                            </div>

                                                            <div class="post_detial d-flex border-top res-flex-column py-2">
                                                                <div class="company_detail d-flex align-items-center justify-content-between w-100">
                                                                    <div class="row flex-column">
                                                                        <span> Posted By : <?= $company[0]['company_name'] ?> </span>
                                                                        <span> <?= convertDatedmy($row['create_date']) ?> </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="<?= base_url('candidate/add_save_job/' . sessionId('candidate_id') . '/' . $row['job_id']) ?>" class="btn waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i> Saved' : '<i class="far fa-star"></i> Save')) ?></a>
                                                                        <!--<a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>" class="btn btn-primary text-white waves-effect waves-light">View & Apply <?= ((!empty($applied_info) ? 'Applied' : 'View & Apply')) ?></a>-->
                                                                        <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>" class="btn <?= ((!empty($applied_info) ? 'applied_btn event_none' : 'orange_btn')) ?>  waves-effect waves-light"><?= ((!empty($applied_info) ? '<i class="fas fa-check-circle"></i> Applied' : 'Apply')) ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="company_details d-flex justify-content-end pt-2">
                                                                <a href="" class="mr-10"><i class="fas fa-clipboard-list"></i> Report</a>
                                                                <a href=""><i class="fas fa-ban"></i> Hide</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>
                                        <!-- end card -->
                                    </div>

                                </div>
                            </div>
                            <!-- tab 2 saved -->
                            <div class="tab-pane" id="saved" role="tabpanel"></div>
                            <!-- tab 3 hidden -->
                            <div class="tab-pane" id="hidden" role="tabpanel"></div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer-link.php'; ?>

</body>



</html>