<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing with numbers project </title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
        <div class="container">
          <div class="card">
            <div class="inner-box" id="card">
               <div class="card-front">
                  <h2>Put your favourite number</h2>
                       <form name="frm" method="get">
                            <input type="number" name="f" class="input-box"
                                    placeholder="input here" required>
                            <input type="number" name="s" class="input-box"
                                    placeholder="input here" required>
                            <input type="number" name="t" class="input-box"
                                    placeholder="input here" required>
                            <input type="submit" name="sub" class="input-box">
                        <br>
                    <br>
               </form>
             <!-- </div>
        </div>
    </div>
</div>   -->
                                                                               
    <?php
                            
     $first  = @$x = $_REQUEST['f']; // REQUEST method can be use with both get_method & post_method
     $second = @$x = $_REQUEST['s']; // In get method we can use URL & It is mostly use for searching
     $third  = @$x = $_REQUEST['t']; // Post is very secure than get method
      
     @$sub   = $_REQUEST['sub'];

    if($first > $second && $first > $third  ){
        echo "<h2> First number is greater than any other numbers 😃</h2>";
    }
    elseif($second > $first && $second > $third ){
        echo "<h2> Second number is greater than all other numbers 😃</h2>";
    }
    elseif($third > $first && $third > $second){
        echo "<h2> Third number is greater than many other numbers 😃</h2>";
    }
    elseif($third == $first && $third == $second){
        echo "<h1> All numbers are same!!! 😅 </h1>";   
    }
    elseif($first == $second ){
        echo "<h1> First  & Second numbers are same!!! 😎 </h1>";   
    }
    elseif($third == $second ){
        echo "<h1> Second & Third numbers are same!!! 😎 </h1>";   
    }
  
    elseif($third == $first ){
        echo "<h1> First  & Third numbers are same!!! 😎 </h1>";   
    } 

 /*           
 In get method :
    Restrictions on data length	Yes, when sending data, the GET method adds the data to the URL; and the length of a URL is limited (maximum URL length is 2048 characters)	No restrictions !!!

    In post method :
    Restrictions on data type Only ASCII characters allowed	No restrictions. Binary data is also allowed !!!
*/

 ?>
</body>
</html>
 