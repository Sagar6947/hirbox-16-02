<?php include 'includes/header-link.php' ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5eG5oC5cOUcQ3qPkjPE7vlmnrTOmI05A&sensor=false&libraries=places"></script>
<!-- Begin page -->
<div id="layout-wrapper">
    <?php include 'includes/normal-header.php' ?>
    <div class="">

        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                            <h4 class="mb-sm-0 font-size-18">Welcome <?= sessionId('cname'); ?> </h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h3 class="text-center">Complete your Hirbox profile</h3>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">

                        <div id="basic-pills-wizard" class="twitter-bs-wizard ">
                            <ul class="twitter-bs-wizard-nav" style="box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;     border-radius: 30px; background: white;">
                                <li class="nav-item">
                                    <a href="#profile" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile Details">
                                            Profile
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Preferences" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Preferences">
                                            Preferences
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#Culture" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Culture">
                                            Culture
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Resume" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Resume/CV">
                                            Resume/CV
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Done" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Done">
                                            <i class="dripicons-checkmark"></i> Done
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="card mt-5">

                                <div class="card-body">
                                    <div class="tab-content twitter-bs-wizard-tab-content ">
                                        <div class="tab-pane" id="profile">
                                            <div class="text-center mb-4">
                                                <h1>Create your profile</h1>
                                                <p class="card-title-desc">Apply privately to thousands of tech companies & startups with one profile.</p>
                                            </div>
                                            <form method="post">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-3">
                                                            <label for="1" class="form-label">Profile Summary</label>
                                                            <textarea class="form-control" name="profile_summary" rows="5"><?= $candidate_detail[0]['profile_summary'] ?> </textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">Date of Birth</label>
                                                                <input type="date" name="dob" class="form-control txtPlaces">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">Profile Image</label>
                                                                <input type="file" class="form-control" name="image" accept=".png, .jpg, .jpeg">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label for="basicpill-firstname-input" class="form-label">
                                                                Where are you based?</label>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">*
                                                                    Country</label>
                                                                <input type="text" name="country" class="form-control txtPlaces" id="" value="<?= $candidate_detail[0]['address'] ?>">
                                                                <datalist id="browsers"></datalist>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="basicpill-firstname-input" class="form-label" style="visibility: hidden;">
                                                                Where are you based?</label>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">*
                                                                    City</label>
                                                                <input type="text" name="city" class="form-control txtPlaces" id="" value="<?= $candidate_detail[0]['address'] ?>">
                                                                <datalist id="browsers"></datalist>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">


                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">* What is your current role?</label>
                                                                <select class="form-control current_role" name="designation" data-trigger id="choices-single-default" placeholder="This is a search placeholder" required>
                                                                    <option value="">Select</option>
                                                                    <?php
                                                                    if ($role) {
                                                                        foreach ($role as $row) {
                                                                    ?>
                                                                            <option value="<?= $row['rid'] ?>"><?= $row['role'] ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6" id="otherRole">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">*
                                                                    Mention you current role</label>
                                                                <input type="text" name="other_role" class="form-control txtPlaces" id="" value="<?= $candidate_detail[0]['other_role'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="basicpill-lastname-input" class="form-label">
                                                                Experience </label>
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">*
                                                                    Year </label>
                                                                <select class="form-control" name="exp_year" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
                                                                    <option value="">Select</option>
                                                                    <?php
                                                                    for ($i = 1; $i <= 9; $i++) {

                                                                    ?>
                                                                        <option value="<?= $i ?>">
                                                                            <?= $i ?> Year<?= (($i == 1) ? '' : 's') ?>
                                                                        </option>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                    <option value="10">10+ Years</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="basicpill-lastname-input" class="form-label" style="visibility: hidden;">
                                                                Experience </label>
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">*
                                                                    Month </label>
                                                                <select class="form-control" name="exp_months" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
                                                                    <option value="">Select</option>
                                                                    <?php
                                                                    for ($i = 1; $i <= 11; $i++) {

                                                                    ?>
                                                                        <option value="<?= $i ?>">
                                                                            <?= $i ?> Month<?= (($i == 1) ? '' : 's') ?>
                                                                        </option>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg"> Create Your Profile</button>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


<div class="rightbar-overlay"></div>
<?php include 'includes/footer-link.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#otherRole').hide();
        $('.current_role').change(function() {
            var v = $(this).val();
            if (v == "14") {
                $('#otherRole').show();
            } else {
                $('#otherRole').hide();
            }
        })
    })
</script>

</body>

</html>