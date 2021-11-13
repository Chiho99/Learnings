<?php
 $nickname = htmlspecialchars($_POST['nickname']);
 $email = htmlspecialchars($_POST['email']);
 $content = htmlspecialchars($_POST['content']);

$dsn = 'mysql:dbname=pr2_contact_form;host=localhost';
$user = 'root';
$password='';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

$sql = 'INSERT INTO `survey`(`nickname`, `email`, `content`) VALUES ("'. $nickname.'", "'.$email.'", "'.$content.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Contact</title>
</head>
<body>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">お問い合わせありがとうございました！</h5>
        <p class="card-text">
          <!-- <form action="check.php" method="post"> -->
            <div class="contact">
              <div class="info">
                <p>ニックネーム:  <?php echo $_POST['nickname'];?></p>
                <p>メールアドレス:  <?php echo $_POST['email'];?></p>
                <p>お問い合わせ内容:  <?php echo $_POST['content'];?></p>
              </div>   
            </div><br>  
            <div class="button">
             <a href="index.php" class="btn btn-primary" >戻る</a>
            </div>
          <!-- </form> -->
        </p>
    </div>
  </div>
</body>
</html>

