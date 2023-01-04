<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jisan-05</title>
</head>
<body>
    <?php 
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];

/*    1st way 

        $max = max($num1, $num2, $num3);
        echo "The Maximum number is : $max";

 */
// 2nd way

        if($num1 > $num2 AND $num2 > $num3)
        {
            echo "The Maximum number is : $num1";
        }
        else if($num2 > $num3)
        {
            echo "The maximum number is : $num2";
        }
        else
        {
            echo "The maximum number is : $num3";
        }


        
    ?>
</body>
</html>