<?php include 'includes/headerlink.php'; ?>



<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <?php include 'includes/header.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Edit Profile</h4>

                            <?php
                            if ($this->session->has_userdata('msg')) {
                                echo $this->session->userdata('msg');
                                $this->session->unset_userdata('msg');
                            }
                            ?>

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
                                            <div class="mb-4">
                                                <label for="title">Company Name</label>
                                                <input id="productname" name="company_name" type="text" class="form-control" placeholder="Company Name" value="<?= $company[0]['company_name'] ?>" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="control-label">Size</label>
                                                <select class="form-control select2 form-select" name="size">
                                                    <option selected disabled>Select Company Size of Employees</option>
                                                    <?php foreach ($size as $s) { ?>

                                                        <option value="<?= $s['size_id'] ?>" <?= (($company[0]['size'] == $s['size_id']) ? 'selected' : '') ?>><?= $s['size_num'] ?></option>

                                                    <?php } ?>
                                                </select>
                                                <!--                                                 
                                                <div class="add_box">
                                                    <a href class="waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"> <i class="fa fa-plus"></i> Add Size</a>
                                                </div>

                                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Number of Employees</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="mb-3">
                                                                    <input type="text" class="form-control" name="size" placeholder="Enter total number of employee">
                                                                </div>
                                                                <input value="submit" class="btn btn-primary waves-effect waves-light">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>

                                            <div class="mb-3">
                                                <label for="title">Contact Person First Name</label>
                                                <input id="productname" name="first_name" type="text" class="form-control" placeholder="Person First Name" value="<?= (($company != '') ? $company['0']['first_name'] : '') ?>">
                                            </div>

                                            <label for="countrycode">Country Code</label>
                                            <div class="form-floating form-floating-custom mb-3">
                                                <select class="form-control" name="country_code" required data-trigger id="choices-single-default" placeholder="This is a search placeholder">

                                                    <option selected disabled>Select country code</option>
                                                    <?php
                                                    if (!empty($country_code)) {
                                                        foreach ($country_code as $crow) {
                                                    ?>
                                                            <option value="<?= $crow['phonecode'] ?>" <?= (($company[0]['country_code'] == $crow['id']) ? 'selected' : '') ?>><?= $crow['name'] ?> &nbsp; (+<?= $crow['phonecode'] ?>) </option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Industry</label>
                                                <div class="form-floating form-floating-custom mb-3">
                                                    <select class="form-control industry" name="industry" required data-trigger id="choices-single-default" placeholder="This is a search placeholder">

                                                        <option selected disabled>Select Indsutry</option>

                                                        <?php
                                                        if (!empty($industry)) {
                                                            foreach ($industry as $ind) {
                                                        ?>
                                                                <option value="<?= $ind['cate_id'] ?>" <?= (($company[0]['industry'] == $ind['cate_id']) ? 'selected' : '') ?>><?= $ind['category'] ?></option>

                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 align-items-center gap-3" id="other_industry">
                                                <label for="basicpill-firstname-input " class="control-label" style="min-width: max-content;">*
                                                    Mention Industry</label>
                                                <input type="text" name="other_industry" class="form-control txtPlaces is_require is_require" id="" value="<?= $company[0]['other_industry'] ?>">
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="productdesc">Website Url </label>
                                                <input id="price" name="website_url" type="text" class="form-control" placeholder="https://abc.com" value="<?= (($company != '') ? $company['0']['website_url'] : '') ?>">
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="productdesc">Email Address </label>
                                                <input id="price" name="email" type="text" class="form-control" placeholder="Email" value="<?= $company[0]['email'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Contact Person Last Name </label>
                                                <input id="price" name="last_name" type="text" class="form-control" placeholder="Last Name" value="<?= (($company != '') ? $company['0']['last_name'] : '') ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label class="control-label">Contact Number</label>
                                                <input id="price" name="number" type="tel" maxlength="10" class="form-control" placeholder="Employer Contact Number" value="<?= (($company != '') ? $company['0']['number'] : '') ?>">
                                            </div>



                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="productdesc">Email Address </label>
                                                <input id="price" name="email" type="text" class="form-control" placeholder="Email" value="<?= $company[0]['email'] ?>">
                                            </div>

                                            <div class="mb-3 col-md-6">

                                                <label class="control-label">Extension</label>
                                                <input id="price" name="extension" type="text" class="form-control" placeholder="Extension" value="<?= (($company != '') ? $company['0']['extension'] : '') ?>">
                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Logo Image (Only: JPG PNG and JPEG)</label>

                                                <input type="file" name="logo_image_temp" class="form-control" placeholder="logo" accept="image/x-png,image/jpg,image/jpeg">

                                                <input type="hidden" name="logo_image" class="form-control" placeholder="logo" value="<?= $company[0]['logo_image']  ?>">
                                                <?php
                                                if ($company[0]['logo_image'] != '') {
                                                ?>
                                                    <img src="<?= base_url() ?>uploads/company/<?= $company[0]['logo_image'] ?>" class="logo-preview" alt="company-logo" width="100px">
                                                <?php

                                                }
                                                ?>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Company Image</label>
                                                <input type="file" name="company_image_temp" class="form-control" placeholder="logo" accept="image/x-png,image/jpg,image/jpeg">

                                                <input type="hidden" name="company_image" class="form-control" placeholder="logo" value="<?= $company[0]['company_image']  ?>">
                                                <?php
                                                if ($company[0]['company_image'] != '') {
                                                ?>
                                                    <img src="<?= base_url() ?>uploads/company/<?= $company[0]['company_image'] ?>" class="logo-preview" alt="company-logo" width="100px">
                                                <?php

                                                }
                                                ?>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Job Description</label> -->
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">About Company</h4>

                                                            </div>
                                                            <div class="card-body">
                                                                <textarea name="about_company" id="editor"><?= (($company != '') ? $company['0']['about_company'] : '') ?></textarea>
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
                                                    <input name="address" type="text" class="form-control" placeholder="Address" value="<?= (($company != '') ? $company['0']['address'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Zip Code</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" name="zipcode" placeholder="Zip Code" value="<?= (($company != '') ? $company['0']['zipcode'] : '') ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Country</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Country" name="country" value="<?= (($company != '') ? $company['0']['country'] : '') ?>">
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
                                                        <div class="input-group-text linkedin_wrap"> <i class="fab fa-linkedin"></i> </div>
                                                        <input type="text" class="form-control" name="linkedin" placeholder="Profile Link" value="<?= (($company != '') ? $company['0']['linkedin'] : '') ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text website_wrap"> <i class="fas fa-globe"></i> </div>
                                                        <input type="text" class="form-control" name="linkedin" placeholder="Website Url" value="<?= (($company != '') ? $company['0']['website_url'] : '') ?>">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>





                                        <div class="d-flex flex-wrap gap-2">
                                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Update Profile">
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>

                                        </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- end main content-->






</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<?php include 'includes/footerlink.php'; ?>


<script>
    $(document).ready(function() {
        $('#other_industry').hide();
        $('.industry').change(function() {
            var industry = $(this).val();
            console.log(industry);
            if (industry == '118') {
                $('#other_industry').show();
                $(".is_require").attr("required", "true");
            } else {
                $('#other_industry').hide();
                $(".is_require").attr("required", "false");
                $('#other_indystry').removeClass('d-flex');
            }
        });
    });
</script>

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