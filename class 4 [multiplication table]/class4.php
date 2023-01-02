<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loop</title>
</head>
<body>

	<!-- Loop -->

	<!-- for, foreach, while, do..while -->

	<?php
		/*echo "1";
		echo "<br>";
		echo "2";
		echo "<br>";
		echo "3";
		echo "<br>";
		echo "4";
		echo "<br>";
		echo "5";
		echo "<br>";
		echo "6";
		*/
		// 1st = initial, 2nd = condition check, 3rd = iterator
		
		// $i++  / $i = $i+1;
	// 	for($i=1;$i<=10000;$i++){
	// 		if($i%2 == 1){
	// 			echo "*";
	// 		}else{
	// 			echo "# ";	
	// 		}
			
	// 	}

	// 	// 1. condition check 
	// 		// if true then go to body
	// 	// 2. iterate the variable
	// 	// 3. go to step 1 	    
	//
	
$i = 1;
$z = 2;
while($i < 11){
    echo "2*";
    echo $i;
    echo "=";
    echo $z;
    echo "<br>";
    $i ++ ;
}
	
	
	
	?>

</body>
</html>