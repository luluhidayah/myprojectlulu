<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\GenreModel;

class Genre extends BaseController
{   
    //step 2
    protected $genre;

    //step3
    public function __construct()
    {
        $this -> genre = new GenreModel();
    }

    public function index()
    {
        $data['genres'] = $this -> genre -> getGenre();
        return view("genre/index", $data); 
    }

    public function all()
    {
        $data['semuagenre'] = $this -> genre -> getAllData();
        return view("genre/semuagenre", $data); 
    }
    
}