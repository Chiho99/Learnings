<?php 
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($array1 as $array){
    echo $array;
    echo '<br>';
}
// echo '<br>';
$array2 = ['A', 'B', 'C', 'D', 'E'];
foreach($array2 as $array){
    echo $array;
    echo '<br>';
}

$animals = [ 'dog', 'fox', 'monkey'];
$animals[] = 'elephant';
foreach($animals as $animal){
    echo $animal;
    echo '<br>';
};
echo '-------------'.'<br>';
$animals[0] = 'cat';
foreach($animals as $animal){
    echo $animal;
    echo '<br>';
};
echo '-------------'.'<br>';
unset($animals[1]);
foreach($animals as $animal){
    echo $animal;
    echo '<br>';
};
echo '-------------'.'<br>';