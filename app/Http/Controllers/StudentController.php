<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function getStudents(){
        $students = DB::select("SELECT * FROM students");
        foreach($students as $student){
            echo $student->name.", ".$student->email.", ".$student->phone."<br>";
        }
    }
    public function getStudent(){
        $students = DB::select("SELECT * FROM students WHERE id = 3");
        foreach($students as $student){
            echo $student->name.", ".$student->email.", ".$student->phone."<br>";
        }
    }
    public function newStudent(){
        $student = DB::insert("INSERT INTO students (name, email, phone) 
                    VALUES (?, ?, ?)", [
                        "Teszt Elek",
                        "elek@valami.hu",
                        "32145678901"
                    ]);
        print($student);
    }
    public function updateStudent(){
        $student = DB::update("UPDATE students SET email = ? WHERE id = 2", ["eszterke@semmi.hu"]);
        print($student);
    }
    public function deleteStudent(){
        $student = DB::delete("DELETE FROM students WHERE name = ?", ["Kathi Béla"]);
        print($student);
    }
}
