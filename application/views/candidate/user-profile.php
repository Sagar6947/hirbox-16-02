<?php include 'includes/header-link.php' ?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/header.php' ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Edit Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="title">Name</label>
                                                <input id="productname" name="name" type="text" class="form-control" placeholder="User Name" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="mb-3">
                                                <label for="title">Email id</label>
                                                <input id="productname" name="email" type="text" class="form-control" placeholder="Person First Name" value="">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Contact</label>
                                                <input id="price" name="number" type="tel" maxlength="10" class="form-control" placeholder="Employer Contact Number" value="">
                                            </div>

                                            <div class="mb-3 col-md-6">

                                                <label class="control-label">Designation</label>
                                                <input id="price" name="designation" type="text" class="form-control" placeholder="Designation" value="">
                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Industry</label>
                                                <select class="form-control select2 form-select" name="industry">
                                                    <option>Select Industry</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Fashion">Fashion</option>
                                                </select>
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Uplode Resume</label>

                                                <input type="file" name="logo_image_temp" class="form-control" placeholder="logo" accept="image/x-png,image/jpg,image/jpeg">
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Profile Summery</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <textarea name="about_candidate" id="editor"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <h4 class="card-title">Location Details</h4>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 mt-2">
                                                    <label class="control-label">Address</label>
                                                    <input name="address" type="text" class="form-control" placeholder="Address" value="">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Zip Code</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" name="zipcode" placeholder="Zip Code" value="">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">City</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="City" name="city" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">State</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="State" name="state" value="">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Country</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Country" name="country" value="">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-header">
                                            <h4 class="card-title">Links to Social Media</h4>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Face Book Profile Link</div>
                                                        <input type="text" class="form-control" name="facebook" placeholder="Profile Link" value="">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Linkedin Profile Link</div>
                                                        <input type="text" class="form-control" name="linkedin" placeholder="Profile Link" value="">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Twitter Profile Link</div>
                                                        <input type="text" class="form-control" name="twitter" placeholder="Profile Link" value="">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Google+ Profile Link</div>
                                                        <input type="text" class="form-control" name="googleplus" placeholder="Profile Link" value="">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>



                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>

                                        </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer-link.php'; ?>


<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
</body>

</html>