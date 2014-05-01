<?php
require("scripts/shopping_cart.class.php");
session_start();

if(isset($_GET['add']))
{
	
	$_SESSION['cart_'.$_GET['add']]+=1;
}

if(isset($_GET['sub']))
{
	
	$_SESSION['cart_'.$_GET['sub']]--;
}

if(isset($_GET['remov']))
{
	
	$_SESSION['cart_'.$_GET['remov']]=0;
}

$object=new shopping_cart();
$output=$object->cart($_SESSION);
$total=$object->total_amount_cost_to_pay();

if(isset($_GET['clear'])&&isset($_GET['clear'])=="empty")
{
	session_destroy();
	header("Location: home.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kay Star </title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="file:///G|/ITN30AT/phaseC/templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="file:///G|/ITN30AT/phaseC/js/jquery-1.4.2.min.js" type="text/javascript"></script>

<script src="file:///G|/ITN30AT/phaseC/js/jcarousellite.js" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function(){
	
	  $("a.new_window").attr("target", "_blank");
	  
	  //carousel
	  $(".carousel").jCarouselLite({
		  btnNext: ".next",
		  btnPrev: ".prev"
	  });
	});
</script>
</head>
<body>


<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
	<form name="form2" id="form2" method="post" action="">
       	      <table width="1121" border="0">
                <tr>
                  <td height="23"><a href="index.php">HOME</a></td>
                  <td><a href="Register.php">REGISTER</a></td>
                </tr>
              </table>
</form></li>
    	</ul>
    </div> 
	<!-- end of menu -->
    
<div id="templatemo_header">
   	  <div id="templatemo_special_offers">
       	<p>
                <span></p>
       	<p align="center">&nbsp;</p>
   	  </div>
        
        
    <div id="templatemo_new_books">
   	  <ul>
                <li>Dreamweaver CS6</li>
                <li>Flash cs6</li>
                <li>html5 and css3 </li>
                <li>PHP and MySQL</li></ul></div>
</div>
    <!-- end of header -->
    
  <div id="templatemo_content"><!-- end of content left -->
        
              <div class="carousel-box">
						<div class="prev"></div>
						
						<div class="carousel">     
                        
							
									<div class="box">
                                      <div class="templatemo_content_left_section">
                                       <ul>
              <li>
            <h4>Dreamwaever CS6  </h4>
            
                <form id="form2" name="form1" method="post" action="">
                  <div align="center">
                    <table width="250" height="205" border="0">
                      <tr>
                        <th width="100" rowspan="2" align="left" scope="row"><img src="file:///G|/ITN30AT/phaseC/pic/pic1.jpg" width="80" height="150" /></th>
                        <td width="107"><label for="email3"></label>
                          <p>PHILIPS 18.5 INCH MONITOR PH196V3LSB25</p>
  <p align="center">&nbsp;</p>
                          <h3>R2000.00</h3>
                          <label for="password3"></label></td>
                      </tr>
                      <tr>
                        <td><span class="buy_now_button"><a href="file:///G|/ITN30AT/phaseC/login.php">Buy Now<span class="detail_button"></span></a></span></td>
                      </tr>
                    </table>
                  </div>
                </form>
                 
              </li>
            </ul>
         				
								
                
	
									<div class="box"><ul>
              <li>
                                    <h4>Flash cs6</h4>
            
	        <form id="form3" name="form1" method="post" action="">
                  <table width="298" height="213" border="0">
                    <tr>
                      <th width="103" rowspan="2" align="left" scope="row"><img src="file:///G|/ITN30AT/phaseC/pic/pic2.jpg" width="80" height="150" alt="gt" /></th>
                      <td width="148"><label for="email4"></label>
                        <p>SEAGATE 3.5INCH EXPANSION 3TB</p>
                        <h3>R1549.00<br />
                        </h3>
                        <label for="password4"></label></td>
                    </tr>
                    <tr>
                      <td height="79"><span class="buy_now_button"><a href="file:///G|/ITN30AT/phaseC/login.php">Buy Now<span class="detail_button"></span></a></span></td>
                    </tr>
                  </table>
                </form>	
                  </li>
            </ul>				
                                </div>
									<div class="box">
										                 <ul>
              <li>   <h4>html5 and css3 </h4>
            
							           <form id="form1" name="form1" method="post" action="">
                                         <div align="right">
                                           <table width="260" height="205" border="0">
                                             <tr>
                                               <th width="100" rowspan="2" align="left" scope="row"><img src="file:///G|/ITN30AT/phaseC/pic/pic4.jpg" width="80" height="150" alt="i" /></th>
                                               <td width="107"><label for="email"></label>                              <p>CANON 3-IN-1 PRINTER MG4240</p>
  <h3>R1950.00</h3>                            
  <label for="password"></label></td>
                                             </tr>
                                             <tr>
                                               <td><span class="buy_now_button"><a href="file:///G|/ITN30AT/phaseC/login.php">Buy Now<span class="detail_button"></span></a></span></td>
                                             </tr>
                                           </table>
                                         </div>
                      </form>
                           </li>
            </ul>	
									</div>
    </div>
            <div class="next" align="right"></div>
         </div>
    </div>
        <!--- copy -->
        
   <!-- <div id="templatemo_content_left"></div>
        
        <p>
          <!-- End of copy --><!-- end of content right
          
        </p>
        <a href="subpage.html"><img src="images/templatemo_ads.jpg" alt="ads" width="894" height="102" /></a></div> 
     end of content -->
     <center>
    <div id="templatemo_footer">
   <center>
	     
      <div id="templatemo_content_left2">
	         <div class="templatemo_content_left_section">
	           <h1><span>Login</span></h1>
	           <ul>
	             
	               <form id="form5" name="form1" method="post" action="file:///G|/ITN30AT/phaseC/index.php">
	                 <table width="250" height="128" border="0">
	                   <tr>
	                     <th width="67" align="left" scope="row"><div align="left">Email </div></th>
	                     <td width="117"><label for="email21"></label>
	                       <input type="text" name="email" id="email21" width="100px" /></td>
                       </tr>
	                   <tr>
	                     <th align="left" scope="row"><div align="left">Password</div></th>
	                     <td><label for="password21"></label>
	                       <input type="password" name="password" id="password21"  width="100px" /></td>
                       </tr>
	                   <tr>
	                     <th colspan="2" align="left" scope="row"><div align="center">
	                       <input type="checkbox" name="remember" id="remember" />
	                       Remember Me</div></th>
                       </tr>
	                   <tr>
	                     <th align="left" scope="row">&nbsp;</th>
	                     <th align="left" scope="row"><input type="submit" name="login" id="login" value="Login" /></th>
                       </tr>
	                   <tr>
	                     <th colspan="2" align="left" scope="row"><a href="#">Forgot your password?</a></th>
                       </tr>
	                   <tr>
	                     <div id="cala">
	                       <th colspan="2" align="left" scope="row"><a href="file:///G|/ITN30AT/phaseC/register.php">Register now!</a></a></th>
                         </div>
                       </tr>
                     </table>
                   </form>
                 </li>
               </ul>
	           <p>&nbsp;</p>
        </div>
	         <div class="templatemo_content_left_section">
	           <h1>&nbsp;</h1>
</div>
            
	         <div class="templatemo_content_left_section">
	           <p>&nbsp;</p>
        </div>
              
      </div>
	  Copyright © 2014
   </center> 	
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container --></center>
    <!-- end of footer -->
</body>
</html>
