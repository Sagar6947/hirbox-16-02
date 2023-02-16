<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url('company') ?>" class="logo logo-dark">
                    <span class="logo-sm">
                    <img src="<?= base_url() ?>assets/images/hb-fav.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" width="150px">
                    </span>
                </a>

                <a href="<?= base_url('company') ?>" class="logo logo-light">
                    <span class="logo-sm">
                    <img src="<?= base_url() ?>assets/images/hb-fav.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" width="150px">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>


        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <?php
                    $get_img = getRowById('company_registration', 'company_id', sessionId('login_company_id')); {
                        if ($get_img[0]['logo_image'] != '') {
                    ?>
                            <img class="rounded-circle header-profile-user" src="<?= base_url() ?>uploads/company/<?= $get_img[0]['logo_image'] ?>" alt="Header Avatar">
                        <?php
                        } else {
                        ?>
                            <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/images/users/company.png" alt="Header Avatar">
                    <?php
                        }
                    }
                    ?>
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= sessionId('login_company_name') ?>    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?= base_url('company-profile') ?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>Company Profile</a>
                    <!-- <a class="dropdown-item" href="<?= base_url() ?>auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('company-logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?= base_url('company/dashboard') ?>">
                        <i data-feather="home"></i>

                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('company-profile') ?>">
                        <i data-feather="globe"></i>

                        <span>Company Profile</span>
                    </a>
                </li>

                <!--<li>-->
                <!--    <a href="<?= base_url('company/add-team-member') ?>">-->
                <!--        <i data-feather="layers"></i>-->

                <!--        <span>Add Team Members</span>-->
                <!--    </a>-->
                <!--</li>-->

                <li>
                    <a href="<?= base_url('company/manage-team-member') ?>">
                        <i data-feather="users"></i>

                        <span>Manage Team Members</span>
                    </a>
                </li>
                
                

                <li>
                    <a href="<?= base_url('post-a-job') ?>">
                        <i data-feather="briefcase"></i>

                        <span>Post a Job</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('company/view-post-job') ?>">
                        <i data-feather="file-text"></i>

                        <span>View Jobs</span>
                    </a>
                </li>


                <li>
                    <a href="<?= base_url('company/apply-candidate-report') ?>">
                        <i data-feather="user-plus"></i>

                        <span>Applied Candidates</span>
                    </a>
                </li>


<!-- 
                <li class="disabled">
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication">Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('company/job-posting-report') ?>">Job Posting Report</a></li>
                        <li><a href="<?= base_url('company/apply-candidate-report') ?>">Candidate Success & Status Report</a></li>

                    </ul>
                </li> -->



            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>