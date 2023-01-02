<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahmude</title>
</head>
<body>

<h1 style="text-align: center">Assignment-3</h1>
<hr>

<h1 style="color: gold">1nd type of problemes</h1>

<!-- <?php

$mark = 88;

if($mark >=80 && $mark <= 100){
    echo "The Grad point is A+";
}else if ($mark >= 70 && $mark <= 79){
    echo "The Grad point is A";
}else if ($mark >= 60 && $mark <= 69){
    echo "The Grad point is A-";
}else if ($mark >= 50 && $mark <= 59){
    echo "The Grad point is B+";
}else if ($mark >= 50 && $mark <= 59){
    echo "The Grad point is B";
}else if ($mark >= 40 && $mark <= 49){
    echo "The Grad point is C";
}else if ($mark >= 33 && $mark <= 39){
    echo "The Grad point is D";
}else if ($mark < 33){
    echo "The Grad point is F";
}
else{
    echo "This mark is not valid";
}

?> -->


<h1 style="color: gold">2nd types of problemes</h1>

<?php

$units = 100;
$unit_cost_first_slap = 3.50;
$unit_cost_second_slap = 4.00;
$unit_cost_third_slap = 5.20;
$unit_cost_fourth_slap = 6.50;
$unit_cost_fifth_slap = 8.50;

if($units >=1 && $units <= 50){
    $bill = $unit_cost_first_slap * $units;
    echo "The bill is $bill TK";
}else if ($units > 50 && $units <= 100){

    $tem = $units - 50;
    $bill = $unit_cost_first_slap * 50 + $unit_cost_second_slap * $tem;
    echo "The bill is $bill TK";

}else if ($units > 100 && $units <= 150){

    $tem = $units - 100;
    $bill = $unit_cost_first_slap * 50 + $unit_cost_second_slap * 50 + $unit_cost_third_slap * $tem;
    echo "The bill is $bill TK";

}else if ($units > 150 && $units <= 200){

    $tem = $units - 150;
    $bill = $unit_cost_first_slap * 50 + $unit_cost_second_slap * 50 + $unit_cost_third_slap * 50 + $unit_cost_fourth_slap * $tem;
    echo "The bill is $bill TK";

}else if ($units > 200){

    $tem = $units - 200;
    $bill = $unit_cost_first_slap * 50 + $unit_cost_second_slap * 50 + $unit_cost_third_slap * 50 + $unit_cost_fourth_slap * 50 + $unit_cost_fifth_slap * $tem;
    echo "The bill is $bill TK";

}

?>

    
</body>
</html>