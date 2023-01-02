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
        echo "<h1>PHP PROJECT 04</h1>";
    ?>
    <div class="main">
        <table border="1">
            
            <tr>
                <th colspan="2"><h5> Multiplication of 1 ====></h5></th>
                <th colspan="4"><h5> Multiplication of 2 ====></h5></th>
                <th colspan="2"><h5> Multiplication of 3 ====></h5></th>
                <th colspan="2"><h5> Multiplication of 4 ====></h5></th>
                <th colspan="1"><h5> Multiplication of 5 ====></h5></th>
                
            </tr>
            <tr>
                <td colspan="4"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=1*$i;
                        echo "1*$i=$y";
                        echo "<br>";
                    }
                ?></td>

                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=2*$i;
                        echo "2*$i=$y";
                        echo "<br>";
                    }
                ?></td>    

                    <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=3*$i;
                        echo "3*$i=$y";
                        echo "<br>";
                    }
                ?></td>  
                
                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=4*$i;
                        echo "4*$i=$y";
                        echo "<br>";
                    }
                ?></td>  
                
                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=5*$i;
                        echo "5*$i=$y";
                        echo "<br>";
                    }
                ?></td>    

            </tr>
            
            <tr>
                <th colspan="2"><h5>Multiplication of 6 ====> </h5></th>
                <th colspan="4"><h5>Multiplication of 7 ====> </h5></th>
                <th colspan="2"><h5>Multiplication of 8 ====> </h5></th>
                <th colspan="2"><h5>Multiplication of 9 ====> </h5></th>
                <th colspan="1"><h5>Multiplication of 10 ====> </h5></th>
                
            </tr>
            
            <tr>
                <td colspan="4"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=6*$i;
                        echo "6*$i=$y";
                        echo "<br>";
                    }
                ?></td>

                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=7*$i;
                        echo "7*$i=$y";
                        echo "<br>";
                    }
                ?></td>    

                    <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=8*$i;
                        echo "8*$i=$y";
                        echo "<br>";
                    }
                ?></td>  
                
                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=9*$i;
                        echo "9*$i=$y";
                        echo "<br>";
                    }
                ?></td>  
                
                <td colspan="2"><?php 
                    $i=1;
                    
                    for($i=1;$i<=10;$i++)
                    {
                        $y=10*$i;
                        echo "10*$i=$y";
                        echo "<br>";
                    }
                ?></td>    

            </tr>
            

            
        </table>
    </div>
</body>
</html>