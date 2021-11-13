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
          <img src="./assets/img/uk/bridge.jpg" class="d-block w-100" alt="LondonTowerBridge_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>タワーブリッジ</h3>
          <p>ロンドンのテムズ川に架かるタワーブリッジ</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/uk/london.jpg" class="d-block w-100" alt="LondonBus_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>ロンドンバス</h3>
          <p>イギリスに来たら一度は乗ってみたい</p>
          </div>
      </div>
      <div class="carousel-item">
          <img src="./assets/img/uk/military.jpg" class="d-block w-100" alt="LondonMilitaryParade_Picture">
          <div class="carousel-caption d-none d-md-block">
          <h3>衛兵隊パレード</h3>
          <p>イギリスのパレードといえば、バグパイプの行進</p>
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