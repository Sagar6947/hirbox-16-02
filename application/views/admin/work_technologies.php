<?php include 'template/headerlink.php'; ?>
<div id="layout-wrapper">


    <?php include 'template/header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <?php if ($msg = $this->session->flashdata('msg')) :
                                $msg_class = $this->session->flashdata('msg_class') ?>
                                <div class='row'>
                                    <div class='col-lg-12'>
                                        <div class='alert  <?= $msg_class; ?>'><?= $msg; ?></div>
                                    </div>
                                </div>
                            <?php $this->session->unset_userdata('msg');
                            endif; ?>

                            <div class="card-body mt-3">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="title"><?= $title ?></label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $title ?> List</h4>

                            </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        <?php
                                        $i = 0;
                                        if (!empty($tech)) {
                                            foreach ($tech as $row) {
                                                $i++;
                                        ?>

                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $row['name'] ?></td>

                                                    <td style="width: 100px">

                                                        <a href="<?= base_url() ?>admin_Dashboard/work_technologies?BdID=<?= encryptId($row['tid']) ?>" class="btn btn-outline-secondary btn-sm">
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

            </div>
        </div>
        <?php include 'template/footer.php'; ?>
    </div>
</div>
<div class="rightbar-overlay"></div>

<?php include 'template/footerlink.php'; ?>


</body>

</html>