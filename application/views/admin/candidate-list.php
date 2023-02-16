<?php include 'template/headerlink.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper" class="layout_wrapper_gray">

    <?php include 'template/header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-sm-0 font-size-18">Candidates </h4>
                                <p class="mt-1">Showing <?= $company_count ?> Candidates</p>
                            </div>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Candidates</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <?php
                if ($this->session->has_userdata('msg')) {
                    echo $this->session->userdata('msg');
                    $this->session->unset_userdata('msg');
                }
                ?>

                <div class="row">

                    <?php
                    if (!empty($get_candidate)) {
                        foreach ($get_candidate as $row) {
                            // $get_job_num = getNumRows('tbl_job_post', array('company_id' => $row['company_id']));
                    ?>

                            <div class="col-xl-6 col-md-6">
                                <!-- card -->
                                <div class="card card_border card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <span class="admin_candidate_employment <?= (($row['not_employeed'] == 0) ? 'employed' : 'not-employed') ?> "><?= (($row['not_employeed'] == 0) ? 'Employeed' : 'Not Employeed') ?></span>
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="d-flex admin_company_info_wrapper">
                                                <span class="admin_company_logo">
                                                    <?php
                                                    if (!empty($row['logo_image'])) {
                                                    ?>
                                                        <img src="<?= base_url() ?>uploads/company/<?= $row['logo_image'] ?>" alt="">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="<?= base_url() ?>assets/images/default_company.png" alt="">
                                                    <?php
                                                    }
                                                    ?>
                                                </span>
                                                <div>
                                                    <h4 class="fs-20 mb-1"><?= $row['name'] ?></h4>
                                                    <span class="mb-1 d-block"> <i class="fa fa-envelope"></i> <?= $row['email'] ?></span>
                                                    <span class="mb-3 d-block"> <i class="fa fa-phone-alt"></i> <?= $row['number'] ?></span>
                                                    <?php
                                                    if (!empty($row['city']) && !empty($row['country'])) {
                                                    ?>
                                                        <span class="d-block"><i class="fas fa-map-marker-alt me-2"></i><?= $row['city']  ?> <?= (!empty($row['country']) ? ',' : '') ?> <?= $row['country'] ?> </span>
                                                    <?php
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown align-self-start">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <!-- <a class="dropdown-item" href="#">Copy</a> -->

                                                        <a class="dropdown-item" href="<?= base_url('Admin_Dashboard/view_candidate_profile/' . $row['candidate_id'] . '/' . url_title($row['name'])) ?>"><i class="fa fa-user"></i> &nbsp; View Profile</a>
                                                        <a class="dropdown-item text-danger delete" href="<?= base_url('Admin_Dashboard/delete_candidate') ?>?BdID=<?= $row['candidate_id'] ?>"><i class="fa fa-trash"></i> &nbsp; Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="job-available">

                                                <?php
                                                if (!empty($row['resume'])) {
                                                ?>
                                                    <a href="#" class="btn admin_button btn-rounded"> View Resume</a>
                                                <?php
                                                }
                                                ?>
                                            </div> -->
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                    <?php }
                    } ?>
                    <!-- end col-->
                    <!-- end col -->
                </div><!-- end row-->
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

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        $("a.delete").click(function(e) {
            if (!confirm('Are you sure?')) {
                e.preventDefault();
                return false;
            }
            return true;
        });
    });
</script>

</body>



</html>