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
    public function listStudent(){

        //$students = DB::table( "students" )->where("id", 5)->select("name as Név", "email as Levél")->get();
        //$students = DB::table( "students" )->where("email", "like", "%example.net")->get();
        // $students = DB::table( "students" )
        //                 ->where("id", 9)
        //                 ->where("name", "Itzel Walker" )->get();

        // $students = DB::table( "students" )
        //                 ->where("id", 9)
        //                 ->where(function($query) {
        //                     $query->where( "name", "Itzel Walker" )
        //                     ->orWhere("email", "lue.renner@example.net");
        //                 })->get();

        // $students = DB::table( "students" )
        //                 ->where("id", 9)
        //                 ->orWhere("email", "lue.renner@example.net")
        //                 ->get();

        //$students = DB::table( "students" )->whereBetween("id", [2, 6])->get();
        $students = DB::table( "students" )->whereIn("id", [2, 4, 6, 8])->get();
        echo "<pre>";
        print_r($students);
        //SELECT * from students where id = 9 AND name = "Itzel Walker" OR email="lue.renner@example.net"
    }
}
