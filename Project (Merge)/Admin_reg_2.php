<?php
		
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	$gender="";
	$err_gender="";	
	
	$address="";
	$err_address="";
	
	$email="";
	$err_email="";
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	$hasError=false;
	
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
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Username Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "Name must be greater than 6 characters";
		}
		elseif(strpos($_POST["uname"]," "))
			{    $hasError=true;
				$err_uname="Space is not allowed!";
			}
		else{
			$uname = $_POST["uname"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (strlen($_POST["pass"])<8)
			{
				$hasError=true;
				$err_pass="Password should contain at least 8 characters";
			}

			elseif ((!strpos($_POST["pass"],"#"))||(!strpos($_POST["pass"],"$")))
				{
				$hasError=true;
				$err_pass="Password must contain at least 8 characters and 2 special character!";
				}

				elseif(strpos($_POST["pass"]," "))
			{    $hasError=true;
				$err_pass="Space is not allowed!";
			}

			else
			{
				$pass=$_POST["pass"];
			}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
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
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!strpos($_POST["email"],"@"))
			{
				if(!strpos($_POST["email"],"."))

				$hasError=true;
				$err_email="your email is not in correct format!";
				}

			else
				{
					$email=$_POST["email"];
				}
		
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["address"])){
			$hasError = true;
			$err_address = "Address Required";
		}
		else{
			$bio = $_POST["address"];
		}
	}
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["gender"]."<br>";			
			echo $_POST["address"]."<br>";
			
		}
		
	}


?>


<html>
	<head>
		<title> Admin </title>
	</head>
	<body>
	
		
	<form action="" method="post">
		<table>
			<tr>
				<td>
				<img src="Admin.png"alt= "This is Admin logo" width="150" height="130">
				</td>
				<td>
				<h2><span style="background-color:blue;color:white">Admin</h2></span>
				</td>
			</tr>
			
			<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text" placeholder="Enter Username"> <br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="cpass" type="password"><br>
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text" placeholder="Enter Your Email"> <br>
					<span><?php echo $err_email;?></span></td>
				</tr>
				
				
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Address</td>
					<td>: <textarea name="address"><?php echo $address;?></textarea>
						<br><span><?php echo $err_address;?></span>
					</td>
					
				</tr>
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Register"></td>
				</tr>
			
		</table>
	</form>
	</body>
</html>