<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>
<body>
<?php
     $nickname = htmlspecialchars($_POST['nickname']);
     $email = htmlspecialchars($_POST['email']);
     $content = htmlspecialchars($_POST['content']);
   
     // １．データベースに接続する
     $dsn = 'mysql:dbname=php_hw_selfstudy;host=localhost';
     $user = 'root';
     $password='';
     $dbh = new PDO($dsn, $user, $password);
     $dbh->query('SET NAMES utf8');
   
     // ２．SQL文を実行する
     $sql =  'INSERT INTO `survey_selfstudy`(`nickname`, `email`, `content`) VALUES ("'. $nickname.'", "'.$email.'", "'.$content.'")';
     $stmt = $dbh->prepare($sql);
     $stmt->execute();
   
     // ３．データベースを切断する
     $dbh = null;
   ?>
    <h1>お問い合わせありがとうございました！</h1>
    <div>
        <h3>お問い合わせ詳細内容</h3>
            <p>ニックネーム:<?php echo $nickname; ?></p>
            <p>メールアドレス:<?php echo $email; ?></p>
            <p>お問い合わせ内容:<?php echo $content; ?></p>
    </div>
</body>
</html>