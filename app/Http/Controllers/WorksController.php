<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Works = Works::all();
        return view('dashboard', compact('Works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // for when u want to store and submit smth to the database...?
        $validated = $request->validate([
            'work_title' => 'required',
            'work_body' => 'required',
            'work_status' => 'required',
            'work_category'=> 'required'
        ]);

        Works::create($validated);
        return redirect()->route('Works.index')->with(
            'success',
            'Your page has been uploaded. View it here'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Works = Works::find($id);
        // Pass the retrieved data to a view for display
        return view('Works.works', compact('Works'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Works = Works::findOrFail($id);
        return view('Works.edit', compact('Works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'work_title' => 'required',
            'work_body' => 'required',
            'work_category' => 'required',
            'work_status' => 'required'
        ]);

         $Works = Works::findOrFail($id);
         $Works->update($validated);

         return redirect()->route('Works.index')->with(
            'success',
            'Your page has been edited. View it here'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $Works = Works::findOrFail($id);
         $Works->delete();

         return redirect()->route('Works.index')->with(
            'success',
            'Your page has been deleted.'
        );
    }
}
