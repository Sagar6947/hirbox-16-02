<?php


function job_details($row)
{
}



function job($row, $panel)
{
    $company = getRowById('tbl_company_registration', 'company_id', $row['company_id']);
    $industry = getRowById('tbl_industries', 'cate_id', $row['industry']);
    $saved_info = getRowByMoreId('tbl_saved_job', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));
    $applied_info = getRowByMoreId('tbl_applied_candidate', array('job_id' => $row['job_id'], 'candidate_id' => sessionId('candidate_id')));
?>
    <div class="card">
        <div class="card-body job_list">
            <div class="detail-box d-flex flex-column ">
                <div class="post_detial d-flex border-bottom">
                    <div class="post_image mr-10">
                        <img src="<?= base_url() ?>uploads/company/<?= $company[0]['logo_image'] ?>" width="60px" alt="Company Logo">
                    </div>
                    <div class="company_detail">

                        <?php
                        if ($panel == 'candidate') {
                        ?>
                            <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>">
                            <?php
                        } else {
                            ?>
                                <a href="<?= base_url('Admin_dashboard/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>">
                                <?php
                            }
                                ?>

                                <h5><?= $row['job_title'] ?></h5>
                                </a>
                                <div class="d-flex align-items-center gap-3">
                                    <p><?= $company[0]['company_name'] ?></p>
                                </div>
                                <div class="d-flex align-items-center job_boxer">
                                    <p><i class="fas fa-industry"></i> <?= $industry[0]['category'] ?></p>
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

                        <?php
                        if ($panel == 'candidate') {
                        ?>
                            <div>
                                <a href="<?= base_url('candidate/add_save_job/' . sessionId('candidate_id') . '/' . $row['job_id'] . '/' . '0') ?>" class="btn waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i> Saved' : '<i class="far fa-star"></i> Save')) ?></a>

                                <a href="<?= base_url('candidate/view_job_details/' . $row['job_id'] . '/' . url_title($row['job_title'])) ?>" class="btn <?= ((!empty($applied_info) ? 'applied_btn event_none' : 'orange_btn')) ?>  waves-effect waves-light"><?= ((!empty($applied_info) ? '<i class="fas fa-check-circle"></i> Applied' : 'Apply')) ?></a>
                            </div>

                        <?php
                        } else if ($panel == 'recruiter') {
                        ?>
                            <div>
                                <a href="<?= base_url('recruiter/add_save_job/' . sessionId('login_recruiter_id') . '/' . $row['job_id'] . '/' . '1') ?>" class="btn waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i> Saved' : '<i class="far fa-star"></i> Save')) ?></a>

                                <a href="" class="btn orange_btn waves-effect waves-light">Upload Candidates</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div>
                                <a href="<?= base_url('Admin_dashboard/job_status/' . $row['job_id'] . '/' . (($row['status'] == '0') ? '1' : '0')) ?>" class=" <?= (($row['status'] == '0') ? 'btn-outline-success' : 'btn-outline-danger') ?> admin_margin_right-2 btn waves-effect waves-light mr-10 admin_active_dective_btn" style="margin-left: 10px;">
                                    <i class="fas fa-<?= (($row['status'] == '0') ? 'eye' : 'eye-slash') ?>"></i>&nbsp;
                                    <?= (($row['status'] == '0') ? 'Active' : 'Deactive') ?>
                                </a>
                                <a href="" class="btn btn-success waves-effect waves-light"> <i class="fa fa-pen"></i> &nbsp; Edit Job</a>
                                <a href="" class="btn btn-danger waves-effect waves-light"> <i class="fa fa-trash"></i> &nbsp; Remove</a>
                            </div>
                        <?php
                        }
                        ?>



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
?>

