<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
   
        protected $table = "genre";
        protected $primaryKey = "id";
        protected $useAutoIncrement = "true";
        protected $allowedFields = [];

        public function getAllData()
        {
            return $this->findAll();
        }
        

        public function getGenre(){
        $data = [
        [
            "nama_genre" => "Horor",
            "created_at" => "",
            "updated_at"  => "" 
        ],
        [
            "nama_genre" => "Advanture",
            "created_at" => "",
            "updated_at"  => "" 
        ],
        [
            "nama_genre" => "Drama",
            "created_at" => "",
            "update_at"  => "" 
        ],
        [
            "nama_genre" => "Romance",
            "created_at" => "",
            "updated_at"  => "" 
            
        ],
        [
            "nama_genre" => "Action",
            "created_at" => "",
            "updated_at"  => "" 
        ],
        [
            "nama_genre" => "Religi",
            "created_at" => "",
            "updated_at"  => "" 
        ],
        [
            "nama_genre" => "Comedy",
            "created_at" => "",
            "updated_at"  => "" 
        ],
        [
            "nama_genre" => "Petualangan",
            "created_at" => "",
            "updated_at"  => ""  
        ],
        [
            "nama_genre" => "Animation",
            "created_at" => "",
            "updated_at"  => ""  
        ],
        [
            "nama_genre" => "Fantasi",
            "created_at" => "",
            "updated_at"  => "" 
        ]
        ];
        return $data;
        }
    }