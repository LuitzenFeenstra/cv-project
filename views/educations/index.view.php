<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="opleidingen">
        <div class="row">
            <h2>Educations:</h2>
            <hr>
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-3"><?= $education->start_year ?> / <?= $education->graduation_year ?></div>
                <div class="col-3"><?= $education->degree ?></div>
                <div class="col-6"><?= $education->school_name ?></div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="opleidingen_form">
        <form method="POST" action="educations/create">
            <div class="row">
                <h2>Add a new education:</h2>
                <div class="col-6">
                    <label for="start_year" class="form-label">What year did you start your education?</label>
                    <input type="number" class="form-control" id="start_year" name="start_year" placeholder="1990">
                </div>
                <div class="col-6">
                    <label for="end_year" class="form-label">What year did you end your education?</label>
                    <input type="number" class="form-control" id="end_year" name="end_year" placeholder="1994">
                </div>
                <div class="col-12">
                    <label for="degree" class="form-label">Degree:</label>
                    <input type="text" class="form-control" id="degree" name="degree" placeholder="Bachelor in Floral Design">
                </div>
                <div class="col-12">
                    <label for="institute" class="form-label">College:</label>
                    <input type="text" class="form-control" id="institute" name="institute" placeholder="Floral Design Colllege">
                </div>
            </div>
            <hr>
            <button class="btn" type="submit">Submit</button>
        </form>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>