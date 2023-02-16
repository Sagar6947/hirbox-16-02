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

                            <div class="card mt-5">

                                <div class="card-body">
                                    <div class="tab-content twitter-bs-wizard-tab-content ">

                                        <div class="tab-pane active" id="Resume">
                                            <div class="text-center mb-4">
                                                <h1>Upload a recent resume or CV</h1>
                                                <p class="card-title-desc"> below to upload your resume as a .pdf, .doc, .docx, .rtf, .wp or .txt file Upload Resume</p>
                                            </div>
                                            <form method="post" action="<?= base_url('Candidate/resume') ?>" enctype="multipart/form-data">

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