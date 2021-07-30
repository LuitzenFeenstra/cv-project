<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="opleidingen">
        <div class="row">
            <h2>Opleidingen:</h2>
            <hr>
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-3"><?= $education->start_year ?> / <?= $education->graduation_year ?></div>
                <div class="col-3"><?= $education->degree ?></div>
                <div class="col-6"><?= $education->school_name ?></div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>