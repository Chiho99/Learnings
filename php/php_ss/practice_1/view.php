<?php
    // 1.データベースに接続する
    $dsn = 'mysql:dbname=php_hw_selfstudy;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utdf8');

    // 2.SQL文を実行する
    $sql = 'SELECT * FROM `survey_selfstudy`';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) {
          break;
        }
        echo $rec['code'] . '<br>';
        echo $rec['nickname'] . '<br>';
        echo $rec['email'] . '<br>';
        echo $rec['content'] . '<br>';
        echo '<hr>';
      }

    // 3.データベースを切断する
    $dbh = null;

?>