<?php
function job_detials($job_detail)
{
    $company_info = getRowById('tbl_company_registration', 'company_id', $job_detail[0]['company_id']);
    $applied = getRowByMoreId('tbl_applied_candidate', array('job_id' => $job_detail[0]['job_id'], 'candidate_id' => sessionId('candidate_id')));
    $saved_info = getRowByMoreId('tbl_saved_job', array('job_id' => $job_detail[0]['job_id'], 'candidate_id' => sessionId('candidate_id')));

?>
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
                    <button type="button" class="btn <?= (!empty($applied) ? 'applied_btn event_none' : 'btn-primary') ?> waves-effect waves-light" data-bs-toggle="modal" <?= (!empty($applied) ? '' : 'data-bs-target="#exampleModal"') ?> data-bs-whatever="@mdo"> &nbsp; <?= (!empty($applied) ? '<i class="fa fa-check-circle"></i> Applied' : 'Apply Now') ?> </button>
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

                        <li>We are Looking For a PHP Doveloper, who is must be familiar with the PHP fundamentals& PHP framwork. Experience with Laravel & mixs, Livewire

                            Good knowledge of SQL and related databases, with a preference for those with MySQL experience.</li>

                        <li>Excellent knowledge of the basic PHP 7 or web server exploits along with their solutions.</li>

                        <li>Experience building or maintaining a CMS.</li>

                        <li>Knowledge of MVC frameworks.</li>

                        <li>A detailed understanding of database design and administration.</li>

                        <li>The ability to integrate a variety of data sources and databases into a single system.</li>
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
                        <button type="button" class="btn <?= (!empty($applied) ? 'applied_btn event_none' : 'btn-primary') ?> mr-10 waves-effect waves-light" data-bs-toggle="modal" <?= (!empty($applied) ? '' : 'data-bs-target="#exampleModal"') ?> data-bs-whatever="@mdo"> &nbsp; <?= (!empty($applied) ? '<i class="fas fa-check-circle"></i> Applied' : 'Apply Now') ?> </button>
                        <a href="<?= base_url('candidate/add_save_job/' . sessionId('candidate_id') . '/' . $job_detail[0]['job_id'] . '/' . '0') ?>" class="btn btn-outline-primary waves-effect waves-light mr-10 <?= ((!empty($saved_info) ? 'saved_btn' : 'save_btn')) ?>"><?= ((!empty($saved_info) ? '<i class="fa fa-star"></i>Saved' : '<i class="far fa-star"></i>Save')) ?></a>

                        <button type="button" class="btn btn-outline-success waves-effect waves-light mr-10" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm"><i class="fas fa-share-square"></i> &nbsp; Share</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>

<?php
}
?>


