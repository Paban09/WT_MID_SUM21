<?php

    $accountNumber="";
	$err_accountNumber="";
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	$bank="" ;
	$err_bank="" ;
	
	
	$hasError=false;
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		
	if(empty($_POST["accountNumber"])){
			$hasError=true;
			$err_accountNumber="account Number Required";
		}
		
		else{
		$accountNumber = $_POST["accountNumber"];	}
		
				
	
	if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password Required";
		}

		else{
			$pass = $_POST["pass"];
		}
		
		if(empty($_POST["cpass"])){
			$hasError = true;
			$err_cpass = "Confirm Password Required";
		}
		elseif ($_POST["cpass"] !== $_POST["pass"]){
			$hasError = true;
			$err_cpass = "Confirm Password Required";
		}
		else{
		$cpass = $_POST["cpass"];}
			
			
			
			if(empty($_POST["payment"])){
			$hasError = true;
			$err_bank = "Payment Required";
		}

		
			
			
			
		
		
		echo "Account Number:".htmlspecialchars($_POST["accountNumber"])."<br>";
		echo "Password:".htmlspecialchars($_POST["pass"])."<br>";
		echo "Payment Selected:".htmlspecialchars($_POST["payment"])."<br>";
		
	}
	
?>


<html>
	<head>
		<title>Payment</title>
	</head>
	<body>
		<form action="" method="post">
			<table border = "1">
			  <tr>
				<td align="middle" colspan="2"> Payment </td>
			  </tr>
			  <tr>
				<td align = "right">Enter Your Account No</td>
				<td>:<input type="text" name="accountNumber" value="<?php echo $accountNumber;?>"  ></td> <td><span><?php echo $err_accountNumber;?></span></td>
			  </tr>
			  <tr>
					<td><span>Password:</span></td>					
					<td><input type="password" name="pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirm Password:</span></td>
					<td><input type="Password" name="cpass" value="<?php echo $cpass;?>"> </td><td><span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
			  
			  
				<td  align = "right">Select Payment Method</td>
				<td>					
					<input type="radio" name="payment" value="Bank Payment">
					<label>Bank Payment</label><br>
					<input type="radio"  name="payment" value="Cash on Delivery">
					<label>Cash on Delivery</label><br>
					<input type="radio" name="payment" value="Online Payment">
					<label>Online Payment</label>
										
				</td>
				
			  </tr>
			  
			  
			  <tr>
				<td colspan ="2">
					<button>Confirm </button>
					
				</td>
			  </tr>
			  
			  
			</table>
		</form>
	</body>
</html>