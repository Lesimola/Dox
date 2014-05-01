<form name="form2" id="form2" method="post" action="">
       	      <table width="1121" border="1">
                <tr>
                  <td>HOME</td>
                  <td>ABOUT US </td>
                  <td>REGISTER</td>
                  <td>CONTACT US </td>
                </tr>
              </table>
</form>
<?php
	$id = trim($_POST['textfield']);
	
	
	
   if (!get_magic_quotes_gpc()) {
	$id = addslashes($id);
  
   
  }
  echo "ID : " .$id;
  @ $db = new mysqli('localhost', 'root', '','users');

  if (mysqli_connect_errno()) {
     echo "<p> "."Error: Could not connect to database.  Please try again later."."</p> ";
     exit;
  }
  
  $query = "select * from userinfo where ID ='".$id."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	
	
	for ($i=0; $i <$num_results; $i++) {
	$row = $result->fetch_assoc();
	echo "<p><strong>".($i+1).". Password: ";
	echo htmlspecialchars(stripslashes($row['password']))."</p>";
	echo "<p><strong>"."2".". Username: ";
	echo htmlspecialchars(stripslashes($row['Username']))."</p>";
	
	}
  $result->free();
  $db->close();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <p>FORGET PASSWORD</p>
 <form name="form2" id="form2" method="post" action="">
       	      <table width="1121" border="0">
                <tr>
                  <td><a href="index.php">HOME</a></td>
                  <td><a href="Login.php">LOG IN</a></td>
                  <td><a href="Register.php">REGISTER</a></td>
                </tr>
              </table>
</form>
 <form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="297" border="0">
      <tr>
        <td>ID Number</td>
        <td><label for="textfield"></label>
        <input type="text" name="ID Number" id="textfield" /></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td><label for="textfield2"></label>
        <input type="text" name="E-mail" id="textfield2" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
