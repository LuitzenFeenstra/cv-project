<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="persoonsgegevens">
        <h2>User:</h2>
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

    <section class="user_form">
        <form>
            <div class="row">
                <h2>Add a new User:</h2>
                <div class="col-6">
                    <label for="first_nm" class="form-label">Voornaam:</label>
                    <input type="text" class="form-control" id="first_nm" placeholder="jantje">
                </div>
                <div class="col-6">
                    <label for="last_name" class="form-label">Achternaam:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="smit">
                </div>
                <div class="col-6">
                    <label for="birth_dt" class="form-label">Geboortedatum:</label>
                    <input type="text" class="form-control" id="birth_dt" placeholder="17-07-1990">
                </div>
                <div class="col-6">
                    <label for="nationality" class="form-label">Nationaliteit:</label>
                    <input type="text" class="form-control" id="nationality" placeholder="Nederlands">
                </div>
                <div class="col-6">
                    <label for="user_adr" class="form-label">Woonplaats:</label>
                    <input type="text" class="form-control" id="user_adr" placeholder="Volendam">
                </div>
                <div class="col-6">
                    <label for="user_tel" class="form-label">Telefoon nummer:</label>
                    <input type="text" class="form-control" id="user_tel" placeholder="06 85428576">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="you@example.com">
                </div>
            </div>
            <hr>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>