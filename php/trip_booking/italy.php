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
          <img src="./assets/img/italy/amalfitana.jpg" class="d-block w-100" alt="Amalfitana_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>アマルフィ</h3>
          <p>地中海の楽園</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/italy/colosseum.jpg" class="d-block w-100" alt="Colosseum_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>コロッセオ</h3>
          <p>絶対に外せないローマ古代建築</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/italy/pizza.jpg" class="d-block w-100" alt="Pizza_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>グルメ</h3>
          <p>地中海グルメを堪能</p>
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