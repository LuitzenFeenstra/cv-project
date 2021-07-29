<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="col-12"><?= $vars['user']->first_name ?>. ' ' . <?= $vars['user']->last_name ?></div>

    <?php foreach ($vars['educations'] as $education) : ?>
        <div class="row">
            <div class="col-12"><?= $education->degree ?></div>
        </div>
    <?php endforeach ?>
</div>



<?php require 'views/partials/footer.view.php' ?>