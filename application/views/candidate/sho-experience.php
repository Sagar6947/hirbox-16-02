<?php
if ($experience_data != '') {

    foreach ($experience_data as $exp) {

        $skill = json_decode($exp['key_skill'], true);
        $role = getRowById('tbl_role', 'rid', $exp['role']);
        $industries = getRowById('tbl_industries', 'cate_id', $exp['industry_company']);
?>

        <div class="d-flex align-items-flex-start pb-4 experience_wrapper">

            <div class="flex-grow-1">
                <h5 class="font-size-15 mb-3"><a href="#" class="text-dark"><?= (($role[0]['rid'] == '14') ? $exp['expotherrole'] : $role[0]['role']) ?></a></h5>
                <p>Company : <span class="text-muted"> <?= $exp['company'] ?></span></p>
                <p>Company Industry : <span class="text-muted"> <?= $industries[0]['category'] ?></span></p>

                <?php
                if ($exp['stillwork'] == '1') {
                ?>
                    <p>Joining date : <span class="text-muted"> <?= $exp['joining_date'] ?>/ I am currently working here.</span></p>
                <?php
                } else {
                ?>
                    <p>Joining date/Leaving Date : <span class="text-muted"> <?= $exp['joining_date'] ?>/<?= $exp['leaving_date'] ?></span></p>
                <?php
                }
                ?>

                <p>Key Skills :
                    <?php
                    if ($skill != '') {
                        foreach ($skill as $skillno) {


                            $skill_data =  getRowById('tbl_technologies', 'tid', $skillno);
                            // print_r($skill_data);
                    ?>

                            <span class="text-muted"> <?= $skill_data[0]['name'] ?></span> &nbsp;

                    <?php
                        }
                    }
                    ?>
                </p>

                <p>Notice Period : <span class="text-muted"> <?= $exp['notice_period'] ?> Days</span></p>
            </div>
            <div class="flex-shrink-0 text-end">
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                    </a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="#">Copy</a> -->
                        <a class="dropdown-item exp_edit" href="" data-editcandidateid="<?= $exp['candidate_id'] ?>" data-editexpid="<?= $exp['exp_id'] ?>" ><i class="fas fa-edit"></i> Edit</a>
                        <a class="dropdown-item delete_btn delete_exp_btn" href="" data-expcandidateid="<?= $exp['candidate_id'] ?>" data-expid="<?= $exp['exp_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <?php

    }
} else {
    ?>
    <div class="align-items-center pb-4">
        <h6>
            There are no experience details added.
        </h6>
    </div>

<?php
}
sleep(1);
?>