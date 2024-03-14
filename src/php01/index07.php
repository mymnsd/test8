<?php

// $people =[
//     [
//         "last_name" => "山田",
//         "first_name" => "太郎",
//         "age" => 25,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "鈴木",
//         "first_name" => "次郎",
//         "age" => 25,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "佐藤",
//         "first_name" => "花子",
//         "age" => 20,
//         "gender" => "女性"
//     ]
//     ];

//     echo $people[0]["last_name"];

// $people = array("taro", "jiro", "saburo");

// foreach($people as $person){
//     echo $person ;
//     echo "<br>";
// }

//     $people =array(
//     "person1" => "taro",
//     "person2" => "jiro",
//     "person3" => "saburo"
// );

// foreach($people as $person => $name){
//     echo $person . "は" . $name . "です" . "<br>";
// }

$people = [
    ["taro", 20, "men"],
    ["jiro", 25, "men"],
    ["hamako", 20, "women"],
];

foreach($people as $person){
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")";
    echo '';
}