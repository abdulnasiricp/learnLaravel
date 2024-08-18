<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //

    function getStudent(Request $request)
    {
        return Student::all();

    }

    function addStudent(Request $request)
    {
        $rules = array(
            "name" => "required | min:2 | max:10",
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;


            if ($student->save()) {
                return [
                    "Result" => "Student Added Successfully",
                ];
            } else {
                return [
                    "Result" => "Opration Failled",
                ];


            }


        }


    }

    function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        if ($student->save()) {
            return [
                "Result" => "Student Updated Successfully",
            ];
        } else {
            return [
                "Result" => "Opration Failled",
            ];
        }
    }

    function deleteStudent($id)
    {
        $student = Student::destroy($id);

        if ($student) {
            return [
                "Result" => "Student deleted Successfully",
            ];
        } else {
            return [
                "Result" => "Opration Failled",
            ];
        }
    }

    function searchStudent($name)
    {
        $student = Student::where('name', 'like', "%" . $name . "%")->get();

        if ($student) {
            return [
                "Result" => $student
            ];
        } else {
            return [
                "Result" => "no result found",
            ];
        }
    }
}
