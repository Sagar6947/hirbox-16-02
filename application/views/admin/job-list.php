<?php include 'template/headerlink.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper" class="layout_wrapper_gray">

    <?php include 'template/header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-sm-0 font-size-18">Jobs</h4>
                                <p class="mt-1">Showing <?= $company_count ?> Jobs</p>
                            </div>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">


                    


                    <div class="col-xl-6 col-xxl-6  col-md-12 col-sm-12">
                        <?php
                        if (!empty($get_jobs)) {
                            foreach ($get_jobs as $row) {
                            job($row, 'admin');
                            }
                        }

                        ?>
                    </div>

                </div><!-- end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'template/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->




<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<?php include 'template/footerlink.php'; ?>

</body>



</html>