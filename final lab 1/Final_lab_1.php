<?php
$username="";
$err_username="";
$pass="";
$err_pass="";
$haserror=false;

$users= array("tanvir"=>"1234","sabbir"=>"123","karim"=>"456","rahim"=>"789");

if($_SERVER["REQUEST_METHOD"]=="POST")
{

	if(empty($_post["username"]))
	{
		$haserror=true;
		$err_username="username required";



	}
		else{

			$username=$_post["username"];

		}


	if(empty($_post["pass"]))
	{
		$haserror=true;
		$err_pass="password required";



	}
	
		else{
			$pass=$_post["pass"];
			
		


	}



}




?>

<html>
	<body>

	<center> 
		<form action="" method="post">
			UserName:<input type="text" name="username" value="<?php echo $username;?>"><span><?php echo $err_username;?></span><br>
			password:<input type="text" name="pass" value="<?php echo $pass;?>"><span><?php echo $err_pass;?></span><br>
			<input type="Submit" name="submit" value="login">

		</form>
	</center>		
	</body>
</html>