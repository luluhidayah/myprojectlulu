<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Film</title>
</head>
<body>
    <h1> Data Semua Film </h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>duration</th>
        </tr> 

        <?php $i = 1;
        foreach ($semuafilm as $film) : ?>
        <tr>

        <td><?= $i++; ?></td>
        <td>
            <img width="80px" src="/assets/cover/<?=$film['cover'] ?>" alt="">
        </td>
                <td><?= $film['nama_film']; ?></td>
                <td><?= $film['genre']; ?></td>
                <td><?= $film['duration']; ?></td>
        </tr>
        <?php endforeach; ?>
</body>
</html>




    //ini yang bener
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LK 8080</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 8080</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data Film</h1>
<div class="contrainer">
    <div class="row">

        <?php foreach ($semuafilm as $film) :?>
        <div class="col-md-3 mb-3">
            <div class="card">
            <img src="/assets/cover/<?= $film['cover'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$film['nama_film']?></h5>
                    <p class="card-text"><?=$film ['genre']?> || <?=$film['duration'] ?></p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
        <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>


//index
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>Nama Film</th>
            <th>Genre</th>
            <th>duration</th>
        </tr>  
        
        <?php foreach ($films as $film) : ?>
            <tr>
                <td><?= $film['nama_film']; ?></td>
                <td><?= $film['genre']; ?></td>
                <td><?= $film['duration']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
            
</body>
</html>



//semuafilm.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LK 8080</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 8080</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/genre">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data Film</h1>
<div class="contrainer">
    <div class="row">

        <?php foreach ($semuafilm as $film) :?>
        <div class="col-md-3 mb-3">
            <div class="card">
            <img src="/assets/cover/<?= $film['cover'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$film['nama_film']?></h5>
                    <p class="card-text"><?=$film ['genre']?> || <?=$film['duration'] ?></p>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Update</a>
                    <a href="#" class="btn btn-warning">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
</div>
        <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>

  //film.php<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\FilmModel;

class Film extends BaseController
{   
    //step 2
    protected $film;

    //step3
    public function __construct()
    {
        $this -> film = new FilmModel();
    }

    public function index()
    {
        $data['films'] = $this -> film -> getFilm();
        return view("film/index", $data); 
    }
    
    //membuat metode film
    public function all()
    {
        $data['semuafilm']=($this->film->getAllData());
        return view("film/semuafilm", $data);
    }

}

