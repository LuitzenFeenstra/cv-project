<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="persoonsgegevens">
        <h2>Persoonsgegevens:</h2>
        <hr>
        <div class="row">
            <div class="col-3">Voornaam:</div>
            <div class="col-9"><?= $vars['user']->first_name ?></div>
        </div>
        <div class="row">
            <div class="col-3">Achternaam:</div>
            <div class="col-9"><?= $vars['user']->last_name ?></div>
        </div>
        <div class="row">
            <div class="col-3">Geboortedatum:</div>
            <div class="col-9"><?= $vars['user']->birth_date ?></div>
        </div>
        <div class="row">
            <div class="col-3">Nationaliteit:</div>
            <div class="col-9"><?= $vars['user']->nationality ?></div>
        </div>
        <div class="row">
            <div class="col-3">Woonplaats:</div>
            <div class="col-9"><?= $vars['user']->city ?></div>
        </div>
        <div class="row">
            <div class="col-3">Telefoon:</div>
            <div class="col-9"><?= $vars['user']->tel_number ?></div>
        </div>
        <div class="row">
            <div class="col-3">e-mail:</div>
            <div class="col-9"><?= $vars['user']->email ?></div>
        </div>
    </section>

    <section class="opleidingen row">
        <h2>Opleidingen:</h2>
        <hr>
        <?php foreach ($vars['educations'] as $education) : ?>
            <div class="col-3"><?= $education->start_year ?> / <?= $education->graduation_year ?></div>
            <div class="col-3"><?= $education->degree ?></div>
            <div class="col-6"><?= $education->school_name ?></div>
        <?php endforeach ?>
    </section>

    <section class="werk row">
        <h2>Werkervaring:</h2>
        <hr>
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="col-3"><?= date("d-m-Y", strtotime($job->start_date)) ?> / <?= date("d-m-Y", strtotime($job->end_date)) ?></div>
            <div class="col-3"><?= $job->job_title ?></div>
            <div class="col-3"><?= $job->company_name ?></div>
            <div class="col-3"><?= $job->company_address ?></div>
        <?php endforeach ?>
    </section>

    <section class="skills row">
        <h2>Vaardigheden:</h2>
        <hr>
        <?php foreach ($vars['skills'] as $skills) : ?>
            <tr>
                <div class="col-12"><?= $skills->skill ?></div>
            </tr>
        <?php endforeach ?>
    </section>

    <section class="hobbies row">
        <h2>Hobbies:</h2>
        <hr>
        <?php foreach ($vars['hobbies'] as $hobbies) : ?>
            <div class="col-12"><?= $hobbies->hobbies ?></div>
        <?php endforeach ?>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>