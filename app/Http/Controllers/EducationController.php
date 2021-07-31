<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;

class EducationController extends Controller
{

    public function index()
    {
        View::render("educations/index.view", [
            'user'          => UserModel::get(1),
            'educations'    => EducationModel::userEducations(1),
        ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
    }

    public function create()
    {
        EducationModel::store([
            'id' => NULL,
            'user_id'         => '1',
            'school_name'     => $_POST['institute'],
            'degree'          => $_POST['degree'],
            'start_year'      => $_POST['start_year'],
            'graduation_year' => $_POST['end_year'],
            'deleted'         => NULL,
        ]);
        header("Location: /educations");
    }

    public function show()
    {
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    {
    }
}
