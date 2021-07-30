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
            <div class="col-9"><?= date("d-m-Y", strtotime($vars['user']->birth_date)) ?></div>
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

</div>

<?php require 'views/partials/footer.view.php' ?>