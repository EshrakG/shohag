<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "<h1 style=text-align:center;color:#3366cc> php project-4 </h1>";
       echo "<br>";
       echo "<h1 style=color:#000066><li>Now I am Creating a simple marksheet using php</li></h1>";

// if($mark<33){
//     echo "F";
// }else if($mark>32 AND $mark<40){
//     echo "D";
// }else if($mark >40 AND $mark <49){
//     echo "C";
// }else if($mark>49 AND $mark<60){
//     echo "B";
// }else if($mark >59 AND $mark <69){
//     echo "A-";
// }else if($mark >69 AND $mark <79){
//     echo "A";
// }else{
//     echo "A+";
// }



echo "<br>";
$Bangla_mark =35;

if($Bangla_mark<33){
    echo "F";
}else if($Bangla_mark > 32 AND $Bangla_mark <40){
    echo "<h2 style=color:#996633>1. Bangla: 35= D</h2>";
}else if($Bangla_mark > 40 AND $Bangla_mark <49){
    echo "C";
}else if($Bangla_mark > 49 AND $Bangla_mark <60){
    echo "B";
}else if($Bangla_mark > 59 AND $Bangla_mark <69){
    echo "A-";
}else if($Bangla_mark > 69 AND $Bangla_mark <79){
    echo "A";
}else{
    echo "A+";
}


$English_mark =46;

if($English_mark<33){
    echo "F";
}else if($English_mark > 32 AND $English_mark <40){
    echo "D";
}else if($English_mark > 40 AND $English_mark <49){
    echo "<h2 style=color:#e60000>2. English: 46= C</h2>";
}else if($English_mark > 49 AND $English_mark <60){
    echo "B";
}else if($English_mark > 59 AND $English_mark <69){
    echo "A-";
}else if($English_mark > 69 AND $English_mark <79){
    echo "A";        
}else{
    echo "A+";
}



$Math_mark = 55;

if($Math_mark<33){
    echo "F";
}else if($Math_mark > 32 AND $Math_mark <40){
    echo "D";
}else if($Math_mark > 40 AND $Math_mark <49){
    echo "C";
}else if($Math_mark > 49 AND $Math_mark <60){
    echo "<h2 style=color:#00cca3>3. General Math: 55= B</h2>";
}else if($Math_mark > 59 AND $Math_mark <69){
    echo "A-";
}else if($Math_mark > 69 AND $Math_mark <79){
    echo "A";
}else{
    echo "A+";
}


$Physic_mark = 66;

if($Physic_mark<33){
    echo "F";
}else if($Physic_mark > 32 AND $Physic_mark <40){
    echo "D";
}else if($Physic_mark > 40 AND $Physic_mark <49){
    echo "C";
}else if($Physic_mark > 49 AND $Physic_mark <60){
    echo "B";
}else if($Physic_mark > 59 AND $Physic_mark <69){
    echo "<h2 style=color:#4d88ff>4. Physics: 66= A-</h2>";
}else if($Physic_mark > 69 AND $Physic_mark <79){
    echo "A";
}else{
    echo "A+";
}


$Chemistry_mark =75;

if($Chemistry_mark<33){
    echo "F";
}else if($Chemistry_mark > 32 AND $Chemistry_mark <40){
    echo "D";
}else if($Chemistry_mark > 40 AND $Chemistry_mark <49){
    echo "C";
}else if($Chemistry_mark > 49 AND $Chemistry_mark <60){
    echo "B";
}else if($Chemistry_mark > 59 AND $Chemistry_mark <69){
    echo "A-";
}else if($Chemistry_mark > 69 AND $Chemistry_mark <79){
    echo "<h2 style=color:#cc0099>5. Chemistry: 75= A</h2>";
}else{
    echo "A+";
}


$Biology_mark = 86;

if($Biology_mark<33){
   echo "F";
}else if($Biology_mark>32 AND $Biology_mark <40){
   echo "D";
}else if($Biology_mark>40 AND $Biology_mark <49){
   echo "C";
}else if($Biology_mark>49 AND $Biology_mark <60){
   echo "B";
}else if($Biology_mark>59 AND $Biology_mark <69){
   echo "A-";
}else if($Biology_mark>69 AND $Biology_mark <79){
   echo "A";
}else{
   echo "<h2 style=color:#009933>6. Biology: 86= A+</h2>";
}          

$Higher_Math_mark = 95;

if($Higher_Math_mark<33){
    echo "F";
}else if($Higher_Math_mark>32  AND $Higher_Math_mark <40){
    echo "D";
}else if($Higher_Math_mark>40  AND $Higher_Math_mark <49){
    echo "C";
}else if($Higher_Math_mark>49  AND $Higher_Math_mark <60){
    echo "B";
}else if($Higher_Math_mark>59  AND $Higher_Math_mark <69){
    echo "A-";
}else if($Higher_Math_mark>69  AND $Higher_Math_mark <79){
    echo "A";
}else{
    echo "<h2 style=color:#e65c00>7. Higher Math: 95 = A+</h2>";
}
 
echo "<br>";
echo "<h1 style=color:#006699><li>Thanks For Watching My Simple project </li></h1>";

 
  ?>

</body>
</html>