<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AplicationFormController extends Controller
{

   
    public function index()
    {
        return view('forms.application_form.index');
    }

    public function create()
    {
        return view('forms.application_form.create');
    }
}

