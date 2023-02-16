<?php
if (!empty($academic_data)) {


    foreach ($academic_data as $ace) {
?>

        <div class="d-flex align-items-flex-start pb-4 acadmices_wrapper">

            <div class="flex-grow-1">
                <h5 class="font-size-15 mb-3"><a href="#" class="text-dark"><?= $ace['degree'] ?></a></h5>
                <p>Specialization/Education Board : <span class="text-muted"> <?= $ace['specialization'] ?></span></p>
                <p>College/School/Institute : <span class="text-muted"> <?= $ace['institute'] ?></span></p>
                <p>City/Country : <span class="text-muted"> <?= $ace['city'] ?></span></p>
                <p>Year of Passing : <span class="text-muted"> <?= $ace['pass_year'] ?></span></p>
            </div>
            <div class="flex-shrink-0 text-end">
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                    </a>
                    <div class="dropdown-menu">
                        
                         <!--<a class="aca_edit" href=""  data-candidateid="<?= $ace['candidate_id'] ?>" data-acaid="<?= $ace['ace_id'] ?>"><i class="fas fa-edit"></i> Edit</a> -->
                        <a class="dropdown-item aca_edit" href="" data-editcandidateid="<?= $ace['candidate_id'] ?>" data-editacaid="<?= $ace['ace_id'] ?>"><i class="fas fa-trash"></i> Edit</a>
                        <a class="dropdown-item delete_btn aca_delete" href="" data-candidateid="<?= $ace['candidate_id'] ?>" data-acaid="<?= $ace['ace_id'] ?>"><i class="fas fa-trash"></i> Delete</a>
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
            There are no details added.
        </h6>
    </div>


<?php
}

sleep(1);
?>