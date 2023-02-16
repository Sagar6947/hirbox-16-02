<!-- App favicon -->

<?php include 'includes/headerlink.php'; ?>



<!-- <body data-layout="horizontal"> -->
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-center">
            <div class="col-xxl-6 col-lg-6 col-md-12">
                <div class="auth-full-page-content d-flex p-sm-5 p-4 min-h">
                    <div class="w-100 login-f">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="<?= base_url('company') ?>" class="d-block auth-logo">
                                    <img src="<?= base_url() ?>assets/images/logo.png" alt="hirbox">
                                </a>
                            </div>
                            <div class="auth-content my-auto">

                                <div class="text-center">
                                    <h5 class="mb-0">Company? Login here</h5>

                                </div>

                                <?php
                                if ($this->session->has_userdata('msg')) {
                                    echo $this->session->userdata('msg');
                                    $this->session->unset_userdata('msg');
                                }
                                ?>
                                <?php
                                echo $this->session->userdata('loginError');
                                $this->session->unset_userdata('loginError');
                                ?>

                                <form class="mt-4 pt-2" method="POST">
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control" name="email" id="input-username" placeholder="Enter Email">
                                        <label for="input-username">Email </label>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                        <input type="password" name="password" class="form-control pe-5" id="password-input" placeholder="Enter Password">

                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="input-password">Password</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>

                                    <!-- <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check font-size-15">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label font-size-13" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                        </div> -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>



                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Don't have an account ? <a href="<?= base_url('company/register') ?>" class="fw-semibold"> Register </a> </p>
                                </div>
                            </div>
                            <!-- <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Dason . Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                </div> -->
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
<?php include 'includes/footerlink.php'; ?>

<script>
    $('input').attr('autocomplete', 'off');

    $(function() {
        $("input[name='number']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>

</body>



</html>