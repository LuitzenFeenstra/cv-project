<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="werk">
        <div class="row">
            <h2>Werkervaring:</h2>
            <hr>
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-3"><?= date("d-m-Y", strtotime($job->start_date)) ?> / <?= date("d-m-Y", strtotime($job->end_date)) ?></div>
                <div class="col-3"><?= $job->job_title ?></div>
                <div class="col-3"><?= $job->company_name ?></div>
                <div class="col-3"><?= $job->company_address ?></div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>