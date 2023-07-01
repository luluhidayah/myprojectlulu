<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\SayurModel;

class Sayur extends BaseController
{   
    //step 2
    protected $sayur;

    //step3
    public function __construct()
    {
        $this -> sayur = new SayurModel();
    }

    public function index()
    {
        $data['sayurs'] = $this -> sayur -> getSayur();
        return view("sayur/index", $data); 
    }
  
}
