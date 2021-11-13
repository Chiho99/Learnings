<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>お問い合わせ情報入力</h1>
    <form method="POST" action="check.php">
      <div>
        ニックネーム<br>
        <input type="text" name="nickname" style="width: 100px">
      </div>
      <div>
        メールアドレス<br>
        <input type="text" name="email" styele="width: 200px">
      </div>
      <div>
        お問い合わせ内容<br>
        <textarea name="content" id="" cols="40" rows="5"></textarea>
      </div>
       <input type="submit" value="送信">
    </form>
</body>
</html>