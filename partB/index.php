<?php
session_start();
	$display="";
	if(isset($_POST['email']) && isset($_POST['password']))
	{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if($email&&$password)
	{
		
		  require("scripts/DB_Connection.class.php");
		  $obj = new DB_Connection();
		  $obj->connect();
		
		
		$query = mysql_query("SELECT * FROM users WHERE email='$email'");
		
		$rows = mysql_num_rows($query);
		
			if($rows!=0)
			{
				while($row = mysql_fetch_assoc($query))
				{
					$dbemail= $row['email'];
					$dbpassword= $row['password'];
				}
					
					 if($email==$dbemail && $password==$dbpassword)
					 {
						
						$_SESSION['admin']=1;
						$_SESSION['email']=$email;
						
					 }
					 else
						{
						   $display= "Incorrect password !";
						}
			}
			else
			{
				$display="User does not exist!";	
			}
		
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Login Page</p>
<form id="form1" name="form1" method="post" action="file:///G|/ITN30AT/partB/forgetpassword.php">
  <table width="270" border="0">
    <tr>
      <td width="116">User Name</td>
      <td width="144"><label for="textfield"></label>
      <input type="text" name="username" id="textfield" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" name="password" id="textfield2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
  <p><a href="file:///G|/ITN30AT/partB/ForgotPassword.html">Forgot Password</a></p>
  <p><a href="file:///G|/ITN30AT/partB/Register.html">Register</a></p>
</form>
</body>
</html>
