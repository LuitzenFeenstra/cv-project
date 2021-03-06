<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\HobbiesModel;
use App\Models\UserModel;

class hobbyController extends Controller
{

    public function index()
    {
        View::render("hobbies/index.view", [
            'user'          => UserModel::get(1),
            'hobbies'       => HobbiesModel::userhobbies(1),
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
        HobbiesModel::store([
            'id'        => NULL,
            'user_id'   => '1',
            'hobbies'   => $_POST['hobby'],
            'deleted'   => NULL,
        ]);
        header("Location: /hobbies");
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
