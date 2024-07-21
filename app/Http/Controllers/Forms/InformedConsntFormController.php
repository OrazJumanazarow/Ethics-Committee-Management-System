<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformedConsntFormController extends Controller
{


    public function index()
    {
        return view('forms.informed_consent_form.index');
    }

    public function create()
    {
        return view('forms.informed_consent_form.create');
    }
}

