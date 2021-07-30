<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\JobsModel;
use App\Models\UserModel;

class JobController extends Controller
{

    public function index()
    {
        View::render("jobs/index.view", [
            'user'          => UserModel::get(1),
            'jobs'          => JobsModel::userjobs(1),
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
