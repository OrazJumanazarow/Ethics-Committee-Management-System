<?php

namespace App\Http\Controllers\Forms;

use App\Models\ProjectInformationForm;
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

    public function store(Request $request){
        $form=new ProjectInformationForm();
        $form->create($request->all());
    }
}

