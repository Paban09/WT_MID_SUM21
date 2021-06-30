<?php

    $name="";
	$err_name="";
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	$email="";
	$err_email="";
	
	$isdcode="";
	$err_isdcode="";
	
    $phone="";
	$err_phone="";
	
		
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=6){
			$hasError = true;
			$err_name = "Name must be greater than 6 characters";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="contact number Required";
		}
		
		if(!is_numeric($_POST["isdcode"]))
			{
				$err_isdcode="ISD code should be numeric only!";
			}
			else $phone=$_POST["phone"];

			if(!is_numeric($_POST["phone"]))
			{
				$err_phone=" Phone number should be numeric only!";
			}
			else $phone=$_POST["phone"];
			
			
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
			$cpass = $_POST["cpass"];
		}
		
		
		if(strpos($_POST["email"],"@"))
			{if(strpos($_POST["email"],"."))
			$email=$_POST["email"];
			}
			else $err_email="Email must contain '@' and '.'!";	
			
	    echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "Password:".htmlspecialchars($_POST["pass"])."<br>";
		echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
		echo "ISD: ".htmlspecialchars($_POST["isdcode"])."<br>";
		echo "Phone: ".htmlspecialchars($_POST["phone"])."<br>";
        echo "Payment_Options: ".htmlspecialchars($_POST["Payment_Options"])."<br>";		
			
			
	}
	
	
	

?>


<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1><b>Profile Update</b></h1></legend>
			<table>
				<tr>
					<td><span >Name:</span></td>
					<td></td>
					<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>

				
			
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input type="text" name="isdcode" value="<?php echo $isdcode;?>" placeholder="code" size="4"><b>-</b><input type="text" name="phone" value="<?php echo $phone;?>" placeholder = "Number" size="9"> </td><td><span><?php echo $err_isdcode;?></span><span><?php echo $err_phone;?></span></td>
				</tr>
				
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input type="Password" name="cpass" value="<?php echo $cpass;?>"> </td><td><span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
				
				<tr>
				<select name="Payment_Options">
					<option disabled selected>Payment_Options</option>
					<?php
						$pay= array("Card","Cash On delivery","Online Payment");
						for($j=0;$j<count($pay);$j++)
						{
							echo "<option>$pay[$j]</option>";
						}
					?>
				</select>
				</tr>
				
				
				

				<td >
				<button><a target="_blank" href="Payment_4.php" >Payment </a></button>
				<input type="Submit" name="submit" value="Confirm">
				</td>
				
				
				
					
			
				
				
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>