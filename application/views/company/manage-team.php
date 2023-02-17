<?php include 'includes/headerlink.php'; ?>

<div id="layout-wrapper">


    <?php include 'includes/header.php'; ?>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Manage Your Team Members</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hirbox</a></li>
                                    <li class="breadcrumb-item active">Team Members</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="text-sm-end">
                            <a href="<?= base_url('company/add-team-member') ?>" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Add New Member</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <?php
                        if ($this->session->has_userdata('msg')) {
                            echo $this->session->userdata('msg');
                            $this->session->unset_userdata('msg');
                        }
                        ?>
                        <div class="card">
                            <!--<div class="card-header">-->
                            <!--    <h4 class="card-title">Team Members</h4>-->

                            <!--</div>-->
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                            <th>Add As</th>
                                            <th>Access</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        if (!empty($team)) {
                                            $i = 0;
                                            foreach ($team as $row) {
                                                $i = $i + 1;
                                        ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td><?= $row['number'] ?></td>
                                                    <td><?= $row['password'] ?></td>
                                                    <td><?= $row['role'] ?></td>
                                                    <td><a href="<?= base_url('company/update_member_access/' . $row['member_id'] . '/' . (($row['access'] == '0') ? '1' : '0')) ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                            <i class="fas fa-eye"></i> <?= (($row['access'] == '0') ? 'Read' : 'Write') ?>
                                                        </a></td>

                                                    <td style="width: 100px">
                                                        <!-- <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a> -->
                                                        <a href="<?= base_url('delete-member') ?>?BdID=<?= $row['member_id'] ?>" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div> <!-- container-fluid -->
        </div>
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