<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{   // for test 
    public function showStudents (Request $request){
    	$students = Student::all();
    	return view ('students', compact('students'));
    }
    // similar to showForm
    public function showForm (Request $request){
    	return view ('studentRegistration-form');
    }
    // similar to showBooks
    public function processRegistration (Request $request){
    	$students = Student::all();
        return view('studentRegistration-complete', compact('students'));
    }
    // similar to addbook
    public function addStudent (Request $request){
        $student = new Student;
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->middleName = $request->middleName;
        $student->course = $request->course;
        $student->contactPerson = $request->contactPerson;
        $student->contactNumber = $request->contactNumber;
        $student->save();
        return redirect('/studentRegistration-complete'); 
    }

    public function editStudentInfo (Request $request, $id){
         $student = Student::find($id);
         return view('edit', compact('student'));
         //return view('test');
    }

    public function saveStudent (Request $request){
        $id = $request->id;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $middleName= $request->middleName;
        $course = $request->course;
        $contactPerson = $request->contactPerson;
        $contactNumber = $request->contactNumber;

        $student = Student::find($id);
        $student->firstName = $firstName;
        $student->lastName = $lastName;
        $student->middleName = $middleName;
        $student->course = $course;
        $student->contactPerson = $contactPerson;
        $student->contactNumber = $contactNumber;
        $student->save();
        return redirect('/studentRegistration-complete');
    }
 
    public function deleteStudent (Request $request, $id){
        $student = Student::find($id);
        $student->delete();

        return redirect('/studentRegistration-complete');
    }
}
