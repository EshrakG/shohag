<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshrak's নামতা project </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
          <div class="card">
              <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Put the multiplication number</h2>
                    <form name="frm" method="post">
                        <input type="number" name="f" class="input-box"
                        placeholder="Type here" required>

                        <input type="number" name="s" class="input-box"
                        placeholder="Type here" required>

                        <input type="number" name="t" class="input-box"
                        placeholder="Type here" required>

                        <input type="submit" name="sub" class="input-box">
                        <br>
                        <br>
                          



    <?php

     $first  = @$x = $_POST['f'];
     $second = @$x = $_POST['s'];
     $third  = @$x = $_POST['t'];
      
     @$sub   = $_POST['sub'];

    if($first > $second && $first > $third  ){
        echo "First number is greater than any other numbers";
    }
    elseif($second > $first && $second > $third ){
        echo "Second number is greater than all other numbers";
    }
    elseif($third > $first && $third > $second){
        echo "Third number is greater than all other numbers";
    }
    elseif($third == $first && $third == $second){
        echo "All numbers are same!!!";   
    }
    elseif($first == $second ){
        echo "First & second  numbers are same!!!";   
    }
    elseif($third == $second ){
        echo "second & third  numbers are same!!!";   
    }
  
    elseif($third == $first ){
        echo "first & third  numbers are same!!!";   
    }

 
    
    
            
 ?>
</body>
</html>
 