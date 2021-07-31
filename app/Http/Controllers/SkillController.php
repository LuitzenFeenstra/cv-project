<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\SkillsModel;
use App\Models\UserModel;

class SkillController extends Controller
{

    public function index()
    {
        View::render("skills/index.view", [
            'user'          => UserModel::get(1),
            'skills'        => SkillsModel::userskills(1),
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
        SkillsModel::store([
            'id'        => NULL,
            'user_id'   => '1',
            'skill'     => $_POST['skill'],
            'deleted'   => NULL,
        ]);
        header("Location: /skills");
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
