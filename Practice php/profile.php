<?php
$phone="";
	$err_phone="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="contact number Required";
		}
		
		else{
			$phone = $_POST["phone"];
		}
	}

?>
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Update Your Profile</h1>
    <p>Please fill in this form to update your account.</p>
    <hr>
	
	   <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	
	<tr>
					<td align="right">Phone</td>
					<td>:<input name="Phone" value="<?php echo $phone;?>" type="text" placeholder="Please Enter contact number"> <br>
					<span><?php echo $err_phone;?></span></td>
				</tr>

    <label for="email"><b>Email</b></label> <br>
    <input type="text" placeholder="Please enter your email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Please enter your Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label> <br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
       <button type="submit">Login</button>
    </div>
  </div>
</form>