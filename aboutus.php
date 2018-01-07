<?php
	require 'scripts/core.inc.php';
	require 'scripts/connect.inc.php';
	
	if(loggedin()){
			$visitor_name = strtoupper(getfield('name'));
			$visitor_photo = getfield('photo');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/aboutus.css"/>
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
     <div class="heading"><h1>About Us</h1></div>
     <div class="menu1">
    	<p><i>A System to Prescribe the Medicine for Given Symptoms</i> is a major project under the guidance of Mr. Pratipal Singh</p>
     </div>

	 <div class="heading"><h1>Team Members</h1></div>
		 <div class="menu">
			<div>
				<img src="images\Vikas.png" width="128" height="128">
				<div class="roll">Vikas Agarwal</div>
			</div>
			<div>
				<img src="images\Udit.jpeg" width="128" height="128">
				<div class="roll">Udit Sethi</div>
			</div>
			<div>
				<img src="images\Vijay.jpeg" width="128" height="128">
				<div class="roll">Vijay Goyal</div>
			</div>
			<div>
				<img src="images\Tarun.jpeg" width="128" height="128">
				<div class="roll">Traun Rai</div>
			</div>
		 </div>

</body>
</html>
<?php
	}
	else {
		header ('Location: index.php');	
	}
	
?>