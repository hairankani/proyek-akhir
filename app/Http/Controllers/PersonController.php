<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat attribute Name (seharusnya di model)
    private $name = "Hairan Kani Jatnika";

    //Membuat Method Index
    public function index() {
        //Mengembalikan nilai attribute name
        return $this->name;
    }

    public function show($param) {
        //Merubah Attribute name
        $this->name = $param;
        return $this->name;
    }
}
