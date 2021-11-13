<?php
$dsn = 'mysql:dbname=pr2_contact_form;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

while (1) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec == false) {
      break;
    }
    echo ' <div class="card">';
    echo $rec['id'] . '<br>';
    echo $rec['nickname'] . '<br>';
    echo $rec['email'] . '<br>';
    echo $rec['content'] . '<br>';
    echo '</div>';
  }

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
      <h5 class="card-title">お問い合わせ情報入力</h5>
        <p class="card-text">
          <form action="check.php" method="post">
            <div class="contact">
              <div class="info">
                <p>ニックネーム</p>
                  <input type="text" name="nickname" id="nickname">
                <p>メールアドレス</p>
                  <input type="email" name="email" id="email">
                <p>お問い合わせ内容</p>
                  <input type="textarea" name="content" id="content">
              </div>   
            </div><br>  
            <div class="button">
             <button type="submit" class="btn btn-primary">入力完了</button>
            </div>
          </form>
        </p>
    </div>
  </div>
</body>
</html>