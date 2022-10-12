<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class softdeletecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()//trash is not a build in function of laravel resource controller but this function provides you soft delete function present in laravel. This function creates a trash in the DB name when you delete the data the data is temporary delete and save in trash (Recyclebin) and then you can do permanent delete or temporary delete the data 
    {
        $student = student::onlyTrashed()->get();
        $student = compact('student');
        return view('Trash-data')->with($student);
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
 
    }
    public function restore($id)//This function is used to restore the data from the trash.
    {
        $student=student::withTrashed()->find($id); 
        $student->restore();
        return redirect(route('index'))->with('status','Student Restore!!');
    }
    public function forceDelete($id)//This function is used for permenant delete the data from the DB
    {
        $student=student::withTrashed()->find($id); 
        $student->forceDelete();
        return redirect(route('index'))->with('status','Student Deleted!!');
    }

}



