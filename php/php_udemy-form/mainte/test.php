<?php

$contactFile = '.contact.dat';

// 1.
// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);

echo $fileContents;

$addText = 'テストです'. '<br>';
// ファイルに書き込み(上書き)
// file_put_contents($contactFile, $addText);

// file_put_contents(ファイル名, 読み込む内容, 追記);
file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file, 区切る explode, foreach

$allData = file($contactFile);

foreach($allData as $lineData){
    $lines = explode(',', $lineData);
    echo $lines[0]. '<br>';
    echo $lines[1]. '<br>';
    // echo $lines[2]. '<br>';
}

// 2.
// $contents = fopen($contactFile, '+a');
// $addText = '1行追加'. '\n';

// fwrite($contents, $addText);

// fclose($contents);