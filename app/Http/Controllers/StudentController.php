<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    public function index() {
        $students = Student::orderBy('first_name');

        return view('pages._student-list-for-create', compact('students'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'last_name' => 'required',
            'first_name' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
        ]);

        // if($validator->fails()) {
        //     $products = Student::orderBy('created_at', 'desc');
        //     return view('pages.product-error', ['errors'=>$validator->errors(), 'products'=>$products]);
        // }
        
        $students = Student::create($request->all());

        return view('pages._single-student', ['stud' => $students]);
    }


    public function show($id)
    {
        $student = Student::find($id);
    
        return view('pages.edit', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $students = Student::orderBy('created_at', 'desc');
        
        $student = Student::find($id);
        $student->update($request->all());


        return view('pages._student-list-for-create', ['students'=>$students]);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
    
        return view('pages.students');
    }
}
