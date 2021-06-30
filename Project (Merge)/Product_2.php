<?php
								
	$name="";
	$err_name="";
	
	$pcode="";
	$err_pcode="";
	
	$quality="";
	$err_quality="";	
	
	$details="";
	$err_details="";
	
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=6){
			$hasError = true;
			$err_name = "Name must be greater than 6 characters ";
		}
		else{
			$name = $_POST["name"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["pcode"])){
			$hasError=true;
			$err_uname="Product Code Required";
		}
		elseif (strlen($_POST["pcode"]) <=6){
			$hasError = true;
			$err_pcode = "Product Must Have 6 Digit Code";
		}
		elseif(strpos($_POST["pcode"]," "))
			{    $hasError=true;
				$err_pcode="Space is not allowed!";
			}
		else{
			$pcode = $_POST["pcode"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($_POST["quality"])){
			$hasError = true;
			$err_quality = "Quality Required";
		}
		else{
			$quality = $_POST["quality"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["details"])){
			$hasError = true;
			$err_details = "Details Required";
		}
		else{
			$bio = $_POST["details"];
		}
	}
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			
			echo $_POST["name"]."<br>";
			echo $_POST["pcode"]."<br>";
			echo $_POST["quality"]."<br>";
			echo $_POST["details"]."<br>";
			
		}
		
	}


?>


<html>
	<head>
		<title> Product </title>
	</head>
	<body>
	
		
	<form action="" method="post">
		<table>
			<tr>
				<td>
				<img src="Product.png"alt= "This is Product logo" width="150" height="130">
				</td>
				<td>
				<h2><span style="background-color:gold;color:black">Product</h2></span>
				</td>
			</tr>
			
			<tr>
					<td align="right">Product Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Product Code</td>
					<td>:<input name="pcode" value="<?php echo $pcode;?>" type="text" placeholder="Product Code"> <br>
					<span><?php echo $err_pcode;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Product Quality</td>
					<td>:<input type="radio" value="Import" <?php if($quality == "Import") echo "checked";?> name="quality">Import <input type="radio" <?php if($quality == "Export") echo "checked";?> value="Export" name="quality"> Export <br>
					<span><?php echo $err_quality;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Product Details</td>
					<td>: <textarea name="details"><?php echo $details;?></textarea>
						<br><span><?php echo $err_details;?></span>
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