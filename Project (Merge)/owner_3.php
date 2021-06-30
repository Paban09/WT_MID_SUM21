<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: lightseagreen;">
<h1 style="text-align:center; color: royalblue">Owner login</h1>
<?php
if(isset($_POST['submit']))
{
    echo '<h3 style="text-align: center; border:3px solid green; color: royalblue">';
    if($_POST['uname']=='punam21')
    {
        if($_POST['email']=='punam21@gmail.com')
        {
            if($_POST['pass']=='123456789')
            {
                echo "WELCOME ",$_POST['uname'];
            }
            else
            {
                echo "Password Do Not Match";
            }
        }
        else
        {
            echo "Invalid Email";
        }
    }
    else
    {
        echo "Wrong User Name.";
    }
    echo '</h3>';

    
}
?>
<!--FROM-->
<form style="text-align: center;" method=POST>
<!--NAME PART-->
<div>
<label>User name : </label>
</div>
<div>
<input type="text" required="required" name="uname" placeholder="User Name">
</div>
<br>
<!--EMAIL-->
<div>
<label>Email</label>
</div>
<div><input required="required" name="email" type="email" placeholder="x..@y.com">
</div>
<br>
<!--PASSWORD-->
<div>
<label>Password</label>
</div>
<div>
<input name="pass" type="password" placeholder="Password ***">
</div>
<br>
<!--SUBMISSION-->
<div>
<input style="background-color: green;" type="submit" name = "submit" value="Login">
</div>
<br>
<button><a target="_blank" href="Emp_registration_3.php" >Employee register </a></button>
</form>
</body>
</html>