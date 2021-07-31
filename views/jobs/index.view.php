<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="werk">
        <div class="row">
            <h2>Jobs:</h2>
            <hr>
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-3"><?= date("d-m-Y", strtotime($job->start_date)) ?> / <?= date("d-m-Y", strtotime($job->end_date)) ?></div>
                <div class="col-3"><?= $job->job_title ?></div>
                <div class="col-3"><?= $job->company_name ?></div>
                <div class="col-3"><?= $job->company_address ?></div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="werk_form">
        <form method="POST" action="jobs/create">
            <div class="row">
                <h2>Add a new job:</h2>
                <div class="col-6">
                    <label for="job_start_year" class="form-label">Job start date:</label>
                    <input type="date" class="form-control" id="job_start_year" name="job_start">
                </div>
                <div class="col-6">
                    <label for="job_end_year" class="form-label">Job end date:</label>
                    <input type="date" class="form-control" id="job_end_year" name="job_end">
                </div>
                <div class="col-12">
                    <label for="job_title" class="form-label">Job title:</label>
                    <input type="text" class="form-control" id="job_title" name="job_title" placeholder="chef lege dozen">
                </div>
                <div class="col-12">
                    <label for="comp_name" class="form-label">Company name:</label>
                    <input type="text" class="form-control" id="comp_name" name="comp_name" placeholder="lege dozen inc.">
                </div>
                <div class="col-12">
                    <label for="comp_adr" class="form-label">Company adress:</label>
                    <input type="text" class="form-control" id="comp_adr" name="comp_adr" placeholder="achter je">
                </div>
            </div>
            <hr>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>