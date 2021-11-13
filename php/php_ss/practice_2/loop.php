<?php
// 21
for($x = 1; $x <= 10; $x++){
    echo $x.'hoge'. '<br>';
}
// 22
for($i = 1; $i <= 10; $i++){
    echo $i.'<br>';
}
// 23
for($i = 1; $i < 10; $i++){
    echo 2 * $i. '<br>';
}
// 24
for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo $i.'<br>';
    }
}
// 25
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo '奇数です'.'<br>';
    }else{
        echo $i.'<br>';
    }
}
// 26
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo $i.'<br>';
    }
}
// 27
for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
        echo $i.'<br>';
    }
}
// 28
for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0 && $i % 3 == 0){
        echo $i.'<br>';
    }
}
// 29
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo 'Fizz'.'<br>';
    }else{
        echo $i.'<br>';
    }
}
// 30
for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0 && $i % 3 == 0){
        echo 'FizzBuzz' . '<br>';
    }elseif($i % 3 == 0){
        echo 'Fizz'.'<br>';
    }elseif($i % 5 == 0){
        echo 'Buzz'.'<br>';
    }else{
        echo $i.'<br>';
    }
}