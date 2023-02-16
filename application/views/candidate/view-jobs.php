<?php include 'includes/header-link.php' ?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/header.php' ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 f-24">Search for jobs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">View Jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="browse-all" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body job_list">
                                                <div class="detail-box d-flex flex-column">
                                                    <div class="post_detial row border-bottom bb-0">
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_role" list="datalistOptions" id="search_role" placeholder="Role">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input class="form-control box-11 search_input" name="search_location" list="datalistOptions" id="search_location" placeholder="Location">
                                                        </div>
                                                        <div class="col-md-12" style="text-align: right;">
                                                            <button type="button" class="btn btn-primary btn-primary waves-effect waves-light orange_btn">
                                                                Search Job
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                    <!--</div>-->
                                    <!-- end col -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4 text-primary">Search by filter</h4>

                                                <div class="open_filter">
                                                    <div class="mt-2 pb-4 pt-3 border-bottom">
                                                        <h5 class="font-size-14 mb-3">Job type</h5>
                                                        <div>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck">
                                                                <label class="form-check-label" for="productratingCheck">
                                                                    Full Time
                                                                </label>
                                                            </div>

                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck">
                                                                <label class="form-check-label" for="productratingCheck">
                                                                    Part Time
                                                                </label>
                                                            </div>

                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck">
                                                                <label class="form-check-label" for="productratingCheck">
                                                                    Remote
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <?php
                                                    $i = 0;
                                                    if (!empty($industries)) {
                                                    ?>
                                                        <div class="mt-2 pb-4 pt-3 border-bottom">
                                                            <h5 class="font-size-14 mb-3">Industries</h5>
                                                            <div class="scroll_div">
                                                                <?php
                                                                foreach ($industries as $ind) {
                                                                    $i = $i + 1;
                                                                ?>
                                                                    <div class="form-check mt-2">
                                                                        <input class="form-check-input common_selector category" type="checkbox" value="<?= $ind['cate_id'] ?>" id="<?= $i ?>">
                                                                        <label class="form-check-label" for="productratingCheck<?= $i ?>">
                                                                            <?= $ind['category'] ?>
                                                                        </label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="mt-2 pt-3 border-bottom">
                                                        <h5 class="font-size-14 mb-3">Posted</h5>
                                                        <div>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                                <label class="form-check-label" for="productratingCheck1">
                                                                    1 month ago
                                                                </label>
                                                            </div>

                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                                <label class="form-check-label" for="productratingCheck1">
                                                                    3 month ago
                                                                </label>
                                                            </div>

                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                                <label class="form-check-label" for="productratingCheck1">
                                                                    6 month ago
                                                                </label>
                                                            </div>

                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                                                <label class="form-check-label" for="productratingCheck1">
                                                                    1 year ago
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9" id="job-grid">

                                    </div>
                                </div>
                            </div>
                            <!-- tab 2 saved -->
                            <div class="tab-pane" id="saved" role="tabpanel"></div>
                            <!-- tab 3 hidden -->
                            <div class="tab-pane" id="hidden" role="tabpanel"></div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer-link.php'; ?>

<script>
    $(document).ready(function() {
        loadJobs();

        // ===Load Jobs===
        function loadJobs() {
            var category = get_filter('category');
            
            $.ajax({
                url: "<?= base_url('candidate/getjobs') ?>",
                type: "POST",
                data: {
                    category: category
                },

                beforeSend: function() {

                    var skeliton = `<div class="ph-item">
                            <div class="ph-col-2">
                                <div class="ph-avatar"></div>
                            </div>

                            <div>
                                <div class="ph-row">
                                    <div class="ph-col-4"></div>
                                    <div class="ph-col-8 empty"></div>
                                    <div class="ph-col-6"></div>
                                    <div class="ph-col-6 empty"></div>
                                    <div class="ph-col-2"></div>
                                    <div class="ph-col-10 empty"></div>
                                </div>
                            </div>

                            <div class="ph-col-12">
                                <div class="ph-row">
                                    <div class="ph-col-10 big"></div>
                                    <div class="ph-col-2 empty big"></div>
                                    <div class="ph-col-4"></div>
                                    <div class="ph-col-8 empty"></div>
                                    <div class="ph-col-6"></div>
                                    <div class="ph-col-6 empty"></div>
                                    <div class="ph-col-12"></div>
                                </div>
                            </div>

                            </div>`;
                    let skelitons = skeliton.repeat(4);
                    $("#job-grid").html(skelitons);
                },

                success: function(data) {
                    $("#job-grid").html(data);
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function() {
            loadJobs();
        });
    });
</script>

</body>



</html>