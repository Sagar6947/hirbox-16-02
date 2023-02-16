<?php include 'includes/header-link.php' ?>
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">

            <!-- end col -->



            <div class="col-xxl-5 col-lg-5 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100 p-3">
                            <div class="text-center">
                                <a href="<?= base_url() ?>" class="d-block auth-logo">
                                    <img src="<?= base_url() ?>assets/images/logo.png" alt="logo">
                                </a>
                            </div>
                            <div class="auth-content">
                                <div class="text-center">
                                    <h5 class="mb-0">Welcome Back !</h5>
                                    <p class="text-muted mt-2">Sign in to continue to Hirbox.</p>
                                </div>
                                <form class="mt-4 pt-2" method="post">
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control" name="name" id="input-username" placeholder="Enter User Name">
                                        <label for="input-username">Name</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="email" class="form-control" name="email" id="input-email" placeholder="Enter Email" required>

                                        <label for="input-email">Email</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>

                                    <div class="country_code_num_wrap">

                                        <div class="form-floating form-floating-custom mb-4">
                                            <select class="form-control" name="country_code" required data-trigger id="choices-single-default" placeholder="This is a search placeholder">

                                                <option selected disabled>Select country code</option>
                                                <?php
                                                if (!empty($country_code)) {
                                                    foreach ($country_code as $crow) {
                                                ?>
                                                        <option value="<?= $crow['id'] ?>"><?= $crow['name'] ?> &nbsp; (+<?= $crow['phonecode'] ?>) </option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>


                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="tel" class="form-control" name="number" id="input-email" placeholder="Enter Email" required>

                                            <label for="input-email">Number</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
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
                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                            </form>
                            <div class=" text-center">
                                <p class="text-muted mb-0">Already have an account ? <a href="<?= base_url('candidate/login') ?>" class="text-primary fw-semibold"> Log In </a> </p>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Hirbox . All Right Reserved

                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xxl-7 col-lg-7 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex" style="background-image: url(<?= base_url() ?>assets/candidate/images/bg-3.jpg);">
                    <div class="bg-overlay"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-end">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators auth-carousel carousel-indicators-rounded justify-content-center mb-0">

                                    </div>
                                    <!-- end carouselIndicators -->
                                    <!-- <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="testi-contain text-center text-white">
                                                <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                <h4 class="mt-4 fw-medium lh-base text-white">“Your talent determines what you can do. Your motivation determines how much you’re willing to do. Your attitude determines how well you do it.”
                                                </h4>
                                                <div class="mt-4 pt-1 pb-5 mb-5">
                                                    <h5 class="font-size-16 text-white">Lou Holtz
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>


                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end auth full page content -->
        </div>
    </div>
</div>
</div>

<?php include 'includes/footer-link.php' ?>

<script>
    $('input').attr('autocomplete', 'off');

    $(function() {
        $("input[name='number']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>