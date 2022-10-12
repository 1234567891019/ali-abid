<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = student::all();//the all fuction we use for fetch all the data from the DB hence we can also use get function in it. The difference Between all and get function is in get we can get sepicfic data but in all we can hence the code to get specific data is 
      //$students= student::where('name ', 'abc') ->get() 
return view('home',['students'=>$students]);
    }

    /**
     * Show the fo'rm for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student = new student;
        $student->name = $request->name; 
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status','student added!!');
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
        $student = student ::find($id);//find function works on to find the data at it will implement on the primary key. For example you want to fetch the data by name you have to off the primary key of find method and you can find any thing by name or without primary key.
        return view('editform',['student'=>$student]);
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
        $student = student::find($id);
        $student->name = $request->name; 
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status','student updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//This function is used delete the file. If you are using soft delete then that function is not helpful and when you are building the data or crud without soft delete then you can use this function.
    {
        student::destroy($id); 
        return redirect(route('index'))->with('status','student move to trash!!');
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
