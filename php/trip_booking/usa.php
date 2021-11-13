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
          <img src="./assets/img/usa/city.jpg" class="d-block w-100" alt="NewYorkCity_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>ニューヨーク</h3>
          <p>世界中から多くの旅行者が訪れる人気観光地</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/usa/nature.jpg" class="d-block w-100" alt="Sedona_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>セドナ</h3>
          <p>癒しとスピリチュアルを感じる大自然</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/usa/statue.jpg" class="d-block w-100" alt="StatueOfLiberty_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>自由の女神像</h3>
          <p>自由の国アメリカを象徴するシンボル</p>
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