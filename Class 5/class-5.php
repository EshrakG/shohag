<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nested loop and condition</title>
</head>
<body>
	<?php
		
		//echo $_GET['username'];
		//echo "<br>";
		//echo $_GET['password'];
		//exit;
	/*	
		$name = "Eshrak";
		$city = "mohammadpur";
		if($name == "mahbub"){
			if($city == "mohammadpur"){
				echo "Welcome to Mohammadpur Area";
			}else if($city == "dhanmondi"){
				echo "Welcome to Dhanmondi Area";
			}else if($city == "uttara"){
				echo "Welcome to Uttara Area";
			}
		}else{
			echo "Sorry you are not Mahbub";
		}

	*/
	// Withdraw from ATM both

		$dbusername = "jisan";
		$dbpassword = "123456";
		$dbbalance  = 10000;

		//echo $_GET['username'];

		$username = $_GET['username'];
		$password = $_GET['password'];
		$amount = $_GET['amount'];


		if($username == $dbusername){
			if($password == $dbpassword){
				if($amount<=$dbbalance){
					$current_balance = $dbbalance - $amount;
					echo "Dear customer, transaction successful! Your current balance is ".$current_balance;
				}else{
					echo "Insufficient Balance";
				}
			}else{
				echo "Sorry! Username matched but password is incorrect!";
			}
		}else{
			echo "username is incorrect";
		} 
	?>
</body>
</html>
