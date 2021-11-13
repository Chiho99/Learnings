<?php
// 51
function printHoge(){
    echo 'Hoge';
}
printHoge();
echo '<br>';

// 52
function printNum($num){
    echo $num;
}
printNum(3);
echo '<br>';

// 53
function printKuku($num){
    for($i = 1; $i < 10; $i++){
        echo $num * $i.'<br>';
    }
}
printKuku(3);
echo '<br>';

// 54
function printIsEven($num){
    if($num % 2 == 0){
        echo '偶数です';
    }else{
        echo '奇数です';
    }
}
printIsEven(1);
echo '<br>';

// 55
function printMessage($str, $num){
    for($i = 1; $i <= $num; $i++){
        echo $str.'<br>';
    }
}
printMessage('Hello', 5);
echo '<br>';

// 56
function printMaxNum($num1, $num2){
    if($num1 > $num2){
        echo $num1;
    }elseif($num1 == $num2){
        echo '同じと出力する';
    }else{
        echo $num2;
    }
}
printMaxNum(2, 5);
echo '<br>';

// 57
function getSquared($num){
    return pow($num, 2);
}
$double = getSquared(3);
echo $double;
echo '<br>';
// 58
function createSelfIntroductionText($str){
    return '私の名前は'. $str. 'です';
}
$intro = createSelfIntroductionText('Jack');
echo $intro;
echo '<br>';

function isEvenNumber($num){
    if($num % 2 == 0){
        return 'true';
    }else{
        return 'false';
    }
}
$even = isEvenNumber(3);
echo $even;
echo '<br>';

function isSeedKun($str){
    if($str === 'SeedKun'){
        return 'true';
    }else{
        return 'false';
    }
}
$seed = isSeedKun('SeedKun');
echo $seed;