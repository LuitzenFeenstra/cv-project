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

    <section class="hobbies_form">
        <form method="POST" action="hobbies/create">
            <div class="row">
                <h2>Add a new Hobby:</h2>
                <div class="col-12">
                    <label for="hobby" class="form-label">Hobby:</label>
                    <input type="text" class="form-control" id="hobby" name="hobby" placeholder="trein surfen">
                </div>
            </div>
            <hr>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>