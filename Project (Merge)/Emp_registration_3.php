<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: lightseagreen;">
<h1 style="text-align:center; color: royalblue">Employee Registraion Form</h1>
<?php
if(isset($_POST['submit']))
{


    echo '<h3 style="text-align: center; border:3px solid red; color: royalblue">';
    echo "Name: ",$_POST['fname']," ", $_POST['mname'], " ",$_POST['lname'] ;
    echo "<br>";
    echo "Contact Number: ", $_POST['Phone'], " ",$_POST['Phone2'] ;
    echo "<br>";
    echo "Email: ",$_POST['email'];
    echo "<br>";
    echo "Address: ",$_POST['caddress'] ;
    echo "<br>";
    echo '</h3>';

    
}
?>
<!--FROM-->
<form style="text-align: center;" method=POST>
<!--NAME PART-->
<div>
<label>Fisrtname : </label>
</div>
<div>
<input type="text" required="required" name=fname placeholder="First Name">
</div>
<br>
<div>
<label>Middlename:</label>
</div>
<div>
<input type="text" name=mname placeholder="Middle Name">
</div><br>
<div>
<label>Lastname:</label>
</div>
<div>
<input type="text" required="required" name=lname placeholder="Last Name">
</div>
<br>
<!--PHONE NUMBER-->
<div>
<label>Phone :</label>
</div>
<div>
<input type="tel"  name="Phone"  minlength="14" maxlength="14" value="+880"><br><br>
<input type="tel" name="Phone2" placeholder="phone no.">
</div>
<br>
<!--ADDRESS-->
<div>
<label>Current Address :</label>
</div>
<div>
<textarea name="caddress" rows="4" cols="50" placeholder="Current Address."></textarea>
</div>
<br>
<!--EMAIL-->
<div>
<label>Email</label>
</div>
<div><input name="email" required="required" type="email">
</div>
<br>
<!--SUBMISSION-->
<div>
<input style="background-color: green;" type="submit" name = "submit" value="Register">
</div>
<br>
</form>
</body>