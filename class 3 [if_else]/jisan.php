<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 03</title>
</head>
<body>

<form name="frm" method="post">
                        <input type="number" name="n">
                        <input type="submit" name="sub" >
    <?php 
     @$x = $_POST['n'];
     @$sub = $_POST['sub'];
    echo "<h1 style=text-align:center>PHP PROJECT 03</h1>";
    echo "<h2 style=color:purple>You have some money and you want to buy a Expensive Car in the World.</h2>";
    echo "<h2 style=color:brown>Here are some List of Most Expensive Car in the World: </h2>";
    echo "
        <ol>
            <h3><li>Rolls-Royce Boat Tail - Price - $28 Million</li></h3>
            <h3><li>Rolls-Royce Sweptail - Price - $12.8 Million</li></h3>
            <h3><li>Bugatti Centodieci - Price - $9 Million</li></h3>
            <h3><li>Mercedes-Maybach Exelero - Price - $7 Million</li></h3>
            <h3><li>Bugatti Divo - Price - $5.8 Million</li></h3>
            
        </ol>
    ";
    echo "<h2 style=color:blue>Please Tell us Your Budget to Buy a NEW CAR : </h2>";
    echo "<h4 style=color:red>(Note: You must have to Enter Your Value to this Page's PHP CODE.)</h4>";




    //Please Input Your Number Here 


    // $x = 5.8;







    if($x>=28)
    {
        $y = $x - 28 ;
        echo "<h2>Congratulations!! </h2>";
        echo "<h2 style=color:teal>You Have $$x Million and You can buy (Rolls-Royce Boat Tail) Car in $28 Million and You still Have $$y Million =></h2>";
        
        echo "<img src='https://cdn.motor1.com/images/mgl/beR6n/s1/rolls-royce-boat-tail.webp' 
                style='width:700px;height:300x;'>";
    }
    elseif($x>=5.8 AND $x<8)
    {
        $y = $x - 5.8;
        echo "<h2>Congratulations!! </h2>";
        echo "<h2 style=color:teal>You Have $$x Million and You can buy (Bugatti Divo) Car in $5.8 Million and You still Have $$y Million =></h2>";
        
        echo "<img src='https://cdn.motor1.com/images/mgl/rBzVX/s1/most-expensive-cars.webp' 
                style='width:700px;height:300x;'>";
    }
    elseif($x>=12.8 AND $x<28)
    {
        $y = $x - 12.8;
        echo "<h2>Congratulations!! </h2>";
        echo "<h2 style=color:teal>You Have $$x Million and You can buy (Rolls-Royce Sweptail) Car in $12.8 Million and You still Have $$y Million =></h2>";
        
        echo "<img src='https://cdn.motor1.com/images/mgl/mMMA4P/s1/rolls-royce-sweptail.webp' 
                style='width:700px;height:300x;'>";
    }
    elseif($x>=9 AND $x<12.8)
    {
        $y = $x - 9;
        echo "<h2>Congratulations!! </h2>";
        echo "<h2 style=color:teal>You Have $$x Million and You can buy (Bugatti Centodieci) Car in $9 Million and You still Have $$y Million =></h2>";
        
        echo "<img src='https://cdn.motor1.com/images/mgl/q9EVR/s1/most-expensive-cars.webp' 
                style='width:700px;height:300x;'>";
    }
    elseif($x>=7 AND $x<9)
    {
        $y = $x - 7;
        echo "<h2>Congratulations!! </h2>";
        echo "<h2 style=color:teal>You Have $$x Million and You can buy (Mercedes-Maybach Exelero) Car in $7 Million and still You Have $$y Million =></h2>";
        
        echo "<img src='https://cdn.motor1.com/images/mgl/nEKy6/s1/mercedes-maybach-exelero.webp' 
                style='width:700px;height:300x;'>";
    }
    elseif($x==0)
    {
        echo " ";
    }
    else
    {
        echo "<h1>We are Really so sorry. We haven't any Car For you of Your Budget. </h1>";
    }
   
        
    
    ?>
</body>
</html>