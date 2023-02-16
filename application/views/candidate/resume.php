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
                                    <a href="#Culture" class="nav-link disable" data-toggle="tab">
                                        <div class="step-icon cgrey" data-bs-toggle="tooltip" data-bs-placement="top" title="Culture">
                                            Culture
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Resume" class="nav-link active" data-toggle="tab">
                                        <div class="step-icon " data-bs-toggle="tooltip" data-bs-placement="top" title="Resume/CV">
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

                                        <div class="tab-pane active" id="Resume">
                                            <div class="text-center mb-4">
                                                <h1>Upload a recent resume or CV</h1>
                                                <p class="card-title-desc"> below to upload your resume as a .pdf, .doc, .docx, .rtf, .wp or .txt file Upload Resume</p>
                                            </div>
                                            <form method="post" enctype="multipart/form-data">

                                                <div class="col-lg-12">
                                                    <div class="mb-3">

                                                        <input type="file" class="form-control" name="resume" accept=".pdf, .doc, .docx, .rtf , .wp , .txt">

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg">Save & Continue</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 text-center"> <a href="<?= base_url() ?>candidate/related_job" class="btn btn-outline-success btn-lg">Skip This Part</a></div>

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