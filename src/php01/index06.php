<?php
// function number($a){
//     echo "引数の値は" . $a . "です";
//     return;
// }

// number(2);

function text($number1, $number2){
    return $number1 + $number2;
}

$total = text(2,3);
echo $total;

// function exam($score1, $score2, $score3){
//     $value = $score1 + $score2 + $score3;
//     if($value > 210){
//         echo $value  ."点なので合格です";
//     }else{
//         echo $value . "なので不合格です";
//     }

// }
// echo (exam(60, 80,50));

// function square($base, $height){
//     $area = $base * $height;
//     return $area;
// }

// echo square(5,3);