<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Faculty;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    $lecturers = Lecturer::all();
    return view('lecturers.index', compact('lecturers'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    $faculties = Faculty::all(); // get all faculties
    return view('lecturers.create', compact('faculties'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lecturers',
            'department' => 'required',
             ]);

              Lecturer::create($request->all());

        return redirect()->route('lecturers.index')->with('success', 'Lecturer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        //
        return view('lecturers.edit', compact('lecturer'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //
         return redirect()->route('lecturers.index')->with('success', 'Lecturer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        //
         $lecturer->delete();
         return redirect()->back();
    }
}
