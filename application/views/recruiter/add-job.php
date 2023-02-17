<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Post a Jobs | Hirbox</title>
    <?php include 'includes/headerlink.php'; ?>

</head>

<body data-topbar="dark">

    <div id="layout-wrapper">


        <?php include 'includes/header.php'; ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Job Information</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Add Job</li>
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
                                    <h4 class="card-title">Add a Job</h4>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Job Title</label>
                                                    <input id="productname" name="title" type="text" class="form-control" placeholder="Job Title">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Classification</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Job Classification</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="control-label">Industry</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Industry</option>
                                                        <option value="">IT</option>
                                                        <option value="">Education</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Education Level</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Education Level</option>
                                                        <option value="">High School</option>
                                                        <option value="">Graduation</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Total Nomber of Positions </label>
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Total Nomber of Positions ">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Function</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Job Function</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Exprience Level</label>

                                                    <select class="form-control select2 form-select">
                                                        <option value="WI">Fresher</option>
                                                        <option value="BE">1 Year Exprienced</option>
                                                        <option value="BA">3 Year Exprienced</option>
                                                    </select>

                                                </div>
                                                <div class="mb-3">
                                                    <label class="control-label">Job Type</label>

                                                    <select class="form-control select2 form-select">
                                                        <option>Select Job Type</option>
                                                        <option value="WI">1</option>
                                                        <option value="BE">2</option>
                                                    </select>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Compensation</label>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <select class="form-control select2 form-select">
                                                        <option>From</option>
                                                        <option value="">$1</option>
                                                        <option value="">$2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select">
                                                        <option>To</option>
                                                        <option value="">$6</option>
                                                        <option value="">$10</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <input id="price" name="price" type="text" class="form-control" placeholder="Additional Compensation Information">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row gx-3 gy-2 align-items-center mb-3">
                                            <div class="col-sm-4">
                                                <label class="visually-hidden" for="specificSizeInputName">Zip Code</label>
                                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Zip Code">
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                    <label class="form-check-label" for="autoSizingCheck2">
                                                        Anywhere in US
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="visually-hidden" for="specificSizeInputGroupUsername">City</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="City">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <!-- <label class="control-label">Compensation</label> -->
                                                    <input name="" type="text" class="form-control" placeholder="Additional Location Information">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">State</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select State</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label class="control-label">Country</label>
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Country</option>
                                                        <option value="">US</option>
                                                        <option value="">India</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Your Organization's Job Order Number</label>
                                                    <input name="" type="text" class="form-control" placeholder="Your Organization's Job Order Number">
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
                                                                <h4 class="card-title">Job Description</h4>
                                                                <!-- <p class="card-title-desc">Example of Ckeditor Classic editor</p> -->
                                                            </div>
                                                            <div class="card-body">
                                                                <div id="ckeditor-classic"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label class="control-label">Skills</label>
                                                    <input name="" type="text" class="form-control" placeholder="Enter Multiple Skills">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Exprience Required</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Year</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Year">
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">Month</div>
                                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Month">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <label class="control-label">Relocation Assistance</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Relocation Assistance</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Additional Relocation Assistance Information">
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-md-12">
                                            <label class="control-label">Visa Requirment</label>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <select class="form-control select2 form-select">
                                                        <option>Select Visa Requirment</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Additional Information">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label class="control-label">Pre Screen Questionnaire</label>
                                            <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Add a Question">
                                        </div>



                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save as Draft</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Save as Post</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Cancel</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Preview</button>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>

            <?php include 'includes/footer.php'; ?>
        </div>

    </div>

    <div class="rightbar-overlay"></div>

    <?php include 'includes/footerlink.php'; ?>

</body>

</html>