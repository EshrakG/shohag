<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jisan</title>
</head>
<body>
    <?php 
        echo "<h1 style=text-align:center>PHP PROJECT 02</h1>";
        echo "<h3 style=color:blue>1. Variables : In php we declare a variable by ($) sign For Example: </h3>";
        $name = "Jisan";
        $roll = 12345;
        echo "Name is : $name <br> Roll is : $roll<br>";
        echo 'Here we use $name and $roll variable which are containing my name and roll.';
        echo "<h3 style=color:blue>2. Variables Scopes:PHP has three different variable scopes: </h3>";
        echo "<ol>
            <li>Local</li>
            <li>Global</li>
            <li>Static</li>
        </ol>";
        echo "<h4>Local Variable declared inside a Function and Global Outside the Function.Sometimes we need a extra variable which is called Static Variable.</h4>";
        echo "<h3 style=color:blue>3. PHP Data Types:  </h3>";
        echo "<h4>PHP supports the following data types: </h4>";
        echo "<ol>
            <li>String</li>
            <li>Integer</li>
            <li>Float</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>Null</li>
            <li>Resource</li>
        </ol>";
        echo "<h3 style=color:blue>4. The Value of Pi: </h3>";
        echo (pi());
        echo "<br>";
        echo "<br>";
        echo "The minimum number between (0, 150, 30, 20, -8, -200) is :  ";
        echo(min(0, 150, 30, 20, -8, -200));
        echo "<br>";
        echo "The maximum number between (0, 150, 30, 20, -8, -200) is :  ";
        echo(max(0, 150, 30, 20, -8, -200));

        echo "<br>";
        $num = -10;
        echo "The positive value of $num is : ".(abs($num));
        echo "<br>";
        echo "<h3 style=color:blue>5. PHP Square Root Function: </h3>";
        
        echo "The Square root of 10000 is : ".(sqrt(10000));
        echo "<h3 style=color:blue>6. PHP Round Function: </h3>";
        echo "The round value of .59 is : ".round(.59);
        echo "<br>";
        echo "The round value of .38 is : ".round(.38);
    ?>  
</body>
</html>