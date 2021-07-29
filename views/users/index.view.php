<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div>Werkervaring van <?= $vars['user']->first_name ?></div>
</div>

<section>
    <?php foreach ($vars['jobs'] as $job) : ?>
        <div><?= $job->job_title ?></div>
    <?php endforeach ?>
</section>

<section>
    <?php foreach ($vars['educations'] as $education) : ?>
        <div class="row">
            <div class="col-12"><?= $education->degree ?></div>
        </div>
    <?php endforeach ?>
</section>

<section>
    <?php foreach ($vars['skills'] as $skills) : ?>
        <div class="row">
            <div class="col-12"><?= $skills->skill ?></div>
        </div>
    <?php endforeach ?>
</section>

<section>
    <?php foreach ($vars['hobbies'] as $hobbies) : ?>
        <div class="row">
            <div class="col-12"><?= $hobbies->hobbies ?></div>
        </div>
    <?php endforeach ?>
</section>

<?php require 'views/partials/footer.view.php' ?>