<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
   
        protected $table = "film";
        protected $primaryKey = "id";
        protected $useAutoIncrement = "true";
        protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];
        

        public function getFilm(){
        $data = [
        [
            "nama_film" => "5 CM",
            "genre"     => "advanture",
            "duration"  => "1 Jam 2 Menit" 
        ],
        [
            "nama_film" => "Transformers",
            "genre"     => "action",
            "duration"  => "2 Jam 8 Menit" 
        ],
        [
            "nama_film" => "Mumun",
            "genre"     => "Horor",
            "duration"  => "1 Jam 20 Menit" 
        ],
        [
            "nama_film" => "Fast and Forious",
            "genre"     => "Horor",
            "duration"  => "5 Jam 2 Menit" 
        ],
        [
            "nama_film" => "2012",
            "genre"     => "Drama",
            "duration"  => "3 Jam 8 Menit" 
        ],
        [
            "nama_film" => "The Raid",
            "genre"     => "Action",
            "duration"  => "2 Jam 2 Menit" 
        ],
        [
            "nama_film" => "Avanger",
            "genre"     => "Action",
            "duration"  => "2 Jam 8 Menit" 
        ],
        [
            "nama_film" => "Hati Suhita",
            "genre"     => "Drama",
            "duration"  => "2 Jam 20 Menit" 
        ],
        [
            "nama_film" => "KKN di Desa Penari",
            "genre"     => "Horor",
            "duration"  => "2 Jam 2 Menit" 
        ],
        [
            "nama_film" => "Anabele",
            "genre"     => "Horor",
            "duration"  => "2 Jam 5 Menit" 
        ]
        ];
        return $data;
        }
        public function getAllDataJoin(){
            $query = $this->db->table("film")
            ->select("film.*, genre.nama_genre")
            ->join ("genre", "film.id_genre = genre.id_genre");
            return $query->get()->getResultArray();
        }
        

        //findALL()
        public function getAllData(){
            return $this->findAll();
         }
        //find($id)
         public function getDataByID($id){
             return $this->find($id);
         }
         //where($column, $value)
         public function getDataBy($data){
             return $this->where("genre", $data)->findAll();
         }
        //orderBy($column, $order)
         public function getOrderBy(){
             return $this->orderBy("created_at","desc")->findAll();
         }
        //limit($limit, $offset)
         public function getLimit(){
             return $this->limit(5)->get()->getResultArray();
        }
    }
 
