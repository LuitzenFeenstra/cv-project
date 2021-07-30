<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="hobbies">
        <div class="row">
            <h2>Hobbies:</h2>
            <hr>
            <?php foreach ($vars['hobbies'] as $hobbies) : ?>
                <div class="col-12"><?= $hobbies->hobbies ?></div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>