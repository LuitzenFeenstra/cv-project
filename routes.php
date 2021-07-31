<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('', 'App/Http/Controllers/HomeController.php@index');

$router->get('users', 'App/Http/Controllers/UserController.php@index');
$router->get('users/create', 'App/Http/Controllers/UserController.php@create');

$router->get('educations', 'App/Http/Controllers/EducationController.php@index');
$router->get('jobs', 'App/Http/Controllers/JobController.php@index');
$router->get('skills', 'App/Http/Controllers/SkillController.php@index');
$router->get('hobbies', 'App/Http/Controllers/HobbyController.php@index');

$router->get('login', 'App/Http/Controllers/LoginController.php');
$router->get('logout', 'App/Http/Controllers/LoginController.php@logout');

$router->post('hobbies/create', 'App/Http/Controllers/HobbyController.php@create');
$router->post('skills/create', 'App/Http/Controllers/SkillController.php@create');
$router->post('educations/create', 'App/Http/Controllers/EducationController.php@create');
$router->post('jobs/create', 'App/Http/Controllers/JobController.php@create');
