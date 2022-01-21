<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students; //include the model class in the controller class

class ProjectController extends Controller
{
   public function index(){
       $students = students::all(); //all() function will retrive all the data in student table, using student model
       return view('students.index', compact('students')); //compact method convert the variable into an array
   }

   public function create(){
       return view('students.register');
   }

   //store method will insert data into the students table
   public function store(Request $request){
       $students = new students; //calling the student class model
       //call the table fields and pass some data from the input types array
       //input function get input type name as a parameter
       $students->name = $request->input('name');
       $students->age = $request->input('age'); 
       $students->course = $request->input('course');
       $students->save(); //This save function will save the input data into the database
       return redirect('index')->with('status', 'Data Inserted Successful');
   }

   //print the data in edit from the database
   public function edit($id){
       $students = students::find($id); //find in the students table where the data that correlate with the passed id
       return view('students.edit', compact('students')); //return the view with retrived data from the database
   }

   //update data from the database
   public function update(Request $request, $id){
       $students = students::find($id);
       $students->name = $request->input('name');
       $students->age = $request->input('age');
       $students->course = $request->input('course');
       $students->update();
       return redirect('index')->with('status', 'Update Successful');
   }

   public function delete($id){
       $students = students::find($id);
       $students->delete();
       return redirect('index')->with('status', 'Delete Successful');
   }
}