<?php
function profile($get_candidate)
{
?>
    <div class="col-xl-12">
        <div class="mt-4 mt-xl-3">
            <div class="row border-bottom">
                <div class="col-lg-8">
                    <div class="post_detial d-flex">
                        <div class="post_image mr-10">
                            <img src="<?= base_url() ?>assets/images/user_icon.png" width="60px" alt="Company Logo">
                        </div>
                        <div class="company_detail">
                            <h5><?= $get_candidate[0]['name'] ?>
                                <?php
                                if (!empty($get_candidate[0]['job_search_position'])) {
                                ?>
                                    <span class="employeed_status btn-success"><?= $get_candidate[0]['job_search_position'] ?></span>
                                <?php
                                }
                                ?>
                            </h5>
                            <div class="d-flex align-items-center gap-3">
                                <span class="divider"> <i class="fa fa-envelope"></i> &nbsp; <?= $get_candidate[0]['email'] ?></span>
                                <span class="divider"> <i class="fa fa-phone-alt"></i> &nbsp; <?= $get_candidate[0]['number'] ?></span>
                                <span> <i class="fas fa-map-marker-alt"></i> &nbsp; <?= ucfirst($get_candidate[0]['city']) ?>, <?= ucfirst($get_candidate[0]['state']) ?></span>
                            </div>

                        </div>
                    </div>
                    <div class="candidate_summry candidate_profile_summary py-2">
                        <?= $get_candidate[0]['profile_summary'] ?>
                    </div>
                </div>

                <div class="col-lg-4 text_right_left">
                    <div class="profile_icons">
                        <?php
                        if (!empty($get_candidate[0]['resume'])) {
                        ?>
                            <a href="<?= base_url() ?>uploads/resume/<?= $get_candidate[0]['resume'] ?>" target="_blank" class="hire_icon margin_not">
                                View Resume
                            </a>
                            <a href="<?= base_url() ?>uploads/resume<?= $get_candidate[0]['resume'] ?>" <?= (($get_candidate[0]['resume'] != '') ? 'download' : '') ?> class="hire_icon margin_not_2"><i class="fas fa-download"></i> </a>
                        <?php
                        } else {
                        ?>
                            <a href="<?= base_url('Candidate/upload_resume') ?>" target="_blank" class="hire_icon">
                                Upload Resume
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="row mb-3 border-bottom">
                <h5 class="mb-4 mt-2">Description</h5>
                <div class="col-md-6 px-4">
                    <div>
                        <ul class="list-unstyled product-list">
                            <li class="overview_col">
                                <h5>Full Name:</h5> <span><?= $get_candidate[0]['name'] ?></span>
                            </li>
                            <li class="overview_col">
                                <h5>Email:</h5> <span> <?= $get_candidate[0]['email'] ?></span>
                            </li>
                            <?php
                            if (!empty($get_candidate[0]['city']) || !empty($get_candidate[0]['state'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Location:</h5> <span><?= $get_candidate[0]['city'] ?>, <?= $get_candidate[0]['state'] ?></span>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="overview_col">
                                <h5>Currently:</h5> <span><?= (($get_candidate[0]['not_employeed'] == 0) ? 'Employeed' : 'Not Employeed') ?></span>
                            </li>
                            <?php
                            $get_role = getRowById('tbl_role', 'rid', $get_candidate[0]['designation'])
                            ?>

                            <li class="overview_col">
                                <!-- <h5>Current Designation :</h5> <span><?= $get_role[0]['role'] ?></span> -->
                                <h5>Current Designation :</h5> <span><?= (($get_role[0]['role'])) ?></span>
                            </li>
                            <?php
                            if (!empty($get_candidate[0]['job_company'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Industry:</h5> <span><?= ucfirst($get_candidate[0]['job_company']) ?></span>
                                </li>
                            <?php } ?>
                            <?php
                            if (!empty($get_candidate[0]['flexible_remote_work'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Work Policy:</h5> <span><?= $get_candidate[0]['flexible_remote_work']  ?></span>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if (!empty($get_candidate[0]['graduation_year'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Graduation Year:</h5> <span><?= $get_candidate[0]['graduation_year'] ?></span>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if (!empty($get_candidate[0]['college'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Collage:</h5> <span><?= $get_candidate[0]['college'] ?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 px-4">
                    <div>
                        <ul class="list-unstyled product-list">

                            <?php
                            if (!empty($get_candidate[0]['number'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Contact Number:</h5> <span><?= $get_candidate[0]['number'] ?></span>
                                </li>
                            <?php
                            }
                            ?>

                            <?php
                            if (!empty($get_candidate[0]['dob'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>DOB:</h5> <span> <?= $get_candidate[0]['dob'] ?></span>
                                </li>

                            <?php
                            }
                            ?>

                            <?php
                            if (!empty($get_candidate[0]['job_title'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Current Role:</h5> <span><?= ucfirst($get_candidate[0]['job_title']) ?></span>
                                </li>

                            <?php
                            }
                            ?>

                            <?php
                            if (!empty($get_candidate[0]['job_type'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Job Type:</h5> <span><?= (($get_candidate[0]['job_type'] == 0) ? 'Full Time' : '') ?> <?= (($job_detail[0]['job_type'] == 1) ? 'Part Time' : '') ?> <?= (($job_detail[0]['job_type'] == 2) ? 'Part Time' : '') ?></span>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            $get_skills = json_decode($get_candidate[0]['technologies_used']);
                            // print_r($get_skills);
                            $tech = getAllRow('tbl_technologies');
                            // print_r($t   ech);
                            ?>

                            <li class="overview_col">
                                <h5>Skills:</h5> <span>
                                    <?php
                                    foreach ($tech as $techno) {
                                        if (in_array($techno['tid'], $get_skills)) {

                                            echo  $techno['name'];
                                            echo ' , ';
                                        }
                                    } ?></span>
                            </li>
                            <?php
                            if (!empty($get_candidate[0]['motivates_you'])) {
                            ?>
                                <li class="overview_col">
                                    <h5>Motivates Me:</h5> <span><?= $get_candidate[0]['motivates_you'] ?></span>
                                </li>
                            <?php
                            }
                            ?>

                            <?php
                            if (!empty($get_candidate[0]['degree'])) {
                            ?>

                                <li class="overview_col">
                                    <h5>Degree:</h5> <span><?= $get_candidate[0]['degree'] ?></span>
                                </li>

                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="job_foooter_btn mt-4 profile_icons">
                <?php
                if (!empty($get_candidate[0]['resume'])) {
                ?>
                    <a href="<?= base_url() ?>uploads/resume/<?= $get_candidate[0]['resume'] ?>" target="_blank" class="hire_icon margin_not">
                        View Resume
                    </a>
                    <a href="<?= base_url() ?>uploads/resume<?= $get_candidate[0]['resume'] ?>" <?= (($get_candidate[0]['resume'] != '') ? 'download' : '') ?> class="hire_icon margin_not_2"><i class="fas fa-download"></i> </a>
                <?php
                } else {
                ?>
                    <a href="<?= base_url('Candidate/upload_resume') ?>" target="_blank" class="hire_icon">
                        Upload Resume
                    </a>
                <?php
                }
                ?>
                <a href="#" class="btn btn-outline-success waves-effect waves-light mr-10"><i class="fas fa-share-square"></i> &nbsp; Share Profile</a>
            </div>
        </div>
    </div>
<?php
}


?>