<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
<?php
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);
?>
    <h1>入力内容確認</h1>
    <?php
    // ニックネーム　
    if($nickname === ' '){
        echo 'ニックネームが入力されていません。';
        echo '<br>';
    }else{
    echo 'ようこそ、'. $nickname.'様';
    echo '<br>';
    }
    // メールアドレス　
    if($email === ' '){
        echo 'メールアドレスが入力されていません。';
        echo '<br>';
    }else{
        echo 'メールアドレス:'.' '. $email;
        echo '<br>';
    } 

    // お問い合わせ内容　
    if($content === ' '){
        echo 'お問い合わせ内容が入力されていません。';
        echo '<br>';
    }else{
        echo 'お問い合わせ内容:'. $content;
        echo '<br>';
    }
    ?>
    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">

        <input type="button" onclick="history.back()" value="戻る">
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
        <input type="submit" value="OK">
        <?php endif; ?>
    </form>
</body>
</html>