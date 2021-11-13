<!-- 一つのファイルで条件分岐させてフォームを表示 -->
<?php 
session_start();
include_once('validation.php');

header('X-FRAME-OPTIONS:DENY');
    function h($str){
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    // var_dump($_POST);
    $pageFlag = 0;
    $errors = validation($_POST);
    // var_dump($errors);
    // エラーメッセージが空だったら、画面遷移
    if(!empty($_POST['btn_confirm']) && empty($errors)){
        $pageFlag = 1;
    }
    if(!empty($_POST['btn_submit'])){
        $pageFlag = 2;
    }
    var_dump($_POST);
?>

<!-- 入力、確認、完了 input.php/confirm.php/thanks.php -->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
    <?php if($pageFlag === 1): ?>
        <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
            <form method="POST" action="input.php">
                氏名
                <?php echo h($_POST['your_name']); ?>
                <br>
                メールアドレス
                <?php echo h($_POST['email']); ?>
                ホームページ
                <?php echo h($_POST['url']); ?>
                <br>
                性別
                <?php 
                    if($_POST['gender'] === '0'){
                        echo '男性';
                    }
                    if($_POST['gender'] === '1'){
                        echo '女性';
                    }; 
                ?>
                <br>
                年齢
                <?php 
                    if($_POST['age'] === '1'){
                        echo '～19歳';
                    }elseif($_POST['age'] === '2'){
                        echo '20歳～29歳';
                    }elseif($_POST['age'] === '3'){
                        echo '30歳～39歳';
                    }elseif($_POST['age'] === '4'){
                        echo '40歳～49歳';
                    }elseif($_POST['age'] === '5'){
                        echo '50歳～59歳';
                    }elseif($_POST['age'] === '6'){
                        echo '60歳～';
                    }
                ?>
                <br>
                お問い合わせ内容
                <?php echo h($_POST['contact']); ?>
                <input type="submit" name="back" value="戻る">
               
                <!-- btn_confirm/btn_submitもないので$pageFlag = 0 で戻る-->
                <input type="submit" name="btn_submit" value="送信する">
                
                
                <!-- 隠しながら値をもたせる -->
                <input type="hidden" name="your_name" value=" <?php echo h($_POST['your_name']); ?>">
                <input type="hidden" name="email" value=" <?php echo h($_POST['email']); ?>">
                <input type="hidden" name="url" value="<?php echo h($_POST['url']); ?>">
                <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
                <input type="hidden" name="age" value="<?php echo h($_POST['age']); ?>">
                <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>">
                <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
            </form>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($pageFlag === 2): ?>
        <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
            送信が完了しました。
            <?php unset($_SESSION['csrfToken']); ?>
        <?php endif; ?>
    <?php endif; ?>    

<!-- 一番最初のページ -->
    <?php if($pageFlag === 0): ?>
        <?php 
        // もし'csrfTokenがセットされていなかったら
            if(!isset($_SESSION['csrfToken'])){
                // <!-- 引数には24か32を入れる -->
                //  <!-- 16進数 hexに変換する -->
                $csrfToken = bin2hex(random_bytes(32));
                $_SESSION['csrfToken'] = $csrfToken;
            }
            $token = $_SESSION['csrfToken'];
        ?>

    <!-- btn_confirmが押されていて、$errorが空でないとき -->
        <?php if(!empty($_POST['btn_confirm']) && !empty($errors)): ?>
            <ul>
                <?php foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
                <?php endforeach ?>
            </ul>
                <?php endif; ?>    
        <!-- 入力 -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="input.php">
                        <div class="form-group">
                            <label for="your_name">氏名</label> 
                            <?php if(!empty($_POST['your_name'])): ?>
                                <input type="text" class="form-control" id="your_name" name="your_name" value=" <?php echo h($_POST['your_name']); ?>" required>
                            <?php else: ?> 
                                <input type="text" class="form-control" id="your_name" name="your_name" value="" required>
                            <?php endif; ?>
                        </div>    
                            <br>
                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                            <?php if(!empty($_POST['email'])): ?>
                                <input type="email" class="form-control" id="email" name="email" value=" <?php echo h($_POST['email']); ?>" required>
                            <?php else: ?> 
                                <input type="email" class="form-control" id="email" name="email" value="" required>  
                            <?php endif; ?>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="url">ホームページ</label>
                            <?php if(!empty($_POST['url'])): ?>
                                <input type="url" class="form-control" id="url" name="url" value=" <?php echo h($_POST['url']); ?>">
                            <?php else: ?> 
                                <input type="url" class="form-control" id="url" name="url" value="">
                            <?php endif; ?>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">性別
                            <input class="form-check-input" id="gender1" type="radio" name="gender" value="male">
                            <label class="form-check-label" for="gender1">男性</label>
                            <input type="radio" name="gender" value="female">
                            <label class="form-check-label" for="gender1">女性</label>
                            </div>
                            <br>
                            <div class="form-group">
                            <label for="age">年齢</label> 
                            <select class="form-control" id="age" name="age">
                                <option value="">選択してください</option>
                                <option value="1">～19歳</option>
                                <option value="2">20歳～29歳</option>
                                <option value="3">30歳～39歳</option>
                                <option value="4">40歳～49歳</option>
                                <option value="5">50歳～59歳</option>
                                <option value="6">60歳～</option>
                            </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="contact">お問い合わせ内容</label>
                            <?php if(!empty($_POST['contact'])): ?>
                                <textarea class="form-control" id="contact" rows="3" name="contact" value="<?php echo h($_POST['contact']); ?>"></textarea>
                            <?php else: ?>    
                                <textarea class="form-control" id="contact" rows="3" name="contact" value=""></textarea>
                            <?php endif; ?>
                            </div>
                            <br>
                            
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="caution" name="caution" value="1">注意事項に同意する
                            <br>
                            <button type="button" class="btn btn-info" type="submit" name="btn_confirm" value="確認する"> 
                            <label class="form-check-label" for="caution">確認する</label>
                            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
                            </div>
                            </div>
                            </div>
                    </form>
    <?php endif; ?>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>