<?php 
include('./refactor/head.php'); 
// require_once('./function/Trip.php');

?>
<body>
    <?php include('./refactor/header.php'); ?>
  <main>
    <div class="slide">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="./assets/img/france/louvre.jpg" class="d-block w-100" alt="LouvreMuseum_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>ルーブル美術館</h3>
          <p>世界で最も来館者の多い美術館で、パリ屈指の美術館</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/france/tourdefrance.jpg" class="d-block w-100" alt="TourDeFrance_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>ツールド・フランス</h3>
          <p>毎年7月はツールド・フランス！</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/france/triumphal_arch.jpg" class="d-block w-100" alt="TriumphalArch_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>エトワール凱旋門</h3>
          <p>フランスに来たら、シャンゼリゼ通り</p>
          </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>
    </div>  
  </main>
<?php include('./refactor/footer.php');?>