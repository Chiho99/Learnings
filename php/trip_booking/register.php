<?php
require_once('./function/Trip.php');
include('./refactor/head.php');
require_once('./function/Booking.php');

$usa_number = htmlspecialchars($_POST['usa_number']);
$usa_price = htmlspecialchars($_POST['usa_price']);
$usa_total = $usa_number*$usa_price;

$uk_number = htmlspecialchars($_POST['uk_number']);
$uk_price = htmlspecialchars($_POST['uk_price']);
$uk_total = $uk_number*$uk_price;

$ita_number = htmlspecialchars($_POST['ita_number']);
$ita_price = htmlspecialchars($_POST['ita_price']);
$ita_total = $ita_number*$ita_price;

$fra_number = htmlspecialchars($_POST['fra_number']);
$fra_price = htmlspecialchars($_POST['fra_price']);
$fra_total = $fra_number*$fra_price;

$sum_all = $usa_total + $uk_total + $ita_total + $fra_total;
$currentTime = date("Y/m/d H:i:s");
// DBへのデータ保存
$booking = new Booking();
$booking->createBookingTable([$sum_all, $currentTime]);

$booking_usa = new Booking();
$booking->createUsaBookingTable([$usa_number, $usa_total, $currentTime]);

$booking_uk = new Booking();
$booking->createUkBookingTable([$uk_number, $uk_total, $currentTime]);

$booking_ita = new Booking();
$booking->createItalyBookingTable([$ita_number, $ita_total, $currentTime]);
$booking_fra = new Booking();
$booking->createFranceBookingTable([$fra_number, $fra_total, $currentTime]);

?>
<body>
  <?php include('./refactor/header.php'); ?>
  <main>
  <div class="card-wrapper">
    <div class="card w-75">
    <div class="card-body">
    <h3 class="card-title">予約内容</h3>
    <form action="thanks.php" method="post">
    <div class="card-text">
        <div class="usa_booking">
          <ul>
          <?php if($usa_number > 0) :?>
            <li>旅行先: <?php echo $usa->getDestinationName(); ?>×<?php echo $usa_number; ?>名</li>
            <li>合計金額: <?php echo number_format($usa_total).'円'; ?></li>
          <?php endif; ?>
          </ul>
        </div> 
        <div class="uk_booking">
          <ul>
          <?php if($uk_number > 0) :?>
            <li>旅行先: <?php echo $uk->getDestinationName(); ?>×<?php echo $uk_number; ?>名</li>
            <li>合計金額: <?php echo number_format($uk_total).'円'; ?></li>
          <?php endif; ?>
          </ul> 
        </div>
        <div class="ita_booking">
          <ul>
          <?php if($ita_number > 0) :?>
            <li>旅行先: <?php echo $italy->getDestinationName(); ?>×<?php echo $ita_number; ?>名</li>
            <li>合計金額: <?php echo number_format($ita_total).'円';?></li>
          <?php endif; ?>
          </ul> 
        </div>    
        <div class="fra_booking">
          <ul>
          <?php if($fra_number > 0) :?>
            <li>旅行先: <?php echo $france->getDestinationName(); ?>×<?php echo $fra_number; ?>名</li>
            <li>合計金額: <?php echo number_format($fra_total).'円'; ?></li>
          <?php endif; ?>
          </ul>
        </div>
        <div class="sum">
          <ul>
            <li><h6>総額: <?php echo number_format($sum_all).'円';?></h6></li>
          </ul>
        </div>
    </div><br>
    <div class="submit_btn">
      <button type="submit" class="btn btn-primary">予約完了</button>
    </div>
    </form> 
  </div>
</div>
  </div>
  </main>
  <?php include('./refactor/footer.php');?>