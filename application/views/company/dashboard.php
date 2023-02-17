<?php include 'includes/headerlink.php'; ?>
<div id="layout-wrapper">
    <?php include 'includes/header.php'; ?>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Job Information</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active"><?= $tag ?> Job</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $tag ?> a Job</h4>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div class="card-body">
                                <?php
                                if ($this->session->has_userdata('msg')) {
                                    echo $this->session->userdata('msg');
                                    $this->session->unset_userdata('msg');
                                }
                                ?>
                                <form method="POST">
                                    <!--<input type="hidden" name="company_id" value="<?= sessionId('login_company_id') ?>">-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="title">Job Title <span class="text-danger">*</span></label>
                                                <input id="productname" name="job_title" type="text" class="form-control" value="<?= (($tag == 'Edit') ? $job['0']['job_title'] : '') ?>" placeholder="Job Title" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="control-label">Industry</label>
                                                <div class="form-floating form-floating-custom mb-3">
                                                    <select class="form-control" name="industry" required data-trigger id="choices-single-default" placeholder="This is a search placeholder">

                                                        <option selected disabled>Select Indsutry</option>

                                                        <?php
                                                        if (!empty($industry)) {
                                                            foreach ($industry as $ind) {
                                                        ?>
                                                                <option value="<?= $ind['cate_id'] ?>"><?= $ind['category'] ?></option>

                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Education Level</label>
                                                <select class="form-control select2 form-select" name="edu_level">
                                                    <option>Select Education Level</option>
                                                    <option value="High School" <?= (($job['0']['edu_level'] == '1') ? 'selected' : '') ?>>High School</option>
                                                    <option value="Graduation" <?= (($job['0']['edu_level'] == '2') ? 'selected' : '') ?>>Graduation</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productdesc">Total Number of Vacancies </label>
                                                <input id="price" name="num_of_position" type="text" class="form-control" value="<?= (($tag == 'Edit') ? $job['0']['num_of_position'] : '') ?>" placeholder="Total Nomber of Positions ">
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Job Type</label>

                                                <select class="form-control select2 form-select" name="job_type">
                                                    <option disabled>Select Job Type</option>
                                                    <option value="0">Full Time</option>
                                                    <option value="1">Part Time</option>
                                                    <option value="2">Freelancer</option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Exprience Level</label>

                                                <select class="form-control select2 form-select" name="exprience">
                                                    <option value="Fresher">Fresher</option>
                                                    <option value="1 year">1 Year Exprienced</option>
                                                    <option value="3 year">3 Year Exprienced</option>
                                                </select>

                                            </div>



                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <label class="control-label">Salary Package <span class="text-danger">*</span></label>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-4">


                                                <select class="form-control currency" name="salary_currency" data-trigger id="choices-single-default" placeholder="This is a search placeholder">
                                                    <option value="">Select</option>
                                                    <?php
                                                    if ($currency) {
                                                        foreach ($currency as $cur) {
                                                    ?>
                                                            <option value="<?= $cur['c_id'] ?>" <?= (($candidate_detail[0]['salary_currency'] == $cur['c_id']) ? 'selected' : '') ?>><?= $cur['name'] ?>(<?= $cur['code'] ?>)</option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>

                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><span class="input-group-text" id="currencyid"></span></div>
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="To" name="salary_to" value="<?= (($tag == 'Edit') ? $job['0']['salary_to'] : '') ?>">
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text">From</div>
                                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="From" name="salary_from" value="<?= (($tag == 'Edit') ? $job['0']['salary_from'] : '') ?>">
                                                </div>
                                            </div>



                                        </div>

                                    </div>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label class="control-label">Country <span class="text-danger">*</span></label>

                                                <input name="country" type="text" class="form-control" placeholder="Country" value="<?= (($tag == 'Edit') ? $job['0']['state'] : '') ?>">

                                            </div>
                                            <div class="mb-3 col-md-4">

                                                <label class="control-label">State <span class="text-danger">*</span></label>
                                                <input name="state" type="text" class="form-control" placeholder="State" value="<?= (($tag == 'Edit') ? $job['0']['state'] : '') ?>">

                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label class="control-label">City <span class="text-danger">*</span></label>

                                                <input name="state" type="text" class="form-control" placeholder="City" value="<?= (($tag == 'Edit') ? $job['0']['state'] : '') ?>">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="control-label">Your Organization's Job Order Number</label>
                                                <input name="" type="number" class="form-control" placeholder="Your Organization's Job Order Number" name="order_no" value="<?= (($tag == 'Edit') ? $job['0']['order_no'] : '') ?>">
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
                                                        <div class="">
                                                            <textarea name="job_description" id="editor"><?= (($tag == 'Edit') ? $job['0']['job_description'] : '') ?></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="control-label">Skills</label>
                                                <input type="text" class="form-control" placeholder="Enter Multiple Skills" name="skills" value="<?= (($tag == 'Edit') ? $job['0']['skills'] : '') ?>">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="control-label">Last apply date</label>
                                                <input name="last_apply_date" type="date" class="form-control" placeholder="Enter Multiple Skills" name="skills" value="<?= (($tag == 'Edit') ? $job['0']['skills'] : '') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="control-label">HR Name</label>
                                                <input name="hr_name" type="text" class="form-control" placeholder="Enter HR name" name="hr_name" value="<?= (($tag == 'Edit') ? $job['0']['skills'] : '') ?>">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="control-label">HR Contact no.</label>
                                                <input name="last_apply_date" type="tel" class="form-control" maxlength="10" placeholder="HR contact number" name="hr_contact" value="<?= (($tag == 'Edit') ? $job['0']['skills'] : '') ?>">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"><?= (($tag == 'Edit') ? 'Update job' : 'Save as Post') ?></button>
                                        <button type="reset" class="btn btn-primary waves-effect waves-light">Cancel</button>

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

<?php include 'includes/footerlink.php'; ?>

<script>
    $('input').attr('autocomplete', 'off');

    $(function() {
        $("input[name='hr_contact']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>


</body>

</html>