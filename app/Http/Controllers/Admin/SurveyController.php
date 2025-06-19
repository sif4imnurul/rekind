<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dummySurveys = [
            (object)['id' => 1, 'title' => 'Survey Kepuasan Pelanggan Q1 2024', 'date' => '2024-04-15', 'respondents' => 150, 'status' => 'Completed'],
            (object)['id' => 2, 'title' => 'Brand Awareness Study - Internal', 'date' => '2024-05-20', 'respondents' => 75, 'status' => 'In Progress'],
            (object)['id' => 3, 'title' => 'Product Feedback Survey - Alpha Testers', 'date' => '2024-06-01', 'respondents' => 30, 'status' => 'Planning'],
        ];
        // In a real scenario, this would come from a model: HasilSurveyBrand::all() or similar.
        return view('admin.references.survey.index', compact('dummySurveys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // For now, just show a view indicating it's not implemented or a dummy form
        return view('admin.references.survey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Not implemented yet
        return redirect()->route('admin.references.survey.index')->with('info', 'Functionality to store survey results is not yet implemented.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // For now, just show a view indicating it's not implemented or a dummy detail page
        $dummySurvey = (object)['id' => $id, 'title' => 'Dummy Survey Detail ' . $id, 'date' => '2024-01-01', 'respondents' => 100, 'status' => 'Completed', 'data' => ['question1' => 'answer1', 'question2' => 'answer2']];
        return view('admin.references.survey.show', compact('dummySurvey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Not implemented yet
        // You could pass a dummy survey object to a dummy edit form
        $dummySurvey = (object)['id' => $id, 'title' => 'Dummy Survey Edit ' . $id, 'date' => '2024-01-01', 'respondents' => 100, 'status' => 'Completed'];
        // For now, redirect or show a 'not implemented' message on the form itself.
        // Let's use a create view for now, as an edit form would be similar.
        return view('admin.references.survey.create', ['dummySurvey' => $dummySurvey, 'isEdit' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Not implemented yet
        return redirect()->route('admin.references.survey.index')->with('info', 'Functionality to update survey results is not yet implemented.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Not implemented yet
        return redirect()->route('admin.references.survey.index')->with('info', 'Functionality to delete survey results is not yet implemented.');
    }
}
