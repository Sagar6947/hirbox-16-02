<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Company Profile | Hirbox</title>



    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

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
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate"></span>
                                            <h4 class="mb-3 color-red">
                                                <span>Anu Thakur</span>
                                            </h4>

                                        </div>


                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Jobs Mapped</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Jobs Accepted</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Live Positions</span>
                                            <h4 class="mb-3 color-red">
                                                <span class="counter-value" data-target="0">0</span>
                                            </h4>

                                        </div>

                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Details</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Name</label>
                                                    <input id="productname" name="recruiter_name" type="text" class="form-control" value="<?= $recruiter[0]['recruiter_name'] ?>">
                                                </div>
                                                <label class="control-label">Phone No</label>
                                                <div class="mb-3 number_code">
                                                    <select class="form-control" name="country_code" data-trigger id="choices-single-default">
                                                        <?php
                                                        if (!empty($country_code)) {
                                                            foreach ($country_code as $crow) {
                                                        ?>
                                                                <option value="<?= $crow['phonecode'] ?>" <?= ($crow) ?>><?= $crow['name'] ?> &nbsp; (+<?= $crow['phonecode'] ?>) </option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <input id="price" name="number" type="text" class="form-control mobile_number" placeholder="" value="<?= $recruiter[0]['number'] ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Company Name</label>
                                                    <input id="price" type="text" class="form-control" name="company_name" placeholder="" value="<?= $recruiter[0]['company_name'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productdesc">Email Id</label>
                                                    <input id="price" type="text" class="form-control" placeholder="" value="<?= $recruiter[0]['email'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="title">Country of Residence</label>
                                                    <input id="productname" name="country" type="text" class="form-control" placeholder="" value="<?= $recruiter[0]['country'] ?>">
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">State</label>
                                                    <input id="productname" name="state" type="text" class="form-control" placeholder="" value="<?= $recruiter[0]['state'] ?>">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">City</label>
                                                <input name="city" type="text" class="form-control" placeholder="" value="<?= $recruiter[0]['city'] ?>">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Domain (Choose the one that Fall in Your area of Expertise)</label>
                                                <select class="form-control" name="country_code" data-trigger id="choices-single-default" placeholder="This is a search placeholder" required>
                                                    <option selected disabled>Select Domain</option>

                                                    <?php
                                                    if (!empty($industry)) {
                                                        foreach ($industry as $row) {
                                                    ?>

                                                            <option value=""><?= $row['category'] ?></option>


                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>

                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Country (First Preference)</label>
                                                <input name="first_country_preference" type="text" class="form-control" placeholder="" value="">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Country (Second Preference)</label>
                                                <input name="second_country_preference" type="text" class="form-control" placeholder="" value="">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">No of People</label>
                                                <select class="form-control select2 form-select">
                                                    <option>Size of Organization</option>
                                                    <option value="">Self Employed</option>
                                                    <option value="">2-10 Employees</option>
                                                    <option value="">11-50 Employees</option>
                                                    <option value="">51-200 Employees</option>
                                                    <option value="">201-500 Employees</option>
                                                    <option value="">501 + Employees</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Designation</label>
                                                <input name="designation" type="text" class="form-control" placeholder="" value="">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="control-label">Firm Type</label>
                                                <div class="checkbox_container">
                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox" name="firmtype[]" value="Permanent Hiring" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Permanent Hiring
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox" name="firmtype[]" value="Contract Staffing" id="formCheck2" checked>
                                                        <label class="form-check-label" for="formCheck2">
                                                            Contract Staffing
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox" name="firmtype[]" value="Executive Search" id="formCheck2" checked>
                                                        <label class="form-check-label" for="formCheck2">
                                                            Executive Search
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox" name="firmtype[]" value="Only Payrolling" id="formCheck2" checked>
                                                        <label class="form-check-label" for="formCheck2">
                                                            Only Payrolling
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                            <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->

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

</body>

</html>