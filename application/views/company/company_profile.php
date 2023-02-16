<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
  <?php include 'includes/headerlink.php'; ?>
</head>

<body data-topbar="dark">

    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18"><?= $title ?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jobs</a></li>
                                        <li class="breadcrumb-item active">Candidate Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 bg-white pb-4">

                            <div class="row">
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
                                                        <div class="candidate_summry py-2">
                                                            <?= $get_candidate[0]['profile_summary'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 text_right_left">
                                                <div class="profile_icons">
                                                    <a href="mailto:<?= $get_candidate[0]['email'] ?>" class="mail_icon" target="_blank">
                                                        <i class="fas fa-envelope"></i>
                                                    </a>
                                                    <a href="tel:<?= $get_candidate[0]['number'] ?>" class="phone_icon" target="_blank">
                                                        <i class="fas fa-phone-alt"></i>
                                                    </a>
                                                    <a href="#" class="hire_icon">
                                                        Hire
                                                    </a>
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
                                                            <h5>Current Designation :</h5> <span><?= $get_role[0]['role'] ?></span>
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
                                                        <li class="overview_col">
                                                            <h5>Languages:</h5> <span>Hindi, English</span>
                                                        </li>

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

                                                        $tech = getAllRow('tbl_technologies');

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

                                        <div class="job_foooter_btn mt-4">
                                            <a href="<?= base_url() ?>uploads/resume<?= $get_candidate[0]['resume'] ?>" <?= (($get_candidate[0]['resume'] != '') ? 'download' : '') ?> class="btn btn-primary text-white waves-effect waves-light"><i class="fas fa-download"></i> &nbsp; Download resume </a>
                                            <a href="#" class="btn btn-outline-success waves-effect waves-light mr-10"><i class="fas fa-share-square"></i> &nbsp; Share Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php include 'includes/footer.php'; ?>

        </div>
    </div>

    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

</body>

</html>