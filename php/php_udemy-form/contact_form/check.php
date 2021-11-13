<?php
//  echo $_POST['nickname'];
//  echo $_POST['email'];
//  echo $_POST['content'];

 $nickname = htmlspecialchars($_POST['nickname']);
 $email = htmlspecialchars($_POST['email']);
 $content = htmlspecialchars($_POST['content']);

//  ニックネーム　
// $nickname = $_POST['nickname'];
if($nickname == ''){
    echo 'ニックネームが入力されていません。';
    echo '<br>';
}else{
    echo'ようこそ、'.$nickname. '様';
    echo '<br>';
}

// メールアドレス　
// $email = $_POST['email'];
if($email == ''){
    echo 'メールアドレスが入力されていません。';
    echo '<br>';
}else{
    echo 'メールアドレス:' . $email;
    echo '<br>';
}

// お問い合わせ内容　
// $content = $_POST['content'];
if($content == ''){
    echo 'お問い合わせ内容が入力されていません。';
    echo '<br>';
}else{
    echo 'お問い合わせ内容:' . $content;
    echo '<br>';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <form method="post" action="thanks.php">
     <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
     <input type="hidden" name="email" value="<?php echo $email; ?>">
     <input type="hidden" name="content" id="<?php echo $content; ?>">

     <input type="button" onclick="history.back()" value="戻る">
     <?php if ($nickname != '' && $email != '' && $content != ''): ?>
        <input type="submit" value="OK">
     <?php endif; ?>
    </form>
</body>
</html>