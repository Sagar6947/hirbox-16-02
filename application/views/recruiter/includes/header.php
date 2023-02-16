<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url('recruiter-dashboard') ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" width="150">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" > 
                    </span>
                </a>

                <a href="<?= base_url('recruiter-dashboard') ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" width="150">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="" width="150"> 
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <!--<form class="app-search d-none d-lg-block">-->
            <!--    <div class="position-relative">-->
            <!--        <input type="text" class="form-control" placeholder="Search...">-->
            <!--        <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>-->
            <!--    </div>-->
            <!--</form>-->
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
                    <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/images/users/company.png" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium profile_name"><?= sessionId('login_recruiter_name') ?></span>
                    <span class="profile_type_title">Recruiter</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?= base_url('company-details') ?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>Company Profile</a>
                    <!-- <a class="dropdown-item" href="<?= base_url() ?>auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('Recruiter/recruiter_logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu recruiter_menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu" >
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="<?= base_url('recruiter-dashboard') ?>">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('recruiter/recruiter_profile') ?>">
                        <i data-feather="layers"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('add-job') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Add Job</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('job-details') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Jobs details</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('mapped-jobs') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Search/Mapped Jobs</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('mapped-candidates') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Mapped Candidates</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('apply-candidates') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Apply Candidates</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('assign-team') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Assign Team</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('faq') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>FAQ's</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('videos') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Demo Videos</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('need-help') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Need Help</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('search-jobs') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Search Jobs</span>
                    </a>
                </li>


                

                

                

                

                <!-- <li>
                    <a href="<?= base_url('') ?>">
                        <i data-feather="layers"></i>
                        
                        <span>Post a Job</span>
                    </a>
                </li> -->

               

                
                

                

                

               

                

                
               
               

                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="layers"></i>
                        <span data-key="t-authentication">Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('job-posting-report') ?>">Job Posting Report</a></li>
                        <li><a href="<?= base_url('apply-candidate-report') ?>">Candidate Success & Status Report</a></li>

                    </ul>
                </li> -->



            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>