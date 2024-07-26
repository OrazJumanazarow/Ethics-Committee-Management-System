<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectInformationController extends Controller
{


    public function index()
    {
        return view('forms.project_information_form.index');
    }

    public function create()
    {
        return view('forms.project_information_form.create');
    }
}
