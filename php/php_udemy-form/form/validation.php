<?php
// $data $_POSTで入ってくる連想配列を想定
function validation($data){
    // ローカル変数
    $errors = [];

    // 氏名
    if(empty($data['your_name']) || 20 < mb_strlen($data['your_name'])){
        $errors[] = '「氏名」は20文字以内で入力してください。';
    }
    // メールアドレス
    // 組み込み関数
    if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = '「メールアドレス」は正しい形式で入力してください。';
    }
    // url
    if(!empty($data['url'])){
        if(!filter_var($data['url'], FILTER_VALIDATE_URL)){
            $errors[] = '「ホームページ」は正しい形式で入力してください。';
        }
    }
    // 性別
    // emptyだとゼロでも通ってしまう
    if(!isset($data['gender'])){
        $errors[] = '「性別」は必ず入力してください。';
    }
    // 年齢
    if(empty($data['age']) || 6 < $data['age']){
        $errors[] = '「年齢」は必ず入力してください。';
    }
    // お問い合わせ内容
    if(empty($data['email']) || 200 < mb_strlen($data['contact'])){
        $errors[] = '「お問い合わせ内容」は200文字以内で入力してください。';
    }
    // 注意事項
    if(empty($data['caution']) !== '1'){
        $errors[] = '「注意事項」をご確認ください。';
    }
    return $errors;
}