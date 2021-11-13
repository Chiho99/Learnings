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
      <h5 class="card-title">入力内容確認</h5>
        <p class="card-text">
          <form action="thanks.php" method="post">
            <div class="contact">
              <div class="info">
                <p>ニックネーム:
                　　<input type="text" name="nickname" id="nickname" value="<?php echo $_POST['nickname'];?>">
                </p>
                <p>メールアドレス:
                　　<input type="email" name="email" id="email" value="<?php echo $_POST['email'];?>">
                </p>
                <p>お問い合わせ内容:
                　　<input type="text" name="content" id="content" value=" <?php echo $_POST['content'];?>">
                </p>
              </div>   
            </div><br>  
            <div class="button">
             <button type="submit" class="btn btn-primary">入力完了</button>
             <a href="index.php" class="btn btn-primary">戻る</a>
            </div>
          </form>
        </p>
    </div>
  </div>
</body>
</html>
