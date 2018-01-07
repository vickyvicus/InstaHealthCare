
<?php
require 'scripts/connect.inc.php';
require 'scripts/core.inc.php';
if(loggedin()){
	$visitor_name = strtoupper(getfield('name'));
	$visitor_photo = getfield('photo');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Available Doctors</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/findadocresult.css"/>
    <script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="scripts/effects.js"></script>
</head>

<body>
	
	<header>
    	<div class="HeaderTitle">
    		<img src="images/logo.png" width="70" height="70" border="0"/>
        </div>
        <nav>
        	<ul>
            	<li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="findadoc.php">Find a Doctor</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="connect.php">Connect</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
     <hr>
     <div class="full_status">
		 <div class="status">
			<div class="status_image"><img src="<?php echo $visitor_photo; ?>" width="40" height="40"></div>
			<div class="status_name">Welcome <?php echo $visitor_name; ?></div>
		</div>
		</div>
     <div class="heading"><h1>Doctors Available</h1></div>
     <div class="notify">
    		<div class="notifytext"></div>
   		 	<div class="cross">X</div>
    </div>
	
	<div>
		<table border="0" align="center">
        	<tr>
				<th align="right">Select Cities:</th>
    			<td align="left">
                	<form action="findadocresult2.php" method="POST">
                	<select name="city" id="city" required>
                    	<option value="--" selected >--</option>
                    	<option value="banglore">Banglore</option>
                        <option value="delhi">Delhi</option>
                        <option value="jaipur">jaipur</option>
                        <option value="kolkata">Kolkata</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="pune">Pune</option>
                    </select>
					<input type="hidden" name="part3" value="<?php echo $_POST['part3']; ?>">
                    <input type="submit" value="submit" class="button">
                    </form>
                </td>
            </tr>
		</table>
	</div>
    
    <?php
    if(isset($_POST['part3']) && !empty($_POST['part3'])){
		$value = $_POST['part3'];
		if($value == '--'){
			echo'<script type="text/javascript">
									$("document").ready(function(){
									slidedown();
									$(".notify > .notifytext").html("You\'ve selected nothing. No results found.");
									$(".cross").click(function(){
										window.location.replace("findadoc.php");
										});
									});
									</script>';	
		}
		else {
			
			$city=$_POST['city'];
			if($city=='--')
			{
					$query ="SELECT * FROM `doctor` WHERE `tags` LIKE  '%".$value."%'";
					$query_run = mysql_query($query);
					 while($query_result= mysql_fetch_array($query_run,MYSQL_ASSOC))
						  {
							  $query1 ="SELECT * FROM doctors_clinic WHERE  doc_id=".$query_result['id']."";
							  $query_run1 = mysql_query($query1);
							  $query_result1= mysql_fetch_array($query_run1,MYSQL_ASSOC);
							echo '<div class="result">
								<div class="result_left"><img src="'.$query_result['doc_photo'].'"></div>
								<div class="result_right"><b>'.$query_result['Doc_name'].'</b><br><br>
								<b>Info:</b> '.$query_result['info'].' <br><br>
								<b>Doctor\'s Type:</b> '.$query_result['type'].' <br><br>
								<b>Contatct No.</b> '.$query_result['doc_contact'].' <br><br>
								<b>E-Mail :</b> '.$query_result['Doc_email'].' <br><br>
								<b>City :</b> '.$query_result['city'].' &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
								<a href="http://localhost/med2/map.php?name='.$query_result['Doc_name'].'&address='.$query_result1['address'].'&lat='.$query_result1['lat'].'&lng='.$query_result1['lng'].'" target="_blank"> 
								Click to find clinic on map </a><br><br>
								
								</div>
								</div>'.'<br>';
							
							}
   																			
			}
			else
			{
				$query ="SELECT * FROM `doctor` WHERE city='".$city."' AND `tags` LIKE  '%".$value."%'";
				$query_run = mysql_query($query);
				 while($query_result= mysql_fetch_array($query_run,MYSQL_ASSOC))
					  {
						  $query1 ="SELECT * FROM doctors_clinic WHERE  doc_id=".$query_result['id']."";
							  $query_run1 = mysql_query($query1);
							  $query_result1= mysql_fetch_array($query_run1,MYSQL_ASSOC);
						echo '<div class="result">
								<div class="result_left"><img src="'.$query_result['doc_photo'].'"></div>
								<div class="result_right"><b>'.$query_result['Doc_name'].'</b><br><br>
								<b>Info:</b> '.$query_result['info'].' <br><br>
								<b>Doctor\'s Type:</b> '.$query_result['type'].' <br><br>
								<b>Contatct No.</b> '.$query_result['doc_contact'].' <br><br>
								<b>E-Mail :</b> '.$query_result['Doc_email'].' <br><br>
								<b>City :</b> '.$query_result['city'].' &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
								<a href="http://localhost/med2/map.php?name='.$query_result['Doc_name'].'&address='.$query_result1['address'].'&lat='.$query_result1['lat'].'&lng='.$query_result1['lng'].'" target="_blank"> 
								Click to find clinic on map </a><br><br>
								
								</div>
								</div>'.'<br>';
							
							}
			}																
			
		}		
		
	}
    ?>
  
		
<script type="text/javascript">	 
	  var element = document.getElementById('city');
    element.value = "<?php echo $_POST['city']; ?>";

</script>
</body>

</html>
<?php
}
else {
	header('Location: index.php');	
}

?>
