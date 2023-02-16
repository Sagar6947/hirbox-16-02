



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
                                                    <label for="title">Company Name</label>
                                                    <input id="productname" name="company_name" type="text" class="form-control" placeholder="Company Name" value="<?= $company[0]['company_name'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title">Company Person First Name</label>
                                                    <input id="productname" name="first_name" type="text" class="form-control" placeholder="Person First Name" value="<?= (($company != '') ? $company['0']['first_name'] : '') ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="control-label">Size</label>
                                                    <select class="form-control select2 form-select" name="size">
                                                                <option selected disabled>Select Company Size of Employees</option>
                                                       <?php foreach($size as $s){ ?>
                                                                
                                                                <option value="<?= $s['size_id'] ?>"><?= $s['size_num'] ?></option>

                                                        <?php } ?>
                                                    </select>
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
                                                                <form action="" method="POST">
                                                                    <div class="mb-3">
                                                                    <input type="text" class="form-control" name="size" placeholder="Enter total number of employee">
                                                                    </div>
                                                                    <input type="submit" class="btn btn-primary waves-effect waves-light">
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                            </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Contact Person Email Address </label>
                                                    <input id="price" name="email" type="text" class="form-control" placeholder="Email" value="<?= $company[0]['email'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productdesc">Contact Person Last Name </label>
                                                    <input id="price" name="last_name" type="text" class="form-control" placeholder="Last Name" value="<?= (($company != '') ? $company['0']['last_name'] : '') ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productdesc">Website Url </label>
                                                    <input id="price" name="website_url" type="text" class="form-control" placeholder="https://abc.com" value="<?= (($company != '') ? $company['0']['website_url'] : '') ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Employer Contact Number</label>
                                                    <input id="price" name="number" type="tel" maxlength="10" class="form-control" placeholder="Employer Contact Number" value="<?= (($company != '') ? $company['0']['number'] : '') ?>">
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
                                                    <label class="control-label">Industry</label>
                                                    <select class="form-control select2 form-select" name="industry">
                                                                <option>Select Industry</option>
                                                                <?php
                                                                if(!empty($industry)){
                                                                    foreach($industry as $ind){
                                                                ?>
                                                                <option value="<?= $ind['cate_id'] ?>"><?= $ind['category'] ?></option>
                                                                
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                    </select>
                                                </div>


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

                                            </div>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3">
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
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <!-- <label class="control-label">Job Description</label> -->
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">About Company</h4>
                                                                    <!-- <p class="card-title-desc">Example of Ckeditor Classic editor</p> -->
                                                                </div>
                                                                <div class="card-body">
                                                                    <textarea name="about_company" id="ckeditor-classic"><?= (($company != '') ? $company['0']['about_company'] : '') ?></textarea>
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
                                                            <div class="input-group-text">City</div>
                                                            <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="City" name="city" value="<?= (($company != '') ? $company['0']['city'] : '') ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text">State</div>
                                                            <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="State" name="state" value="<?= (($company != '') ? $company['0']['state'] : '') ?>">
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
                                                            <div class="input-group-text">Face Book Profile Link</div>
                                                            <input type="text" class="form-control" name="facebook" placeholder="Profile Link" value="<?= (($company != '') ? $company['0']['facebook'] : '') ?>">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text">Linkedin Profile Link</div>
                                                            <input type="text" class="form-control" name="linkedin" placeholder="Profile Link" value="<?= (($company != '') ? $company['0']['linkedin'] : '') ?>">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text">Twitter Profile Link</div>
                                                            <input type="text" class="form-control" name="twitter" placeholder="Profile Link" value="<?= (($company != '') ? $company['0']['twitter'] : '') ?>">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <div class="input-group">
                                                            <div class="input-group-text">Google+ Profile Link</div>
                                                            <input type="text" class="form-control" name="googleplus" placeholder="Profile Link" value="<?= (($company != '') ? $company['0']['googleplus'] : '') ?>">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>



                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
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
        $('input').attr('autocomplete', 'off');

        $(function() {
            $("input[name='number']").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>

</body>

</html>