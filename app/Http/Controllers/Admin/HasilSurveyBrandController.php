<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // Keep if any method might need it in future

class HasilSurveyBrandController extends Controller
{
    /**
     * Display the main landing page for Hasil Survey Brand.
     */
    public function index()
    {
        return view('admin.references.hasil_survey_brand.main_index');
    }

    /**
     * Display the Brand Awareness static page.
     */
    public function brandAwareness()
    {
        return view('admin.references.hasil_survey_brand.awareness');
    }

    /**
     * Display the Brand Positioning static page.
     */
    public function brandPositioning()
    {
        return view('admin.references.hasil_survey_brand.positioning');
    }

    /**
     * Display the Customer Satisfaction & Engagement static page.
     */
    public function cse()
    {
        return view('admin.references.hasil_survey_brand.cse');
    }

    /**
     * Display the SKL (Survey Kepuasan Layanan) static page.
     */
    public function skl()
    {
        return view('admin.references.hasil_survey_brand.skl');
    }

    // Old CRUD methods specific to the previous generic dummy survey have been removed.
    // public function create() { /* ... */ }
    // public function store(Request $request) { /* ... */ }
    // public function show($id) { /* ... */ }
    // public function edit($id) { /* ... */ }
    // public function update(Request $request, $id) { /* ... */ }
    // public function destroy($id) { /* ... */ }
}
