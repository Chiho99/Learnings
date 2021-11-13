<?php
// 11
$x = 3;
$y = 2;
if($x > $y){
    echo 'xはyより大きい';
}
echo '<br>';
// 12
$x = 3;
$y = 5;
if($x >= $y){
    echo 'xはy以上';
}elseif($x < $y){
    echo 'xはyより小さい';
}
echo '<br>';
// 13
$x = 3;
$y = 10;
if($x > $y){
    echo 'xはyより大きい';
}elseif($x < $y){
    echo 'xはyより小さい';
}elseif($x = $y){
    echo 'xとyは等しい';
}
echo '<br>';
// 14
$x = 6;
if($x%2 == 0){
    echo $x.'は偶数です。';
}else{
    echo $x.'は奇数です。';
}
echo '<br>';
// 15
$x = 12;
if($x % 3 == 0){
    echo '3の倍数です';
}elseif($x % 5 == 0){
    echo '5の倍数です';
}else{
    echo '3と5の倍数以外です';
}
echo '<br>';
// 16
$x = 18;
if($x >= 10 && $x <= 20){
    echo '10以上かつ20以下です。';
}
echo '<br>';
// 17
$x = 108;
if($x >= 100 || $x <= 10){
    echo '100以上または10以下です';
}  
echo '<br>';
// 18
$x = '男';
switch($x){
    case '男':
        echo 'male';
        break;
    case '女':
        echo 'female';
        break;
    default:
        echo '???';
    break;
}
echo '<br>';
// 19
$x = 11;
switch($x){
    case 1:
        echo 'January';
        break;
    case 2:
        echo 'February';
        break;
    case 3:
        echo 'March';
       break;
    case 4:
        echo 'April';
        break;
    case 5:
        echo 'May';
        break;
    case 6:
        echo 'June';
        break;
    case 7:
        echo 'July';
        break;
    case 8:
        echo 'August';
        break;
    case 9:
        echo 'September';
        break;
    case 10:
        echo 'October';
        break;
    case 11:
        echo 'November';
        break;
    case 12:
        echo 'December';
        break;
    default:
        echo '月が存在しません';
}
echo '<br>';
echo '<br>';
echo '<br>';