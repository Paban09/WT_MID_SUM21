<html>
	<head>
		<title> Thired Problem </title>
	</head>
	<body>
	
		<?php
			
			$len = 5;
			$wid = 4;
			
			if ($len == $wid){
				echo "The shape is Square <br>";
			}else{
				echo "The shape is rectangle <br>";
			}
			
			$area = $len * $wid;
			$peremeter = 2*$len+2*$wid;
			
			echo "The area is " . $area . "<br>";
			echo "The peremeter is " . $peremeter ;
			
			
		?>

	</body>
</html>