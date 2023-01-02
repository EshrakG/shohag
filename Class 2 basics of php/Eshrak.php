<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning php - Class_number_02</title>
</head>
<body>
  <?php
  
     /* --- Data types in php --- :
     1.String
     2.Number
     3.Date
     4.Boolean*/
     
     // --- String --- means [sequence of characters ]
     //Example below here !!!
     echo "Welcome to String <br>";
     $name = "Eshrak";
     $teacher = 'Mahbub Alom Shohag 😊😊😊';  // Note :[ Singel code or Double code can be used.👍or✌️]
     echo  "$name is the stduent of $teacher";
     echo "<br>";
     echo "<br>";
     echo "<br>";
     
     // There are many types of string those I have learnt just now !!!

     $name2 = "Fardin Hasan Jihad";
     echo $name2;
     echo "<br>";
     echo "The length of string" . '  ' .  strlen($name2);// The total length of string "blank spaces will also counted"
     echo "<br>";
     echo "The total word of string" . '  ' . str_word_count($name2);  //The total word of string 
     echo "<br>";
     echo "The reverse of string" . '   ' . strrev($name2);  // character reverse
     echo "<br>";
     echo "The character position of s is ". '   ' . strpos($name2, "s");  // character position
     echo "<br>";
     echo "The character replacement of string is ". '    ' . str_replace("Eshrak","Siam",$name);  // character replace
     echo "<br>";
     echo "The repetition of string". '   ' . str_repeat($name, 3);  // character repeat
     echo "<br>";
      

                      // There are so many types of string.I have to learn more && more !!!😅😅😅


                 // 2.Number Note : [I'm showing only Integer - Non  decimal number]
     echo "<br>";
     $gpa = 5;
     echo "$name got GPA $gpa in <img src='https://media.tenor.com/4sO4wBCoUFkAAAAC/google-chrome-pacman.gif' 
                                 style='width:30px;height:20px;'>";
                                 
     echo "<br>";
     echo "<br>";

    
         // 3.Date [It's only check date there are so many date function in php]

    var_dump(checkdate(12,25,2022));      // Important Note : [var_dump is used for knowing the Data Types]
    echo "<br>";
    var_dump(checkdate(2,29,1993));       // Note : [It's false because it's not a leap year. ]
    echo "<br>";
    var_dump(checkdate(2,29,2024));       // Note : [ Only leap year can bring the 29 February 📅]
    echo "<br>";                                     
    var_dump(checkdate(12,25,-2022));     // Note : [It's false because time or date can't be in minus form]
    echo "<br>";
    echo "<br>";
                                 // Much more date function !!!     
    echo "Welcome to date function <br>";

    $d = date("d l"); // The  different between (d) and (j) is {d start with 0 example 01,02,03 } {j isn't start with 0} 
 
    echo "Todays date is $d <br>";

    $da =date("dS F Y");// Note : [ S => English ordinal suffix for the day of week] Note : [ F => A full textual represation of a month,three letters] Note : [Y => A full numeric represation of a year]
    echo "Todays date is $da <br>";


    $dat =date("dS F Y, g:i A");//Note => [g = Hour , i = minitue , A = am/pm]
    echo "Todays date is $dat <br>";
    $year = date("Y");
    echo "<br>";
    echo "CopyRight $year | All rights reserved <br> <br> <br>";
 
 
 

            // 4. Boolean - Can be either true or false

    $the_earth_moves_arround_the_sun = true ;
    $the_sun_is_fixed = false ;                      
    echo var_dump($the_earth_moves_arround_the_sun) . /* Note : We concatenate by a single Dote{.} */ "<img 
        src='https://media.tenor.com/oEYbTpMQlz8AAAAC/sun-earth.gif'  style='width:38px;height:30px;'>";
    echo "<br>";
    echo "<br>"; 
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo var_dump($the_sun_is_fixed) . "<img src='https://acegif.com/wp-content/uploads/gifs/sun-14.gif' alt= 
                                        'Sun' style='float:middle;width:32px;height:30px;'>";
    echo "<br>";
    echo "<br>";
                              
         // ---some other types boolean---

$a = 65;
$b = 9;

if($a > 78){
    echo "'A' is greater than 78";
    echo "<br>";
}else{
    echo "'A' is not greater than 78";
    echo "<br>";
}


$age = 20;

if ($age > 17){
    echo "You can drink water , tea and milk 👌👌👌";
    echo "<br>";
}
elseif($age > 12){
    echo "You can drink tea only with milk . No water for you 😒😒😒";
    echo "<br>";
}else{
    echo "You can drink water only 😎😎😎";
    echo "<br>";
}
echo(rand(1,10)); //random number funtion;
echo "Done";
echo "<br>";
$age = 25;

if ($age > 25){
    echo "You are allowed to drive 🚗🚗🚗";
    echo "<br>";
}

elseif($age > 18){
echo "You can drive a bike 🚲";
echo "<br>";
}

else{
    echo "You are not permitted to drive 😡😡😡";
    echo "<br>";
}
echo "Done";

  ?>
</body>
</html>