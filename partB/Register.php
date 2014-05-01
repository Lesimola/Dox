<?php
session_start();
$msg = "";
$data = "";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$Name = $_POST['name'];
	$surname = $_POST['surname'];
	$idnum = $_POST['idnum'];
	$email = $_POST['email'];
	$cellnum = $_POST['cellnum'];
	$username = $_POST['username'];
	$password  = $_POST['password'];
	$repass = $_POST['repass'];
	

	if($Name && $surname && $idnum && $email && $cellnum && $username && $password && $repass)
	{
		
				if (preg_match("/^[a-zA-Z]{3,30}$/",$Name))
				{
					if (preg_match("/^[a-zA-Z]{3,30}$/",$surname))
					{
						if (preg_match("/^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])
													(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(
													( |-)(\d{4})( |-)(\d{3})|(\d{7}))$/",$id))
						{
							if(preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/", $cellnum))
							{
								if(preg_match("/^[a-zA-Z0-9\_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\_]+$/",$email))
								{
										if(strlen($pass) < 8)
										{
  
											if($pass == $repass)
											{
												@ $db = new mysqli('localhost', 'root','','e_computer_db');
												
												 if (mysqli_connect_error()) 
												 {
													 $msg= "Error: Could not connect to database.Please try again later.</br>";
													 exit;
												 }
										
													
												 $query = "insert into users values
												(NULL,'".$Name."', '".$surname."','".$idnum."','".$email."','".$cellnum."','".$username."','".$pass."', '".$repass."')";
													
												$result = $db->query($query);
												
																								
												if ($result)
												{
													$msg = $email." is inserted into database.</br>";
													header("Location: login2.php");
													
												}
												else
													{
														$msg =  "An error has occurred.user was not added.please add an user</br>";
													}
											 
										}
										else
											{
												$msg = "password does not match";
											}
										}
										else
											{
										 	 $msg .="Invalid password.";
 											 }
								}
								else
									{
										$msg = "wrong email address";
									}
							}
							else
								{
									$msg ="Wrong number";
								}
							
						}
						else
							{
								$msg = "wrong SA id number";
							}
						
					}
					else
						{
							$msg = "Wrong surname format must be letters and more than two words";
						}
				}
				 else
				 {
					$msg = "please a name format  must be letters and more than two words";
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
<form id="form1" name="form1" method="post" action="">
REGISTER
<form name="form2" id="form2" method="post" action="">
       	      <table width="1121" border="0">
                <tr>
                  <td><a href="index.php">HOME</a></td>
                  <td><a href="Register.php">REGISTER</a></td>
                </tr>
              </table>
</form>
<div align="center">
    <table width="325" border="0">
      <tr>
        <td>Name</td>
        <td><label for="textfield"></label>
        <input type="text" name="name" id="textfield" /></td>
      </tr>
      <tr>
        <td>Surname</td>
        <td><input type="text" name="surname" id="textfield2" /></td>
      </tr>
      <tr>
        <td>ID Number</td>
        <td><input type="text" name="idnumber" id="textfield3" /></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><input type="text" name="emailaddress" id="textfield4" /></td>
      </tr>
      <tr>
        <td>Cell Number</td>
        <td><input type="text" name="cellnumber" id="textfield5" /></td>
      </tr>
      <tr>
        <td>User Name</td>
        <td><input type="text" name="username" id="textfield6" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="password" id="textfield7" /></td>
      </tr>
      <tr>
        <td>Re-Password</td>
        <td><input type="text" name="Re-Password" id="textfield8" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="button" name="button" id="button" value="Register" /></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
