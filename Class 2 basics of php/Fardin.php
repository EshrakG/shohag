<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leraning php</title>
</head>
   <h2 style="color:#0000e6">Hi,This Is My Second Project of php</h2>
<body>
    <?php

      echo "<h1 style=color:><ul>Topic-1:Variables</h1>";

      $name  = "Fardin Hasan Jihad";
      $age   ="17";
      $c_name="DPI-Daffodil polytechnic institute";

        echo "<h2 style=color:#2eb82e><li>My Name is $name </li></h2> ";
        echo "<h2 style=color:#cc00cc><li>I am $age Years Old </li></h2> ";
        echo "<h2 style=color:#ff0000><li>My Institute Name is:<b style=color:blue>DPI-Daffodil Polytechnic Institute</b></li><h2>";
        

        echo "<h2 style=color:orange><ul>Normal eshrak :)</ul></h2>";
        $siam="7";
        $jihad="5kg";
        echo  $eshrak=$siam. $jihad;
        echo "<br>";
        echo "<br>";

        echo"<h2><ul>stylish eshrak:)</ul></h2>";
        $jihad=25;
        $siam=25;
        $eshrak=$jihad+$siam;

        echo $eshrak;
        echo "<h2 ><li>Don't Mind Oky, I Just Kidding With You.actually I calculated your weight.Difference Normal Eshrak and stylish Eshrak :)</li></h2>";

        echo "<h2 style=color:#990099><ul>Topic-2:String (strings length)<ul></h2>";

        echo "<h3>Mahbub Alam Shohag(Our Team Leader):</h3>";
        echo strlen("Mahbub Alam Shohag");
        echo "<br>";
        
        echo "<h3>Mostafizur Rohman:</h3>";
        echo strlen("Mostafizur Rohman");
        echo "<br>";

        echo "<h3>Mahmudur Rahman:</h3>";
        echo strlen("Mahmudur Rahman");
        echo "<br>";

        echo "<h3>Jisan Rohman:</h3>";
        echo strlen("Jisan Rohman");
        echo "<br>";
    
        echo "<h3>Eshrak:</h3>";
        echo strlen("Eshrak");
        echo "<br>";

        echo "<h3>Siam:</h3>";
        echo strlen("Siam");
        echo "<br>";

        echo "<h3>Jihad:</h3>";
        echo strlen("Jihad");
        echo "<br>";

        echo "<h2 style=color:red><li>Now Total Number Count</li></h2>";
        echo strlen("Mahbub Alam Shohag,Mostafizur Rohman,Mahmudur Rahman,Jisan Rohman,Eshrak,Siam,Jihad");


        echo "<h2><li>String_Word_Count</li></h2>";
        
        echo "<h2 style=color:navy>Mahbub Alam Shohag,Mostafizur Rohman,Mahmudur Rahman,Jisan Rohman,Eshrak,Siam,Jihad:</h2>";
        echo str_word_count("Mahbub Alam Shohag,Mostafizur Rohman,Mahmud Hasan,Jisan Rohman,Eshrak,Siam,Jihad"); // outputs 2

        
        echo "<h2><li>string revers</li></h2>";
        echo strrev("Fardin Hasan Jihad");
        echo "<br>";
     
        echo"<h2>var_dump:</h2>";
        $ABC="This Is Jihad";
        echo var_dump ($ABC);

        echo "<h2>Number</h2>";
        echo min(2,3,1,4,5);
        echo "<br>";

        echo max(1,10,20,50,100,500,1000,10000,100000,1000000,10000000,100000000,1000000000);
        echo "<br>";
       
        echo "<h2 style=color:green>Guess number(1-7) :)</h2>";
        echo(rand(1,7)); //Now you guess which is the next digit fall in the page!
        echo '<br>';
        
       
        echo "<h1 style=color:#993399><li>Thanks For Watching My project :)</li></h1>";

    ?> 
    
</body>
</html>