<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	ob_start();
	session_start();
?>	



    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/inspectlocation.js"></script>
<script type="text/javascript" src="/popups.js"></script>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/templatetest.css">
  
    <link rel="stylesheet" href="stylesheets/popups.css">
	<div class="navbar">
	</div>
		<?php include 'dbLogin.php' ?>
</head>
		<div class="header">
		<label class="title">Safe Haven Our Women</label>
		<?php
			if ($row[7] == 1) {
				echo "<li><a href='adminpanel.php'>Admin Panel</a></li>";
			}
			
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	    		echo "<li><a href='logout.php'>Logout</a></li>";
			}
			else {
				echo "<li><a href='login.php'>Login</a></li>";
			}
			
			?>
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/registerClient.php">Register Client</a></li>

	</div>
		<div class="navbar">
		 
	</div>
<body>
    
    
    
    
    
    <div class="loginform">
        

        
        
        
        
        
    <mapcontainer></mapcontainer>
            <article>
            <!-- Place the map here -->  
            </article>
    
        
        

        <td>
               <?php
               	    
               	    
               	    $house = $_POST['id'];
               	   
               	    
               	    $sql="SELECT CAST(AES_DECRYPT(Firstname, 'show2016') AS CHAR(50)) FirstNameDecrypt FROM House WHERE HouseID = $house";
                    $result = mysqli_query($db, $sql);
                 
                    if ($result->num_rows > 0) {
                        echo "<table cellpadding='10px'><tr><th>First Name</th> <th>Last Name</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th>City</th> <th></th></tr>";
                    }
                    
                    
                    
                    
                    while($row = $result->fetch_assoc()) {
                        
                        echo "
                        <tr><td>".$row["FirstNameDecrypt"]."</td>
                       
                        <td><div id='add'>".$row["Address"]."</div></td>
                        <td><div id='city'>".$row["City"]."</div></td> 
                        </tr>";
                        //$description = $row["Description"];
                    }
                    echo "</table>";
                    
                    echo "<br /><br /><button>Contact</button><br /> <br /><br />";
                    
                  
                    
                    
                
                        //echo "<table cellpadding='10px'><tr><th>First Name</th> <th>Last Name</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th></th></tr>";
                    
                       
                        
                        
                        
                      
                      
           
                  // echo "</table>";
               	?> <br /> <br />
               	    <img src="images/inclusions1.jpg">
       
    <br /><br />
    

   <a href="/safehaven.php"><button>Go back</button></a>

</div>
</div>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <p>Some text in the Modal..</p>
  </div>

</div>





</div>




  <!--  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://www.proxysitereviews.com/squid-proxies">squid proxies</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-27.4661712,153.04741769999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.4661712,153.04741769999998)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>103 Merthyr Rd, New Farm, 4005, Brisbane<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net/wordpress-photography/" id="get-map-data">themecircle</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-27.4661712,153.04741769999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.4661712, 153.04741769999998)});infowindow = new google.maps.InfoWindow({content:"<b></b><br/>103 Merthyr Rd<br/>4005 Brisbane" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>									embed google maps							</a></small></div><div><small><a href="http://www.buyinstagramfollowersreviews.net/">buy instagram followers cheap</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(51.4778964503365,-0.1288090461364444),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.4778964503365,-0.1288090461364444)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>103 Merthyr Rd, New Farm, 4005<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
-->
</body>

<footer>
<br />
<table class="footertable">
	<tr>
		<td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			User Registration<br />
			Safe Haven Registration
		</td>
		<td class="darkertext">
			<br />About Us<br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br />Contact Us<br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>
