<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body>
    <form action="practice_1/check.php" method="POST" >
        <h1>お問い合わせ情報の入力</h1>
            <div>ニックネーム <br>
                    <input type="text" name="nickname" id="">
            </div>
            <div>メールアドレス <br>
                    <input type="text" name="email" id="">
            </div>
            <div>お問い合わせ内容 <br>
                    <textarea name="content" id=""></textarea>
            </div> <br>
            <div>
                    <input type="submit" value="送信">
            </div>                
    </form>         
</body>
</html>