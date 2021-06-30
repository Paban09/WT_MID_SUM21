<?php
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";

    $email="";
	$err_email="";

	$Userid="";
	$err_Userid="";



	$hasError=false;
	
if	($_SERVER["REQUEST_METHOD"]=="POST")
{
	if (strlen($_POST["username"])<6)

			{   $hasError=true;
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{    $hasError=true;
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}

         
if(empty($_POST["password"]))
{
			$hasError = true;
			$err_password = "Password Required";
		
}
			elseif (strlen($_POST["password"])<8)
			{
				$hasError=true;
				$err_password="Password should contain at least 8 characters";
			}

			elseif ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$hasError=true;
				$err_password="Password must contain at least 8 characters and 2 special character!";
				}

				elseif(strpos($_POST["password"]," "))
			{    $hasError=true;
				$err_password="Space is not allowed!";
			}

			else
			{
				$password=$_POST["password"];
			}

	if(!strpos($_POST["email"],"@"))
			{if(!strpos($_POST["email"],"."))

				$hasError=true;
				$err_email="your email is not in correct format!";
				}

				else
				{
					$email=$_POST["email"];
				}

if (empty($_POST["Userid"])) {
			 	$hasError=true;
				$err_Userid="id is required"; 
}
				elseif (strlen($_POST["Userid"])<8)

			{   $hasError=true;
				$err_Userid="Userid should  contain 8 characters";
			}
			elseif(strpos($_POST["Userid"]," "))
			{    $hasError=true;
				$err_Userid="id cannot contain any space";
			}
			else
			{
				$userid=$_POST["Userid"];
			}

echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
echo "email: ".htmlspecialchars($_POST["email"])."<br>";
echo "Userid: ".htmlspecialchars($_POST["Userid"])."<br>";

}


	?>

	<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b> Admin Log in Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>

               

				<tr>
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" placeholder = "Enter your official email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>

				<tr>
					<td><span>Userid:</span></td>
					<td></td>
					<td><input type="text" name="Userid" placeholder = "Enter your official id" value="<?php echo $Userid;?>"> </td><td><span><?php echo $err_Userid;?></span></td>
				</tr>

				<tr>
				<td >
				<input type="Submit" name="submit" value="login">
				</td>
				</tr>
				<tr>
				
				<td><button><a target="_blank" href="Admin_reg_2.php" >admin register </a></button>
				<td><button><a target="_blank" href="Product_2.php" >product register </a></button>
				<td><button><a target="_blank" href="Delivery_man_2.php" >delivery man register </a></button>
				
				</tr>

				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
				
				