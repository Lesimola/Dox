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

       	    <h1>Login </h1>
       	    <form name="form2" id="form2" method="post" action="">
       	      <table width="1121" border="0">
                <tr>
                  <td><a href="index.php">HOME</a></td>
                  <td><a href="Register.php">REGISTER</a></td>
                </tr>
              </table>
</form>
       	    
       	      <form id="form1" name="form1" method="post" action="file:///G|/ITN30AT/partB/index.php">
                <table width="" height="" border="0">
                  <tr>
                    <th width="67" align="left" scope="row"><div align="left">Email  </div></th>
                    <td width="117"><label for="email"></label>
                    <input type="text" name="email" id="email" width="100px" required/></td>
                  </tr>
                  <tr>
                    <th align="left" scope="row"><div align="left">Password</div></th>
                    <td><label for="password"></label>
                    <input type="password" name="password" id="password"  width="100px" required/></td>
                  </tr>
                         
                  <tr>
                    <th align="left" scope="row">&nbsp;</th>
                    <th align="left" scope="row"><input type="submit" name="login" id="login" value="Login" /></th>
                  </tr>
                  <tr>
                    <th colspan="2" align="left" scope="row"><a href="file:///G|/ITN30AT/partB/forgert.php">Forgot your password?</a></th>
                  </tr>
                  <tr>
                    <div id="cala">
                      <th colspan="2" align="left" scope="row"><a href="file:///G|/ITN30AT/partB/register.php">Register now!</a></span></a></th></div>
                  </tr>
                </table>
              </form>
			  <form id="form2" name="form2" method="post" action="">
                        <table width="200" border="0">
                          <tr>
                            <td width="86"><p>
                              <label for="type">Search Type</label>
                            </p>
                              <p>
                                <label for="type"></label>
                                <select name="type" id="type">
                                <option>Name</option>
                                <option>Discription</option>
                                <option>ISBN</option>
                                </select>
                              </p></td>
                            <td width="98"><label for="term">Search Term</label>
                            <input name="term" type="text" id="term" size="17" required/></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="search" id="search" value="Search" /></td>
                          </tr>
                        </table>
                      </form>   
</div>

</body>
</html>
