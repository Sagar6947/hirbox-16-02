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
                                    <a href="#Preferences" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Preferences">
                                            Preferences
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#Culture" class="nav-link active" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Culture">
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
                                        <div class="tab-pane active" id="Culture">
                                            <div class="text-center mb-4">
                                                <h4 class="mb-sm-0 font-size-18"></h4>
                                                <h1>Find your culture fit</h1>
                                                <p class="card-title-desc">Tell us about your interests and preferences and we'll find you the perfect startup jobs.</p>
                                            </div>
                                            <form method="post">

                                                <div class="col-lg-7">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input" class="form-label"> Which technologies are you most interested in working with?</label>
                                                        <select class="form-control" name="technologies_used[]" data-trigger id="choices-multiple-remove-button" placeholder="This is a search placeholder" multiple>
                                                            <option value="">Select</option>
                                                            <?php
                                                            if ($tech) {
                                                                foreach ($tech as $techno) {
                                                            ?>
                                                                    <option value="<?= $techno['tid'] ?>"><?= $techno['name'] ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>




                                                <!-- 
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input" class="form-label">What environment do you work better in?</label>
                                                        <br>
                                                        <input type="radio" id="html" name="work_environment" value="Clear role and set of responsibilities. Consistent feedback from management.">
                                                        <label class="f-14" for="html">Clear role and set of responsibilities. Consistent feedback from management.</label> <br>
                                                        <input type="radio" id="css" name="work_environment" value="Employees wear a lot of hats. Assignments often require employees to' figure it out' on their own.">
                                                        <label class="f-14" for="css">Employees wear a lot of hats. Assignments often require employees to "figure it out" on their own.</label><br>
                                                    </div>
                                                </div> -->


                                                <div class="col-lg-12">

                                                    <div class="mb-3">

                                                        <label for="basicpill-phoneno-input" class="form-label">What's
                                                            most important to you in your next job? </label>
                                                        <br>
                                                        <div>


                                                            <div class="list_items_wrapper">


                                                                <div class="list_items">


                                                                    <input type="radio" id="html" name="important_next_job" value="Having a say in what I work on and how I work">


                                                                    <label for="html">Having a say in what I work on and how I
                                                                        work</label>


                                                                </div>

                                                                <div class="list_items">

                                                                    <input type="radio" id="css" name="important_next_job" value="Opportunities to progress within the company">
                                                                    <label for="css">Opportunities to progress within the
                                                                        company</label>

                                                                </div>


                                                                <div class="list_items">

                                                                    <input type="radio" id="css" name="important_next_job" value="Team members I can learn from">
                                                                    <label for="css">Team members I can learn from</label>

                                                                </div>


                                                                <div class="list_items">

                                                                    <input type="radio" id="css" name="important_next_job" value="A company with a good growth trajectory">
                                                                    <label for="css">A company with a good growth trajectory</label>

                                                                </div>

                                                                <div class="list_items">

                                                                    <input type="radio" id="css" name="important_next_job" value="Having a say in the company's and/or my team's direction">
                                                                    <label for="css">Having a say in the company's and/or my team's direction</label>
                                                                </div>

                                                                <div class="list_items">
                                                                    <input type="radio" id="css" name="important_next_job" value="Mentorship opportunities">
                                                                    <label for="css">Mentorship opportunities</label>
                                                                </div>


                                                                <div class="list_items">
                                                                    <input type="radio" id="css" name="important_next_job" value="Learn new things and develop my skills">
                                                                    <label for="css">Learn new things and develop my skills</label>
                                                                </div>

                                                                <div class="list_items">

                                                                    <input type="radio" id="css" name="important_next_job" value="Challenging problems to work on">
                                                                    <label for="css">Challenging problems to work on</label>
                                                                </div>

                                                                <div class="list_items">
                                                                    <input type="radio" id="css" name="important_next_job" value="A diverse team">
                                                                    <label for="css">A diverse team</label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input" class="form-label">How important is it that your next job has a flexible remote work policy?</label>
                                                        <br>
                                                        <input type="radio" id="html" name="flexible_remote_work" value="Very important">
                                                        <label class="f-14" for="html">Very important</label> <br>
                                                        <input type="radio" id="css" name="flexible_remote_work" value="Important">
                                                        <label class="f-14" for="css">Important</label><br>
                                                        <input type="radio" id="css" name="flexible_remote_work" value="Not important">
                                                        <label class="f-14" for="css">Not important</label>
                                                    </div>
                                                </div>


                                                <button type="submit" class="btn btn-primary btn-lg">Save & Continue</button>
                                            </form>
                                            <p class="text-success">
                                                <br>
                                                <b>You're almost done! </b> Complete profile and start searching for your dream job.
                                            </p>


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
                    var places = new google.maps.places.Autocomplete(document.querySelectorAll('.txtselector .txtPlaces'));
                    google.maps.event.addListener(places, 'place_changed', function() {
                        var place = places.getPlace();
                        var address = place.formatted_address;
                        var latitude = place.geometry.location.lat();
                        var longitude = place.geometry.location.lng();

                    });
                });
            </script>