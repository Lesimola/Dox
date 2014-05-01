<?php
 	session_start();
	
	$mainPage = 'product.php';
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('e_computer_db') or die(mysql_error());
	
	if(isset($_GET['add']))
	{
		$_SESSION['carts_'.$_GET['add']+='1'];
		
	}
	
	function products()
	{
		$query = mysql_query("SELECT id,product_name,price,detail_text,cartegory FROM products WHERE quantity > 0 ORDER BY id DESC");
		
		if(mysql_num_rows($query)==0)
		{
			echo 'No product to dispay';
		}
		else
		{
			while($row = mysql_fetch_assoc($query))
			{
				echo '<p>'.$row['product_name'].'<br/>'.$row['detail_text'].'<br/>'.number_format($row['price'],2).'<a href="#">add</a></p><br/>';
			}	
			
		}
	}
	

	echo $_SESSION['carts_1'];

?>