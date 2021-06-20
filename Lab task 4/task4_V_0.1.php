<?php

	
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	$email="";
	$err_email="";
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	$gender="";
	$err_gender="";	
		
	$bio="";
	$err_bio="";
	
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
		else{
			$uname = $_POST["uname"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password Required";
		}

		else{
			$pass = $_POST["pass"];
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
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
	}
		
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
	}	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["cpass"]."<br>";			
			echo $_POST["cpass"]."<br>";
			echo $_POST["gender"]."<br>";			
			echo $_POST["bio"]."<br>";
			
		}
		
	}
	
?>


<html>
	<head>
		<h1> Club Member Registration </h1>
	</head>
	<body>
		<form action="" method="post">
			<table>
				
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
					<td>:<input name="email" type="text"></td>
					<td><span></span></td>
				</tr>
				
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="right">What did you think <br> about us? </td>
					<td>:
						<input type="checkbox" > A friend or collegue <br> 
						<input type="checkbox" > Google &nbsp;<br> 
						<input type="checkbox" > Blog Post &nbsp; <br> 
						<input type="checkbox" > News Article
					</td>
				</tr>
				
				
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
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
