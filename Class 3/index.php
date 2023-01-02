<?php



echo "<h1>Operators in PHP</h1>";

/* Operator in php

To my knowledge there are 4 operators in php
1.Arithemetic Operators
2.Assignment Operators
3.comparison Operators
4.Logical Operators

*/

//--- Arithemetic Operators ---

$x = 10;
$y = 2;

echo "For x + y  the result is "  . ($x + $y)  . "<br>"; // For addition
echo "For x - y  the result is "  . ($x - $y)  . "<br>"; // For subtraction
echo "For x * y  the result is "  . ($x * $y)  . "<br>"; // For multiplication
echo "For x / y  the result is "  . ($x / $y)  . "<br>"; // For division
echo "For x % y  the result is "  . ($x % $y)  . "<br>"; // For remainder (ভাগশেষ)
echo "For x ** y the result is "  . ($x ** $y) . "<br>"; // For power 


echo "<br>";
echo "<br>";

// --- Assignment Operators ---

$z = 30;
 

$z += 6;
echo "For z +=  the value is " . $z . "<br>";
$z -= 6;
echo "For z -=  the value is " . $z . "<br>";
$z /= 6;
echo "For z /=  the value is " . $z . "<br>";
$z *= 6;
echo "For z *=  the value is " . $z . "<br>";
$z %= 4;
echo "For z %=  the value is " . $z . "<br>";
$z **= 6;
echo "For z **= the value is " . $z . "<br>";


echo "<br>";
echo "<br>";

//3.Comparison Operators

$m = 70;
$n = 7;

echo "For x == y, the result is ";
echo var_dump ($m == $n); // equal to operator 
echo "<br>";

echo "For x > y, the result is ";
echo var_dump ($m > $n); // greater than operator
echo "<br>";

echo "For x < y, the result is ";
echo var_dump ($m < $n); // less than operator
echo "<br>";

echo "For x <> y, the result is ";
echo var_dump ($m <> $n); // not equal to operator 
echo "<br>";
echo "<br>";
echo "<br>";

//4.Logical Operators

$a = true;
$b = false;

 echo "For m and n, the result is ";
 echo var_dump ($a && $b); // If one is wrong, then everything is wrong
 echo "<br>";

 echo "For m or n, the result is ";
 echo var_dump ($a || $b); // If one is right, than all are right
 echo "<br>";

// --- Conditions in PHP ---


 echo "<h1>If/Else conditions in PHP</h1>";



$q = 65;


if($q > 78){
    echo "'Q' is greater than 78 ";
    echo "<br>";
}else{
    echo "'Q' is not greater than 78";
    echo "<br>";
}


$age = 13;

if ($age > 17){
    echo "You can drink water , tea and milk 😊😊😊";
    echo "<br>";
}
elseif($age > 13){
    echo "You can drink tea only with milk . No water for you 😅😅😅";
    echo "<br>";
}else{
    echo "You can drink water only 😎😎😎";
    echo "<br>";
}

echo "Done";
echo "<br>";
$age = 25;

if ($age > 25){
    echo "You are allowed to drive 🚗🚗🚗 ";
    echo "<br>";
}

elseif($age > 18){
echo "You can only  drive a bike 🚲🚲🚲";
echo "<br>";
}

else{
    echo "You are not permitted to drive 😡😡😡";
    echo "<br>";
}
echo "Done";

            // the code of khalu !!! 😅😅😅
// echo "<br>";
// $mark = 5;

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
		$Bangla_mark = 130;

		if($Bangla_mark<66){
			echo "F";
		}else if($Bangla_mark > 64 AND $Bangla_mark <80){
			echo "D";
		}else if($Bangla_mark > 80 AND $Bangla_mark <98){
			echo "C";
		}else if($Bangla_mark > 98 AND $Bangla_mark <120){
			echo "B";
		}else if($Bangla_mark > 120 AND $Bangla_mark <138){
			echo "A-";
		}else if($Bangla_mark > 138 AND $Bangla_mark <158){
			echo "A";
		}else{
			echo "A+";
		}


		echo "<br>";
		$Engkish_mark = 160;

		if($Engkish_mark<66){
			echo "F";
		}else if($Engkish_mark > 64 AND $Engkish_mark <80){
			echo "D";
		}else if($Engkish_mark > 80 AND $Engkish_mark <98){
			echo "C";
		}else if($Engkish_mark > 98 AND $Engkish_mark <120){
			echo "B";
		}else if($Engkish_mark > 120 AND $Engkish_mark <138){
			echo "A-";
		}else if($Engkish_mark > 138 AND $Engkish_mark <158){
			echo "A";
		}else{
			echo "A+";
		}


        

echo "<br>";
		$Math_mark = 64;

		if($Math_mark<33){
			echo "F";
		}else if($Math_mark > 32 AND $Math_mark <40){
			echo "D";
		}else if($Math_mark > 40 AND $Math_mark <49){
			echo "C";
		}else if($Math_mark > 49 AND $Math_mark <60){
			echo "B";
		}else if($Math_mark > 59 AND $Math_mark <69){
			echo "A-";
		}else if($Math_mark > 69 AND $Math_mark <79){
			echo "A";
		}else{
			echo "A+";
		}





echo "<br>";
		$Physic_mark = 76;

		if($Physic_mark<33){
			echo "F";
		}else if($Physic_mark > 32 AND $Physic_mark <40){
			echo "D";
		}else if($Physic_mark > 40 AND $Physic_mark <49){
			echo "C";
		}else if($Physic_mark > 49 AND $Physic_mark <60){
			echo "B";
		}else if($Physic_mark > 59 AND $Physic_mark <69){
			echo "A-";
		}else if($Physic_mark > 69 AND $Physic_mark <79){
			echo "A";
		}else{
			echo "A+";
		}

echo "<br>";
		$Chemistry_mark = 80;

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
			echo "A";
		}else{
			echo "A+";
        }

echo "<br>";
       
		$Higher_Math_mark = 84;

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
			echo "A+";
		}

echo "<br>";

       $Biology_mark = 91;

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
           echo "A+";
       }

?>

