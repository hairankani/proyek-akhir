<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat attribute Name (seharusnya di model)
    private $name = "Hairan Kani Jatnika";
    private $nrp = "200914016";

    private $code = "200914016";
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;

    //Membuat Method Index
    public function index() {
        //Mengembalikan nilai attribute name
        return view('person.index');
    }

    public function sendData() {
        //Merubah Attribute name
        $nrp = $this->nrp;
        $name = $this->name;

        return view("person.send-data", compact("nrp", "name"));
    }

    public function myCourse($task, $quiz, $grade) {
        $this->task = $task;
        $this->quiz = $quiz;
        $grade = $this->calculateGrade();

        return view("person.my-course", compact('task', 'quiz', 'grade'));
    }

    private function calculateGrade(){
        $grade = (($this->task * 0.1) + ($this->task * 0.1));
        return $grade;
    }
}
