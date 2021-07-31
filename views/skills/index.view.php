<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="skills">
        <div class="row">
            <h2>Skills:</h2>
            <hr>
            <?php foreach ($vars['skills'] as $skills) : ?>
                <tr>
                    <div class="col-12"><?= $skills->skill ?></div>
                </tr>
            <?php endforeach ?>
        </div>
    </section>

    <section class="skill_form">
        <form method="POST" action="skills/create">
            <div class="row">
                <h2>Add a new skill:</h2>
                <div class="col-12">
                    <label for="skill" class="form-label">Skill:</label>
                    <input type="text" class="form-control" id="skill" name="skill" placeholder="dubbele salto achterwaarts">
                </div>
            </div>
            <hr>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>