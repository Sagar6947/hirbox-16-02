<?php include 'includes/header-link.php' ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5eG5oC5cOUcQ3qPkjPE7vlmnrTOmI05A&sensor=false&libraries=places"></script>
<!-- Begin page -->
<div id="layout-wrapper">
    <?php include 'includes/normal-header.php' ?>
    <div class="">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">

                        <div id="basic-pills-wizard" class="twitter-bs-wizard ">
                            <ul class="twitter-bs-wizard-nav" style="box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;     border-radius: 30px; background: white;">
                                <li class="nav-item">
                                    <a href="#profile" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile Details">
                                            Profile
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Preferences" class="nav-link " data-toggle="tab">
                                        <div class="step-icon " data-bs-toggle="tooltip" data-bs-placement="top" title="Preferences">
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



                                        <div class="tab-pane active" id="Preferences">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h1>Set your job search preferences</h1>
                                                    <p class="card-title-desc">Your answers determine which jobs we recommend for you and which startups see your profile.</p>
                                                </div>
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="radio" id="1" name="job_search_position" value="Ready to interview">
                                                                <label for="1" class="">Ready to interview</label>
                                                                <div class="border-left">

                                                                    <div>You’re actively looking for new work and ready to interview. Your job profile will be visible by startups.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="radio" id="2" name="job_search_position" value="Open to offers">
                                                                <label for="2">Open to offers</label>
                                                                <div class="border-left">

                                                                    <div>You’re not looking but open to hear about new opportunities. Your job profile will be visible to startups.</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <input type="radio" id="3" name="job_search_position" value="Closed to offers">
                                                                <label for="3">Closed to offers</label>
                                                                <div class="border-left">

                                                                    <div>You’re not looking and don’t want to hear about new opportunities. Your job profile will be hidden to startups.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12 mt-3">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input" class="form-label">* What type of job are you interested in?
                                                            </label>
                                                            <p>Choose just one for now. You can change this or add more types later</p>
                                                            <input type="radio" id="1" name="job_interest" value="Full-time Employee" checked>
                                                            <label for="1">Full-time Employee</label>
                                                            <input type="radio" id="1" name="job_interest" value="Part-time Employee" checked>
                                                            <label for="1">Part-time Employee</label>
                                                            <input type="radio" id="2" name="job_interest" value="Contractor">
                                                            <label for="2">Contractor</label>

                                                            <input type="radio" id="3" name="job_interest" value="Intern">
                                                            <label for="3">Intern</label>

                                                            <input type="radio" id="1" name="job_interest" value="Co-founder">
                                                            <label for="1">Co-founder</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="basicpill-cstno-input" class="form-label">What
                                                            is your desired salary?</label>
                                                        <p>This information will never be shown on your public
                                                            profile</p>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">

                                                                <select class="form-control currency" name="salary_currency" data-trigger id="choices-single-default" placeholder="This is a search placeholder" required>
                                                                    <option value="">Select</option>
                                                                    <?php
                                                                    if ($currency) {
                                                                        foreach ($currency as $cur) {
                                                                    ?>
                                                                            <option value="<?= $cur['c_id'] ?>"><?= $cur['name'] ?>(<?= $cur['code'] ?>)</option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>

                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="mb-3 position-relative">

                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="currencyid"></span>
                                                                    <input type="text" class="form-control" name="salary" placeholder="Salary" aria-describedby="validationTooltipUsernamePrepend" required>
                                                                    <div class="invalid-tooltip">
                                                                        Please Enter desired salary
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>



                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">*
                                                                    Preferred Role?</label>
                                                                <p>
                                                                    Tip: You can select more than one
                                                                </p>
                                                                <select class="form-control" name="role_looking_for[]" data-trigger id="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
                                                                    <option value="">Select</option>

                                                                    <?php
                                                                    if ($role) {
                                                                        foreach ($role as $row) {
                                                                            $optionss = json_decode($candidate_detail[0]['role_looking_for'], true);

                                                                    ?>
                                                                            <option value="<?= $row['rid'] ?>">
                                                                                <?= $row['role'] ?>
                                                                            </option>
                                                                    <?php

                                                                        }
                                                                    }
                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">*
                                                                    Preferred Industry?</label>
                                                                <p>
                                                                    Tip: You can select more than one
                                                                </p>
                                                                <select class="form-control" name="industries[]" data-trigger id="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
                                                                    <option value="">Select</option>

                                                                    <?php
                                                                    if ($industries) {
                                                                        foreach ($industries as $irow) {

                                                                    ?>
                                                                            <option value="<?= $irow['cate_id'] ?>">
                                                                                <?= $irow['category'] ?>
                                                                            </option>
                                                                    <?php

                                                                        }
                                                                    }
                                                                    ?>


                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input" class="form-label">* Preferred Location</label>

                                                            <input type="text" name="work_location" class="form-control" id="txtPlaces" required>
                                                            <datalist id="browsers"></datalist>
                                                        </div>
                                                    </div>



                                                    <div class="row">


                                                        <div class="col-lg-8 us">
                                                            <h3>* Other countries work authorization 🇺🇸</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>

                                                                        <th scope="col"></th>
                                                                        <th scope="col">Yes</th>
                                                                        <th scope="col">No</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>Are you legally authorized to work in the other countries?</td>
                                                                        <td><input type="radio" id="1" name="authorized_us" value="Yes"></td>
                                                                        <td><input type="radio" id="2" name="authorized_us" value="No" checked></td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td>Do you or will you require sponsorship for a visa (e.g. H‑1B)?</td>
                                                                        <td><input type="radio" id="1" name="sponsorship_us" value="Yes"></td>
                                                                        <td> <input type="radio" id="2" name="sponsorship_us" value="No" checked></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>


                                                    <div class="row ">


                                                        <div class="col-lg-12">
                                                            <h3>Would you like to work at companies of these sizes?</h3>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>

                                                                        <th scope="col"></th>
                                                                        <th scope="col">Ideal</th>
                                                                        <th scope="col">Yes</th>
                                                                        <th scope="col">No</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>Seed (1 - 10 employees)</td>
                                                                        <td><input type="radio" id="0" name="seed" value="Ideal"></td>
                                                                        <td><input type="radio" id="1" name="seed" value="Yes"></td>
                                                                        <td><input type="radio" id="2" name="seed" value="No"></td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td>Early (11 - 50 employees)</td>
                                                                        <td><input type="radio" id="3" name="early" value="Ideal"></td>
                                                                        <td><input type="radio" id="4" name="early" value="Yes"></td>
                                                                        <td><input type="radio" id="5" name="early" value="No"></td>
                                                                    </tr>

                                                                    <tr>

                                                                        <td>Mid-size (51 - 200 employees)</td>
                                                                        <td><input type="radio" id="6" name="mid_size" value="Ideal"></td>
                                                                        <td><input type="radio" id="7" name="mid_size" value="Yes"></td>
                                                                        <td><input type="radio" id="8" name="mid_size" value="No"></td>
                                                                    </tr>

                                                                    <tr>

                                                                        <td>Large (201 - 500 employees)</td>
                                                                        <td><input type="radio" id="9" name="large" value="Ideal"></td>
                                                                        <td><input type="radio" id="10" name="large" value="Yes"></td>
                                                                        <td><input type="radio" id="11" name="large" value="No"></td>
                                                                    </tr>

                                                                    <tr>

                                                                        <td>Very Large (501 - 1000 employees)</td>
                                                                        <td><input type="radio" id="12" name="very_large" value="Ideal"></td>
                                                                        <td><input type="radio" id="13" name="very_large" value="Yes"></td>
                                                                        <td><input type="radio" id="14" name="very_large" value="No"></td>
                                                                    </tr>


                                                                    <tr>

                                                                        <td>Massive (1001+ employees)</td>
                                                                        <td><input type="radio" id="15" name="massive" value="Ideal"></td>
                                                                        <td><input type="radio" id="16" name="massive" value="Yes"></td>
                                                                        <td><input type="radio" id="17" name="massive" value="No"></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-lg">Save & Continue</button>
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

</body>

</html>
<script>
    google.maps.event.addDomListener(window, 'load', function() {
        var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
        google.maps.event.addListener(places, 'place_changed', function() {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();

        });
    });
</script>