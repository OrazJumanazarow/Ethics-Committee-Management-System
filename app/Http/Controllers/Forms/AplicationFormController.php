<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplcationForm;

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


    public function store(Request $request){
        $form = new ApplcationForm();
        dd($request->all());
        $form->create($request->all());

        return redirect()->back();
    }

    public function test(){
        return view('forms.application_form.edit');
}


}
