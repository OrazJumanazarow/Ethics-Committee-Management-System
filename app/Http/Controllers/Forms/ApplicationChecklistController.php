<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicationChecklist;

class ApplicationChecklistController extends Controller
{


    public function index()
    {
        return view('forms.application_cheklist_form.index');
    }

    public function create()
    {
        return view('forms.application_cheklist_form.create');
    }

    public function store(Request $request){
        $form = new ApplicationChecklist();
        $form->create($request->all());
    }
}
