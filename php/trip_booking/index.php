<?php 
include('./refactor/head.php'); 
require_once('./function/Trip.php');

?>

<body>
    <?php include('./refactor/header.php'); ?>
  <main>
    <form action="./register.php" method="post">
    <div class="card-wrapper">     
        <!-- usa -->
      <div class="card" style="width: 18rem;">
        <img src="./assets/img/usa.jpg" class="bd-placeholder-img card-img-top" alt="SanFrancisco_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
                <h5><a href="usa.php"><?php echo $usa->getDestinationName(); ?></a></h5>
                <h6><?php echo $usa->getCity();?></h6>
                <ul>
                  <li>値段: <input type="text" name="usa_price" value="<?php echo $usa->getPrice(); ?>" readonly>円</li>
                  <li>人気: <?php echo $usa->getPopularity();?></li>
                  <li>人数: <input type="number" name="usa_number" value="0"></li>
                </ul>
            </p>
        </div>
      </div>
        <!-- uk -->
      <div class="card" style="width: 18rem;">
        <img src="./assets/img/uk.jpg" class="bd-placeholder-img card-img-top" alt="London_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
            <h5><a href="uk.php"><?php echo $uk->getDestinationName(); ?></a></h5>
            <h6><?php echo $uk->getCity();?></h6>
            <ul>
              <li>値段: <input type="text" name="uk_price" value="<?php echo $uk->getPrice(); ?>" readonly>円</li>
              <li>人気: <?php echo $uk->getPopularity();?></li>
              <li>人数: <input type="number" name="uk_number" value="0"></li>
            </ul>
            </p>
        </div>
      </div>
        <!-- italy -->
        <div class="card" style="width: 18rem;">
        <img src="./assets/img/italy.jpg" class="bd-placeholder-img card-img-top" alt="Venice_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
            <h5><a href="italy.php"><?php echo $italy->getDestinationName(); ?></a></h5>
            <h6><?php echo $italy->getCity();?></h6>
            <ul>
              <li>値段: <input type="text" name="ita_price" value="<?php echo $italy->getPrice(); ?>" readonly>円</li>
              <li>人気: <?php echo $italy->getPopularity();?></li>
              <li>人数: <input type="number" name="ita_number" value="0"></li>
            </ul>
            </p>
        </div>
        </div>
        <!-- france -->
        <div class="card" style="width: 18rem;">
        <img src="./assets/img/france.jpg" class="bd-placeholder-img card-img-top" alt="Paris_Picture" width="100%" height="180">
        <div class="card-body">
            <p class="card-text">
            <h5><a href="france.php"><?php echo $france->getDestinationName(); ?></a></h5>
            <h6><?php echo $france->getCity();?></h6>    
            <ul>
              <li>値段: <input type="text" name="fra_price" value="<?php echo $france->getPrice(); ?>" readonly>円</li>
              <li>人気: <?php echo $france->getPopularity();?></li>
              <li>人数: <input type="number" name="fra_number" value="0"></li>
            </ul>
            </p>
        </div>
        </div>
    </div>
    <div class="submit_btn">
    <button type="submit" class="btn btn-secondary">予約</button>
    </div>
    </form>
  </main>
<?php include('./refactor/footer.php');?>