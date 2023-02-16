<?php include 'template/headerlink.php'; ?>
    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center">
                <div class="col-xxl-6 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="<?= base_url() ?>assets/images/logo.png" alt="hirbox">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Admin Panel</h5>
                                        <p class="text-muted mt-2">Sign in to continue to Dashboard.</p>
                                    </div>
                                    <form class="mt-4 pt-2" action="<?php echo base_url() . 'Admin/adminlogin'; ?>" method="POST">
                                        <div class="form-floating form-floating-custom mb-4">
                                            <?php if ($this->session->userdata('login_error') != '') {
                                            ?>
                                                <div class="alert alert-danger">
                                                    <span><?= $this->session->userdata('login_error'); ?></span>
                                                </div>
                                            <?php

                                            }
                                            $this->session->unset_userdata('login_error');;
                                            ?>
                                            <input type="text" class="form-control" name="username" id="input-username" placeholder="Enter User Name">
                                            <label for="input-username">Username</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5" name="password" id="password-input" placeholder="Enter Password">

                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> app.hirbox.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <?php include 'template/footerlink.php'; ?>

</body>


</html>