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
        JobsModel::store([
            'id'              => NULL,
            'user_id'         => '1',
            'company_name'    => $_POST['comp_name'],
            'company_address' => $_POST['comp_adr'],
            'job_title'       => $_POST['job_title'],
            'start_date'      => date("Y-m-d", strtotime($_POST['job_start'])),
            'end_date'        => date("Y-m-d", strtotime($_POST['job_end'])),
            'deleted'         => NULL,
        ]);
        header("Location: /jobs");
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
