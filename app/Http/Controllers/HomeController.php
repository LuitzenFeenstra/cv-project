<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\JobsModel;
use App\Models\EducationModel;
use App\Models\HobbiesModel;
use App\Models\SkillsModel;
use App\Models\UserModel;

class HomeController extends Controller
{

    public function index()
    {
        return View::render('home.view', [
            'user'          => UserModel::get(1),
            'jobs'          => JobsModel::userJobs(1),
            'educations'    => EducationModel::userEducations(1),
            'skills'        => SkillsModel::userSkills(1),
            'hobbies'       => HobbiesModel::userHobbies(1),
        ]);
    }
}
