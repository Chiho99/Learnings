
<?php
    // function nexseed($greeting, $name){
    //     echo $greeting.'、'.$name.'さん';
    //     echo '<br>';
    // }
    nexseed('こんにちは', 'たろう');

    function plus($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }
    echo '加算の結果は'.plus(30, 20).'です';
    echo '<br>';

    $sum = plus(30, 20);
    echo '合計は'.$sum.'です';

    function checkExam($score){
        if($score > 80){
            return '合格!';
        }else{
            return '不合格';
        }
    }
    $result = checkExam(70);
    echo $result;

    function nexseed($greeting, $name){
        $result = $greeting. '、'.$name.'さん';
        return $result;
    }
    $result = nexseed('hello', 'seedくん');

    // 演習問題
    function multiplication($num1, $num2){
        $result = $num1*$num2;
        return $result;
    }
    $result = multiplication(2, 3);
    echo $result;
    echo '<br>';

    function ave($num1, $num2){
        $sum = $num1 + $num2;
        if($sum*0.5 >= 10){
            return $sum*0.5;
        }else{
            return 0;
        }
    }
    echo ave(10,15);
    echo '<br>';

    function charge($wallet, $price){
        $total = $wallet - $price;
        return $total;
    }
    echo charge(2000, 1000);

    function maximum($num1, $num2){
        if($num1 >= $num2){
            return $num1;
        }else{
            return $num2;
        }
        echo maximum(3, 9);
        echo '<br>';

    }

    function printHoge(){
        echo 'Hoge';
        echo '<br>';
    }
     printHoge();

    function printNum($num){
         echo $num;
         echo '<br>';
    }
    printNum(3);

    function printKuku($num1){
        for($i = 1; $i <= 9; $i++){
            echo $num1*$i;
            echo '<br>';
        }
    }
    printKuku(3);

    function printIsEven($num){
        if($num%2 === 0){
            echo '偶数です';
        }else{
            echo '奇数です';
        }
    }
    printIsEven(4);

    function printMessage($str, $int){
        for($i = 0; $i < $int; $i++){
            echo '<br>';
            echo $str;
            echo '<br>';
        }
    }
    printMessage("ABC", 3);   
    
    function printMaxNum($num1, $num2){
        if($num1 > $num2){
            return $num1;
        }elseif($num2 > $num1){
            return $num2;
        }else{
            return '同じ';
        }
    }
    echo printMaxNum(10, 20);
    echo '<br>';

    function getSquared($num){
        $result = pow($num, 2);
        return $result;
    }
    $result = getSquared(4);
    echo $result;
    echo '<br>';

    function createSelfIntroductionText($str){
        return '私の名前は'.$str.'です';
    }
    echo createSelfIntroductionText('Nexseed');

    function isEvenNumber($num){
        if($num % 2 === 0){
            return 'true';
        }else{
            return 'false';
        }
    }
    echo  isEvenNumber(3);
    echo '<br>';

    function isSeedKun($str){
        if($str === 'SeedKun'){
            return 'true';
        }else{
            return 'false';
        }
    }
    echo isSeedKun('SeedKun');
?>