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
       $students->name = $request->input('name');
       $students->age = $request->input('age'); 
       $students->course = $request->input('course');
       return redirect('index');  
   }
}
