
<?php
if (!empty($job_list)) {
    foreach ($job_list as $row) {
        job($row, 'candidate');
    }
} else {
    ?>
    <div class="no_jobs_avilable_title">No Jobs Available</div>
    <?php
}
sleep(1);
?>