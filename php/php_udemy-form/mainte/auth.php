<?php
// パスワードを記録したファイルの場所
    echo __FILE__;
    // C:\Users\chiho\Desktop\xampp\htdocs\php_udemy\mainte\auth.php
    echo '<br>';
    // パスワード(暗号化）
    // 組み込み関数 password_hash(パスワード、暗号化の種類)
    echo(password_hash('password123', PASSWORD_BCRYPT));
    
?>