<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilSurveyController extends Controller
{
    public function awareness()
    {
        return view('pages.reference.hasil-survey.brand-awareness');
    }

    public function position()
    {
        return view('pages.reference.hasil-survey.brand-position');
    }
    
    public function cse()
    {
        return view('pages.reference.hasil-survey.cse');
    }
    
    public function skl()
    {
        return view('pages.reference.hasil-survey.skl');
    }

    public function testimoni()
    {
        return view('pages.reference.hasil-survey.testimoni');
    }
}
