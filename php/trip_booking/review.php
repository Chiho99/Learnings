<?php 
include('./refactor/head.php'); 
require_once('./function/Trip.php');

?>
<body>
    <?php include('./refactor/header.php'); ?>
  <main>
    <div class="card-wrapper">
      <div class="card" style="width: 18rem;">
        <!-- usa -->
        <img src="./assets/img/usa.jpg" class="bd-placeholder-img card-img-top" alt="SanFranciso_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
                <h5><a href="usa.php"><?php echo $usa->getDestinationName(); ?></a></h5>
                <span>その他の都市</span>
            </p>
        </div>
        </div>
        <!-- uk -->
        <div class="card" style="width: 18rem;">
        <img src="./assets/img/uk.jpg" class="bd-placeholder-img card-img-top" alt="London_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
                <h5><a href="uk.php"><?php echo $uk->getDestinationName(); ?></a></h5>
                <span>その他の都市</span>
            </p>
        </div>
        </div>
        <!-- italy -->
        <div class="card" style="width: 18rem;">
        <img src="./assets/img/italy.jpg" class="bd-placeholder-img card-img-top" alt="Venice_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
            <h5><a href="italy.php"><?php echo $italy->getDestinationName(); ?></a></h5>
            <span>その他の都市</span>   
            </p>
        </div>
        </div>
        <!-- france -->
        <div class="card" style="width: 18rem;">
        <img src="./assets/img/france.jpg" class="bd-placeholder-img card-img-top" alt="Paris_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
            <h5><a href="france.php"><?php echo $france->getDestinationName(); ?></a></h5>
            <span>その他の都市</span>
            </p>
        </div>
        </div>
    </div>
  </main>
<?php include('./refactor/footer.php');?>