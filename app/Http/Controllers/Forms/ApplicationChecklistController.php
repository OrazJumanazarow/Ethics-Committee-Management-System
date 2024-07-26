<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
