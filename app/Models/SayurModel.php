<?php

namespace App\Models;

use CodeIgniter\Model;

class SayurModel extends Model
{
   
   public function getSayur(){
        $data = [
        [
            "nama_sayur" => "Bawang Bombay",
            "price"     => "Rp. 20,000",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Bawang Merah",
            "price"     => "Rp. 13,500",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Bawang Putih",
            "price"     => "Rp. 18,000",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Bayam Hijau",
            "price"     => "Rp. 8,000",
            "satuan"  => "Kg"  
        ],
        [
            "nama_sayur" => "Biet",
            "price"     => "Rp. 14,000",
            "satuan"  => "Kg"  
        ],
        [
            "nama_sayur" => "Brokoli",
            "price"     => "Rp. 16,500",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Bunga Kol",
            "price"     => "Rp. 18,900",
            "satuan"  => "Kg"  
        ],
        [
            "nama_sayur" => "Buncis Baby",
            "price"     => "Rp. 13,500",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Cace Kriting Merah",
            "price"     => "Rp. 22,500",
            "satuan"  => "Kg" 
        ],
        [
            "nama_sayur" => "Sawi",
            "price"     => "Rp. 8000",
            "satuan"  => "Kg" 
        ]
    ];
    return $data;
   }
} 

