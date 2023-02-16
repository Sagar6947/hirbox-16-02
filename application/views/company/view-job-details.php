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
                            <h4 class="mb-sm-0 font-size-18">View Job Detail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">View job detail</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <?php
                $company_info = getRowById('tbl_company_registration', 'company_id', $job_detail[0]['company_id']);
                ?>

                <?php
                if ($this->session->has_userdata('msg')) {
                    echo $this->session->userdata('msg');
                    $this->session->unset_userdata('msg');
                }
                ?>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Overview</h4>

                                <div>
                                    <ul class="list-unstyled product-list">
                                        <li class="overview_col">
                                            <h5>Job Role:</h5> <span><?= $job_detail[0]['job_title'] ?></span>
                                        </li>
                                        <li class="overview_col">
                                            <h5>Experience:</h5> <span><?= $job_detail[0]['exprience'] ?></span>
                                        </li>
                                        <li class="overview_col">
                                            <h5>Vacancy:</h5> <span><?= $job_detail[0]['num_of_position'] ?></span>
                                        </li>
                                        <li class="overview_col">
                                            <h5>Job Type:</h5> <span><?= (($job_detail[0]['job_type'] == 0) ? 'Full Time' : '') ?> <?= (($job_detail[0]['job_type'] == 1) ? 'Part Time' : '') ?> <?= (($job_detail[0]['job_type'] == 2) ? 'Part Time' : '') ?></span>
                                        </li>
                                        <li class="overview_col">
                                            <h5>Posted Date:</h5> <span><?= convertDatedmy($job_detail[0]['create_date']) ?></span>
                                        </li>
                                        <li class="overview_col">
                                            <h5>Last Apply Date:</h5> <span>05-12-2022</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="compnay_cta mt-4">
                                    <button type="button" class="btn <?= (!empty($applied_validation) ? 'applied_btn event_none' : 'btn-primary') ?> waves-effect waves-light" data-bs-toggle="modal" <?= (!empty($applied_validation) ? '' : 'data-bs-target="#exampleModal"') ?> data-bs-whatever="@mdo"> &nbsp; <?= (!empty($applied_validation) ? '<i class="fa fa-check-circle"></i> Applied' : 'Apply Now') ?> </button>
                                    <a href="#" class="btn btn-outline-primary waves-effect waves-light mr-10"><i class="fas fa-phone-volume"></i>Contact Now</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 bg-white pb-4">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mt-4 mt-xl-3">

                                    <div class="post_detial d-flex border-bottom">
                                        <div class="post_image mr-10">
                                            <img src="<?= base_url() ?>uploads/company/<?= $company_info[0]['logo_image'] ?>" width="60px" alt="Company Logo">
                                        </div>
                                        <div class="company_detail">
                                            <h5><?= $job_detail[0]['job_title'] ?></h5>
                                            <div class="d-flex align-items-center gap-3">
                                                <p><?= $company_info[0]['company_name'] ?></p>
                                            </div>
                                        </div>

                                    </div>




                                    <h5 class="mb-4 mt-4">Description</h5>

                                    <div class="job_detail-desc px-2 row flex-column gap-2 m-3 border-bottom pb-3">

                                        <?= $job_detail[0]['job_description'] ?>


                                    </div>

                                    <div class="row mb-3 border-bottom">
                                        <h5 class="mb-4 mt-2">Job Detail</h5>
                                        <div class="col-md-6 px-4">
                                            <div>
                                                <ul class="list-unstyled product-list">
                                                    <li class="overview_col">
                                                        <h5>Job Role:</h5> <span><?= $job_detail[0]['job_title'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Min Salary:</h5> <span>₹ <?= $job_detail[0]['salary_from'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Location:</h5> <span><?= $job_detail[0]['city'] ?>, <?= $job_detail['state'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Vacancy:</h5> <span><?= $job_detail[0]['num_of_position'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Eligibility:</h5> <span><?= $job_detail[0]['edu_level'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Work Policy:</h5> <span><?= (($job_detail[0]['work_policy'] == 0) ? 'Office Work' : '') ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Posted Date:</h5> <span><?= convertDatedmy($job_detail[0]['create_date']) ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>HR:</h5> <span><?= $job_detail[0]['hr_name'] ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-4">
                                            <div>
                                                <ul class="list-unstyled product-list">
                                                    <li class="overview_col">
                                                        <h5>Experience:</h5> <span>5 years Exp</span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Max Salary:</h5> <span>₹ <?= $job_detail[0]['salary_to'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Languages:</h5> <span>Hindi, English</span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Job Type:</h5> <span><?= (($job_detail[0]['job_type'] == 0) ? 'Full Time' : '') ?> <?= (($job_detail[0]['job_type'] == 1) ? 'Part Time' : '') ?> <?= (($job_detail[0]['job_type'] == 2) ? 'Part Time' : '') ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Skills:</h5> <span><?= $job_detail[0]['skills'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>Last Apply Date:</h5> <span>05-12-2022</span>
                                                    </li>

                                                    <li class="overview_col">
                                                        <h5>Posted By:</h5> <span><?= $company_info[0]['company_name'] ?></span>
                                                    </li>
                                                    <li class="overview_col">
                                                        <h5>HR Contact:</h5> <span><?= $job_detail[0]['hr_contact'] ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job_foooter_btn mt-4">
                                        <button type="button" class="btn <?= (!empty($applied_validation) ? 'applied_btn event_none' : 'btn-primary') ?> mr-10 waves-effect waves-light" data-bs-toggle="modal" <?= (!empty($applied_validation) ? '' : 'data-bs-target="#exampleModal"') ?> data-bs-whatever="@mdo"> &nbsp; <?= (!empty($applied_validation) ? '<i class="fas fa-check-circle"></i> Applied' : 'Apply Now') ?> </button>
                                        <a href="<?= base_url('candidate/add_save_job/' . sessionId('candidate_id') . '/' . $job_detail[0]['job_id']) ?>" class="btn btn-outline-primary waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i>Saved' : '<i class="far fa-star"></i>Save')) ?></a>
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light mr-10" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm"><i class="fas fa-share-square"></i> &nbsp; Share</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!--=========Social Media Modal Starts==========-->

<!--=========Apply Modal starts===========-->

<div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Your Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="mb-3 row  align-items-center">
                            <div class="col-md-8">
                                <label for="recipient-name" class="col-form-label"><b><?= $user_candidate[0]['name'] ?></b></label>
                                <p><?= (($user_candidate[0]['not_employeed'] == '1') ? "Not Employeed" :  ucfirst($user_candidate[0]['job_title']) . ' @ ' . ucfirst($user_candidate[0]['job_company'])) ?></p>
                            </div>
                            <div class="col-md-4">
                                <a href="#">Update Profile</a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label"><b>Your hiring contact is <?= $job_detail[0]['hr_name'] ?></b></label>
                            <p class="font_small">Let them know why you are a good for this role</p>
                            <textarea class="form-control" name="hr_note" id="message-text" placeholder="Write a note to <?= $job_detail[0]['hr_name']  ?>  at <?= $company_info[0]['company_name'] ?>"></textarea>
                        </div>

                        <div class="modal-footer">
                            <!--<button type="button" class="modal_cancel_btn" data-bs-dismiss="modal">Cancel</button>-->
                            <input type="submit" class="btn btn-primary" value="Send application">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=========Apply Modal ends===========-->



<div>
    <!-- Small modal button -->

    <!--  Small modal example -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">Share On</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="share_icons">
                        <a href="#" class="share_icon_box">
                            <p>Share On Whatsapp</p>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="share_icon_box">
                            <p>Share On Facebook</p>
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="share_icon_box">
                            <p>Share On Twitter</p>
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!--=========Social Media Modal Ends==========-->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer-link.php'; ?>

</body>



</html>