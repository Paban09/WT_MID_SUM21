<?php

    $uname="";
	$err_uname="";
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	
	
	
	$hasError=false;
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		
		
	if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Username Required";
		}
		
		else{
			$uname = $_POST["uname"];
		}
				
	
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
			
				
		
			
			
			
		
		echo "User_Name:".htmlspecialchars($_POST["uname"])."<br>";
		echo "Password:".htmlspecialchars($_POST["pass"])."<br>";
		echo "Opinion:".htmlspecialchars($_POST["opinion"])."<br>";
		
		
	}
	
?>


<html>
	<head>
		<title>Feedback</title>
	</head>
	<body>
		<form method="post">
		
			<table border = "2">
			  <tr>
				<td align="middle" colspan="2"> Feedback </td>
			  </tr>
			  <tr>
			  <td><span>UserName:</span></td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>"<span><?php echo $err_uname;?></span>
			  </tr>
			  
			  <tr>
					<td><span>Password:</span></td>					
					<td><input type="password" name="pass" value="<?php echo $pass;?>"> </td><span><?php echo $err_pass;?></span>
				</tr>
				<tr>
					<td><span>Confirm Password:</span></td>
					<td><input type="Password" name="cpass" value="<?php echo $cpass;?>"> </td><span><?php echo $err_cpass;?></span>
				</tr>
			  
			  <tr>
				<td align = "right">Enter Your Opinion</td>
				<td>:<input type="text" name = "opinion" placeholder = "Opinion"></td>
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