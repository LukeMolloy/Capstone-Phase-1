<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	ob_start();
	session_start();
?>	


    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/location.js"></script>
<script type="text/javascript" src="/popups.js"></script>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>
  <link rel="stylesheet" href="stylesheets/template.css">
    <link rel="stylesheet" href="stylesheets/popups.css">
	<div class="navbar">
	</div>
		<?php include 'dbLogin.php' ?>
</head>
	<div class="header">
		<label class="title">Safe Haven Our Women</label>
 			<li><a href="">Login</a></li>
 			<li><a href="">Apply</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Contact Us</a></li>
		</ul> 
		
	</div>
		<div class="navbar">
		 
	</div>
<body>

    
    
    
    
    <div class="loginform">
      <h2>Find a safe haven.</h2>
            <br /> <br />
            <form method ="post" action ="inspectsafehaven.php">
        <label class="search">Search nearby an address: </label><input type="text" name="searchinput" size="100"> <button>Search!</button>
    </form>
        <br /> <br /><hr align="center" width="90%"><br /><br />
        
        
        
    <table align="center" cellpadding = "20">
        <tr>
            <th>
                <h1>You are here:</h1>
                <?php
			       	echo $phone;
			    ?>
            </th>
            <th>
                <h1>Suggested safe havens:</h1>
                
            </th>
        </tr>
        
        <tr>
            <td>
            <article>
            <!-- Place the map here -->  
            </article>
        </td>
        
        
        

        <td>
               <?php
               	  /*  $sql2="SELECT * FROM Client WHERE $user = PhoneNumber";
               	    $result2 = mysqli_query($db, $sql2);
               	    
               	    while($row2 = $result2->fetch_assoc()) {
               	        $userDependants = $result2['Dependants'];
               	        $userPets = $result2['Pets'];
               	        $userInfants = $result2['Infants'];
               	    }*/
               	    
               	    $sql="SELECT * FROM House";// WHERE DependantSpaces >= $userDependants AND InfantSpaces >= $userInfants AND PetSpaces >= $userPets AND SpacesAvailable >= 0";
                    $result = mysqli_query($db, $sql);
                    
                    
                    if ($result->num_rows > 0) {
                        echo "<table cellpadding='10px'><tr><th>First Name</th> <th>Last Name</th> <th>PhoneNumber</th> <th>Email</th> <th>Address</th> <th></th></tr>";
                    }
                    
                    
                    
                    
                    while($row = $result->fetch_assoc()) {
                        
                        echo "
                        <tr><td>".$row["FirstName"]."</td>
                        <td>".$row["LastName"]."</td>
                        <td>".$row["PhoneNumber"]."</td>
                        <td>".$row["Email"]."</td>
                        <td>".$row["Address"]."<br /><br /></td>
                        <td>  <a href='inspectsafehaven.php?id=$row[HouseID]'><button>Inspect</button></a></td></tr>";
                    }
                    echo "</table>";
              	?>
              	</form>
        </td>
    </table>


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