<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="persoonsgegevens row">
        <h2>Persoonsgegevens:</h2>
        <hr>
        <div>
            <table>
                <tr>
                    <td>Voornaam:</td>
                    <td><?= $vars['user']->first_name ?></td>
                </tr>
                <tr>
                    <td>Achternaam:</td>
                    <td><?= $vars['user']->last_name ?></td>
                </tr>
                <tr>
                    <td>Geboortedatum:</td>
                    <td><?= $vars['user']->birth_date ?></td>
                </tr>
                <tr>
                    <td>Nationaliteit:</td>
                    <td><?= $vars['user']->nationality ?></td>
                </tr>
                <tr>
                    <td>Woonplaats:</td>
                    <td><?= $vars['user']->city ?></td>
                </tr>
                <tr>
                    <td>Telefoon:</td>
                    <td><?= $vars['user']->tel_number ?></td>
                </tr>
                <tr>
                    <td>e-mail:</td>
                    <td><?= $vars['user']->email ?></td>
                </tr>
            </table>
        </div>
    </section>

    <section class="opleidingen row">
        <h2>Opleidingen:</h2>
        <hr>
        <div>
            <table>
                <?php foreach ($vars['educations'] as $education) : ?>
                    <tr>
                        <td><?= $education->start_year ?></td>
                        <td><?= $education->graduation_year ?></td>
                        <td><?= $education->degree ?></td>
                        <td><?= $education->school_name ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>

    <section class="werk row">
        <h2>Werkervaring:</h2>
        <hr>
        <div>
            <table>
                <?php foreach ($vars['jobs'] as $job) : ?>
                    <tr>
                        <td><?= $job->start_date ?></td>
                        <td><?= $job->end_date ?></td>
                        <td><?= $job->job_title ?></td>
                        <td><?= $job->company_name ?></td>
                        <td><?= $job->company_address ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>

    <section class="skills row">
        <h2>Vaardigheden:</h2>
        <hr>
        <div>
            <table>
                <?php foreach ($vars['skills'] as $skills) : ?>
                    <tr>
                        <td><?= $skills->skill ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>

    <section class="hobbies row">
        <h2>Hobbies:</h2>
        <hr>
        <div>
            <table>
                <?php foreach ($vars['hobbies'] as $hobbies) : ?>
                    <tr>
                        <td><?= $hobbies->hobbies ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </section>
</div>

<?php require 'views/partials/footer.view.php' ?>