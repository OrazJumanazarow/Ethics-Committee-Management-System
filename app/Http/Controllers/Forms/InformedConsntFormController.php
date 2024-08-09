<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\InformedConsentForm;

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

    public function store(Request $request){
        $form = new InformedConsentForm();
        $form->create($request->all());
    }
}

