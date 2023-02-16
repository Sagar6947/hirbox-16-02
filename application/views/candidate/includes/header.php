<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url() ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/hb-fav.png" alt="" width="150px">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/candidate/images/logo.png" alt="" width="150px">
                    </span>
                </a>

                <a href="<?= base_url() ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/images/hb-fav.png" alt="" width="45px">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/candidate/images/logo.png" alt="" width="150px">
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
                    <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/candidate/images/user.png" alt="Header Avatar">

                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= sessionid('cname') ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?= base_url('Candidate/view_profile') ?>"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>My Profile</a>
                    <!-- <a class="dropdown-item" href="<?= base_url() ?>auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('Candidate/logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
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
            <ul class="metismenu list-unstyled  mt-5" id="side-menu">


                <li>
                    <a href="<?= base_url('candidate/dashboard') ?>">
                        <i data-feather="home"></i>

                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('candidate/index') ?>">
                        <i data-feather="user-plus"></i>
                        <span>User Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('candidate/view_jobs') ?>">
                        <i data-feather="book-open"></i>
                        <span>View Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('candidate/favorite_jobs') ?>">
                        <i data-feather="bell"></i>
                        <span>Favorite Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('candidate/related_jobs') ?>">
                        <i data-feather="codesandbox"></i>
                        <span>Related Jobs</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('candidate/apply_jobs') ?>">
                        <i data-feather="file"></i>
                        <span>Applied Jobs</span>
                    </a>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>