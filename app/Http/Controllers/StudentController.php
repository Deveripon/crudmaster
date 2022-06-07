<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
   
    
 /**
   * Student Home Page
 */
    public function index()
    {
       $students = students::latest() -> get();
        return view ('Student.index',[
         'students' => $students 
        ]);
    }


/**
 * Student Create Page
*/
public function create()
{
   return view('student.create');
}




/**
 * Student single data show
*/
public function show($id)
{
  $student_data = Students::findOrFail($id);
  return view('student.show',[
    'student_data'  => $student_data
  ]);
}



// /**
//  * Student data edit
// */
public function edit($id)
{
  $edit_data = students::findOrFail($id);
  return view('student.edit',[
      'edit_data' => $edit_data
  ]);
}

/**
 * Student Data Update
*/

public function update(Request $request ,$id)
{
  if($request -> hasFile('photo')){

    $file = $request -> file('photo');
    $file_name = md5('date().rand()').'.'.$file -> clientExtension();
    $file -> move(public_path('assets/media/img/uploaded_img'),$file_name);

  }else{
    $file_name = null;
  }

  $update_data = students::findOrFail($id);
  $update_data -> update([
    'name'          => $request -> name,
    'email'         => $request -> email,
    'cell'          => $request -> cell,
    'username'      => $request -> username,
    'age'           => $request -> age,
    'gender'        => $request -> gender,
    'education'     => $request -> education,
    'courses'       => json_encode($request -> courses),
    'photo'         => $file_name
  ]);

  return back()-> with('success','Data updated successfully');

}




/**
 * Student Data Delete
*/
public function destroy($id)
{
  $student_delete = Students::findOrFail($id);
  $student_delete -> delete();
  
  return back()-> with('success','Data deleted successfully');
}















/**
 * Student Data Store To database
*/

public function store(Request $request)
{

  /**
   * Photo Upload Feature
  */
  if($request -> hasFile('photo')){

    $file = $request -> file('photo');
    $file_name = md5('date().rand()').'.'.$file -> clientExtension();
    $file -> move(public_path('assets/media/img/uploaded_img'),$file_name);

  }else{
    $file_name = null;
  }



  /**
   * Form Valiation
  */

  $this -> validate($request,[

    'name'        => 'required',
    'email'       => 'required|email|unique:students',
    'cell'        => 'required|numeric|starts_with:01,8801,+8801|digits_between:11,16|unique:students',
    'username'    => 'required|min:8|max:14|unique:students',
    'age'         => 'required|numeric',
    'gender'      => 'required',
    'education'   => 'required',

  ],
    /**
   * Form error custom massage
  */

  [
   'name.required' => 'নামের ঘরটি পূরণ করুন',
   'email.required' => 'ইমেইলের ঘরটি পূরণ করুন',
   'cell.required' => 'নাম্বারের ঘরটি পূরণ করুন',
   'username.required' => 'ইউজার নেমের ঘরটি পূরণ করুন',
   'age.required' => 'বয়সের ঘরটি পূরণ করুন',
   'gender.required' => 'লিঙ্গের ঘরটি পূরণ করুন',
   'education.required' => ' এডুকেশনের ঘরটি পূরণ করুন',


  ]);
  students::create([
    'name'          => $request -> name,
    'email'         => $request -> email,
    'cell'          => $request -> cell,
    'username'      => $request -> username,
    'age'           => $request -> age,
    'gender'        => $request -> gender,
    'education'     => $request -> education,
    'courses'       => json_encode($request -> courses),
    'photo'         => $file_name
  ]);



  return back()->with('success','Student Data Added Successfully!');

}




}