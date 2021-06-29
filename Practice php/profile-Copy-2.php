<?php

    $name="";
	$err_name="";
	
	$password="";
	$err_password="";

	$confirmpassword="";
	$err_confirmpassword="";
	
	$email="";
	$err_email="";
	
	$isdcode="";
	$err_isdcode="";
	
    $phone="";
	$err_phone="";
	
		
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		
			
			
	    echo "Name: ".htmlspecialchars($_POST["name"])."<br>";        		
		echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
		echo "ISD: ".htmlspecialchars($_POST["isdcode"])."<br>";
		echo "Phone: ".htmlspecialchars($_POST["phone"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
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
					<td><input type="text" name="name" value="<?php echo $name;?>"
				</tr>
				
			
												
				<tr>
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td>
				</tr>
				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input type="text" name="isdcode" value="<?php echo $isdcode;?>" placeholder="code" size="4"><b>-</b><input type="text" name="phone" value="<?php echo $phone;?>" placeholder = "Number" size="9"> </td>
				</tr>
				
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td>
				</tr>
				
				<tr>
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"> </td><td><span>
				</tr>
				
				<tr>
				<select name="Payment_Options">
					<option disabled selected>Payment_Options</option>
					<?php
						$pay= array("Bkash","Nagad","Rocket");
						for($j=0;$j<count($pay);$j++)
						{
							echo "<option>$pay[$j]</option>";
						}
					?>
				</select>
				</tr>
				
				

				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="Update">
				</td>
				
				
				
					
			
				
				
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>