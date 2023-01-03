<?php
                            
     $first  = @$x = $_GET['f'];
     $second = @$x = $_GET['s'];
     $third  = @$x = $_GET['t'];
      
     @$sub   = $_GET['sub'];

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