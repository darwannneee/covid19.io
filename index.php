<?php 

$url = file_get_contents('https://data.covid19.go.id/public/api/update.json');
$data = json_decode($url, true);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Css Local -->
    <link rel="stylesheet" href=" index.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Oxygen:wght@700&family=Quicksand&display=swap" rel="stylesheet">

  <!-- API Corona -->
<!-- Akhir Dari API Corona -->


    <title>Covid-19</title>
  </head>
  <body>
      
      <!-- Hello -->
      <div class="row">
        <div class="col">
          <h1 id="hello">Hello,</h1>
          <h1 id="nama">Darwan.</h1>
        </div>
      </div>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner negara">
    <div class="carousel-item active">
      <div id="positif">
        <div class="col-6">
          <img src="img/bacteria.png" class="img" alt="">
        </div>
        <div class="col-6 kata">
          <p class="judul">Positif <span id="terjangkit"></span></p>
          <p class="isi"><?php  echo $data[0]['jumlah_positif'] ?></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div id="sembuh">
        <div class="col-6">
          <img src="img/bacteria.png" class="img" alt="">
        </div>
        <div class="col-6 kata">
          <p class="judul">Sembuh</p>
          <p class="isi"><?php  echo $data['update']['sembuh'] ?></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
     <div id="meninggal">
       <div class="col-6">
          <img src="img/man.png" class="img" alt="">
        </div>
        <div class="col-6 kata">
          <p class="judul">Meninggal</p>
          <p class="isi"><?php  echo $data[0]['meninggal'] ?></p>
        </div>
     </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
