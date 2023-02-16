
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
                                <h4 class="mb-sm-0 font-size-18">Add Your Team Member</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                        <li class="breadcrumb-item active">Add Your Team Member</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="text-sm-end">
                                <a href="<?= base_url('company/manage-team-member') ?>" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">Member List</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Add a Job</h4>
                                    <p class="card-title-desc">Fill all information below</p>
                                </div> -->
                                <?php
                                    if ($this->session->has_userdata('msg')) {
                                        echo $this->session->userdata('msg');
                                        $this->session->unset_userdata('msg');
                                    }
                                    ?>
                                    <div class="card-body mt-3">
                                    <form method="POST">
                                        <div class="row">
                                            <input type="hidden" name="company_id" value="<?= sessionId('login_company_id') ?>">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="title">Name</label>
                                                    <input id="productname" name="name" type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title">Phone Number</label>
                                                    <input id="productname" name="number" type="tel" class="form-control" placeholder="Phone Number" maxlength="10">
                                                </div>
                                                 <div class="mb-3">
                                                    <label for="productdesc">Password</label>
                                                    <input id="password" name="password" type="text" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="productdesc">Email </label>
                                                    <input id="price" name="email" type="email" class="form-control" placeholder="Email ">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productdesc">Adding as </label>
                                                    <input id="price" name="role" type="text" class="form-control" placeholder="Adding as">
                                                </div>
                                               
                                                <div class="mb-3">
                                                    <label for="productdesc">Access</label>
                                                    <select name="access" class="form-control">
                                                        <option value="0">Read</option>
                                                        <option value="1">Write</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Member</button>
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