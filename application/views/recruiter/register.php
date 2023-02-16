<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Recruiter-Register| Hirbox</title>

    <!-- App favicon -->

    <?php include 'includes/headerlink.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>



</head>

<body data-topbar="dark">


    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100 login-f">
                            <div class="d-flex flex-column">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="<?= base_url('recruiter-dashboard') ?>" class="d-block auth-logo">
                                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Hirbox">
                                    </a>
                                </div>
                                <div class="auth-content my-auto container">
                                    <div class="text-center">
                                        <h5 class="mb-0">Recruiter? Register here</h5>
                                    </div>
                                    <form class="needs-validation mt-4 pt-2 row" novalidate action="" method="POST">
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Recruiter Name" name="recruiter_name" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Recruiter Name
                                            </div>
                                            <label for="input-number">Full Name</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Company Name" name="company_name" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Company Name
                                            </div>
                                            <label for="input-number">Company Name</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                        </div>





                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control" name="country_code" data-trigger id="choices-single-default" placeholder="This is a search placeholder">

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

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" placeholder="Enter Number" name="number" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Number
                                            </div>
                                            <label for="input-number">Phone no</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="email" class="form-control" id="input-email" placeholder="Enter Email" name="email" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>

                                        <!-- <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="password" class="form-control" id="input-password" placeholder="Enter Password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div> -->

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control select2 form-select regis-select recruiter_select" name="company_size" required>
                                                <option>Select Company Size</option>
                                                <option value="1-5">1-5</option>
                                                <option value="5-20">5-20</option>
                                                <option value="20-100">20-100</option>
                                            </select>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="text" class="form-control" id="input-username" name="designation" placeholder="Designation" value="" required>
                                            <div class="invalid-feedback">
                                                Designation
                                            </div>
                                            <label for="input-number">Designation</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="briefcase"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <select class="form-control select2 form-select regis-select recruiter_select" name="country" required>
                                                <option>Select Country</option>
                                                <option value="India">India</option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                            </select>
                                            <div class="form-floating-icon">
                                                <i data-feather="globe"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control select2 form-select regis-select recruiter_select" name="state" required>
                                                <option>Select State</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Madhaya Pradesh">Madhaya Pradesh</option>
                                                <option value="Delhi">Delhi</option>
                                            </select>
                                            <div class="form-floating-icon">
                                                <i data-feather="trello"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <select class="form-control select2 form-select regis-select recruiter_select" name="city" required>
                                                <option>Select City</option>
                                                <option value="Bhopal">Bhopal</option>
                                                <option value="Indore">Indore</option>
                                                <option value="Sagar">Sagar</option>
                                            </select>
                                            <div class="form-floating-icon">
                                                <i data-feather="trello"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating-custom col-md-12 mb-1">
                                            <label for="input-password"><b>Firm Type :</b></label>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" name="firm_type" type="radio" id="formCheck1" value="Permanent Hiring">
                                                <label class="form-check-label" for="formCheck1">
                                                    Permanent Hiring
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" name="firm_type" type="radio" id="formCheck2" value="Contract Staffing">
                                                <label class="form-check-label" for="formCheck2">
                                                    Contract Staffing
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" name="firm_type" type="radio" id="formCheck3" value="Executive Search">
                                                <label class="form-check-label" for="formCheck3">
                                                    Executive Search
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-floating form-floating-custom mb-2 col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" name="firm_type" type="radio" id="formCheck4" value="Only Payrolling">
                                                <label class="form-check-label" for="formCheck4">
                                                    Only Payrolling
                                                </label>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <input type="text" class="form-control" name="linkedin" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Linkedin Company Profile URL
                                            </div>
                                            <label for="input-password">Linkedin Company Profile URL</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="linkedin"></i>
                                            </div>

                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 col-md-12">
                                            <select class="form-control select2 form-select regis-select" name="domain" required>
                                                <option>Domain (Choose a max of 10 Domains )</option>
                                                <option value="1">Accounting / Corporate Finance</option>
                                                <option value="2">Administrative / Generalist</option>
                                                <option value="3">Advertising / Event Management / PR</option>
                                                <option value="4">Aerospace</option>
                                                <option value="5">Agriculture / Dairy / Fishing</option>
                                                <option value="6">Architecture / Interior Design</option>
                                                <option value="7">Automotive / ancillaries</option>
                                                <option value="8">Banking / Financial Services / Insurance </option>
                                                <option value="9">BPO / KPO / ITES / CRM / Transcription</option>
                                                <option value="10">Broadcasting</option>
                                                <option value="11">Chemical / Polymer / Plastic / Rubber</option>
                                                <option value="12">E-commerce</option>
                                                <option value="13">Education</option>
                                                <option value="14">Data Entry</option>
                                            </select>
                                        </div>


                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="password" class="form-control" id="input-username" placeholder="Enter Recruiter Name" name="password" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                            <label for="input-number">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                        <div class="form-floating form-floating-custom mb-4 col-md-6">
                                            <input type="password" class="form-control" id="input-username" placeholder="Enter Company Name" name="cpassword" value="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Confirm Password
                                            </div>
                                            <label for="input-number">Confirm Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0">By sigining you agree to the <a href="#" class="text-primary">Terms of Use</a> and <a href="#" class="text-primary">Privacy Policy</a></p>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                    </form>
                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Already have an account ? <a href="<?= base_url('recruiter-login') ?>" class="fw-semibold"> Login </a> </p>
                                    </div>
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
    <?php include 'includes/footerlink.php'; ?>

</body>



</html>