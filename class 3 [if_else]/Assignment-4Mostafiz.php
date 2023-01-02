<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostafiz</title>
</head>
<body>
    <h1>My Third Project</h2>

<?php

// $mark = 100;

// if($mark >= 80 && $mark <= 100){
//     echo 'A+';
// }
// else if($mark >=70 && $mark <= 79){
//     echo 'A';
// }
// else if($mark >=60 && $mark <= 69){
//     echo 'A-';
// }
// else if($mark >=50 && $mark <= 59){
//     echo 'B';
// }
// else if($mark >=40 && $mark <= 49){

//     echo 'C';

// }
// else if($mark >=33 && $mark <= 39){
//     echo 'D';
// }
// else if($mark <= 32){
//     echo 'F';
// }
// else{
//     echo "This Mark is invalid";
// }


$storied =7;
$each_brick_rate = 10;
$first_floor_brick = 5000;
$second_floor_brick = 6000;
$third_floor_brick = 7000;
$forth_floor_brick = 7500;
$fifth_floor_brick = 8000;
$sixth_floor_brick = 9000;

if($storied == 1){
    $costing1 = $first_floor_brick * $each_brick_rate;
    echo 'Brick costing for' .' '. $storied.' storied building: Costing is' .' '. $costing1 . ' TK.';
}else if($storied == 2){
    $costing1 = $first_floor_brick * $each_brick_rate;
    $costing2 = $second_floor_brick * $each_brick_rate + $costing1;
    echo 'Brick costing for' . ' ' . $storied . ' storied building: Total Costing is' .' '. $costing2 . ' TK.';

}else if($storied == 3){
    $costing1 = $first_floor_brick * $each_brick_rate;
    $costing2 = $second_floor_brick * $each_brick_rate + $costing1;
    $costing3 =  $third_floor_brick * $each_brick_rate + $costing2;
    echo 'Brick costing for' . ' ' . $storied . ' storied building: Costing is' .' '. $costing3 . ' TK.';

}
else if($storied == 4){
    $costing1 = $first_floor_brick * $each_brick_rate;
    $costing2 = $second_floor_brick * $each_brick_rate + $costing1;
    $costing3 = $third_floor_brick * $each_brick_rate + $costing2;
    $costing4 = $forth_floor_brick * $each_brick_rate + $costing3;
    echo 'Brick costing for' . ' ' . $storied . ' storied building: Costing is' .' '. $costing4 . ' TK.';

}
else if($storied == 5){
    $costing1 = $first_floor_brick * $each_brick_rate;
    $costing2 = $second_floor_brick * $each_brick_rate + $costing1;
    $costing3 = $third_floor_brick * $each_brick_rate + $costing2;
    $costing4 = $forth_floor_brick * $each_brick_rate + $costing3;
    $costing5 = $fifth_floor_brick * $each_brick_rate + $costing4;
    echo 'Brick costing for' . ' ' . $storied . ' storied building: Costing is' .' '. $costing5 . ' TK.';

}
else if($storied == 6){
    $costing1 = $first_floor_brick * $each_brick_rate;
    $costing2 = $second_floor_brick * $each_brick_rate + $costing1;
    $costing3 =  $third_floor_brick * $each_brick_rate + $costing2;
    $costing4 = $forth_floor_brick * $each_brick_rate + $costing3;
    $costing5 = $fifth_floor_brick * $each_brick_rate + $costing4;
    $costing6 = $sixth_floor_brick * $each_brick_rate + $costing5;
    echo 'Brick costing for' . ' ' . $storied . ' storied building: Costing is' .' '. $costing6 . ' TK.';

}
else {
    echo "nothing";
}


?>    
</body>
</html>