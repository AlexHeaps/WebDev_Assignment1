<?php

//This is the code for validating and connecting to the databaase

//Validate Form
	$stCodeerr = false;
	$stCodepaterr = false;
	$staterr = false;
	$statpaterr = false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//validate Status Code. ensures input type.
		if(!isset($_POST["statusCode"]) || empty($_POST["statusCode"])){
			$stCodeerr = true;
		} else {
			$stCodeerr = false;
			$stCode = $_POST["statusCode"];
			if(!preg_match("/^[S]\d{4}$/", $stCode)){
				$stCodepaterr = true;
			} else{
				$stCodeerr = false;
				$stCodepaterr = false;
			}
		}
		
		//validate Status. ensures input type
		if(!isset($_POST["statusIn"]) || empty($_POST["statusIn"])){
			$staterr = true;
		} else {
			$staterr = false;
			$stat = $_POST["statusIn"];
			if(!preg_match("/^[a-zA-Z0-9 ,.!? ]+$/", $stat)){
				$statpaterr = true;
			} else{
				$staterr = false;
				$statpaterr = false;
			}
		}
	}
	
//Connect to Database
	if($staterr == false AND $statpaterr == false AND $stCodeerr == false AND $stCodepatterr == false){
		
		//details for database
		$serverName = "localhost:3306";
		$userName = "root";
		$password = "";
		$dbName = "test";
		
		//connection to database
		$conn = mysqli_connect($serverName, $userName, $password, $dbName);
		//error handling if database cannot connect
		if(!$conn){
			die('Unable to connect to Database'.mysel_error());
		}
		
		//result object for sql query
		$result = mysqli_query($conn, 'show tables like "WebDevTable"');
		$row = mysqli_fetch_assoc($result);
		
		if(isset($row)){
		//error handling for sql query
		} else{
			echo '<script language = "javascript">';
			echo 'alert("Table does not exist")';
			echo '</script>';
			echo "<br>";
			
			//sql for new table
			$newTable = "CREATE TABLE WebDevTable(StatusCode VARCHAR (5) UNIQUE KEY, Status VARCHAR (200) NOT NULL, Share VARCHAR (50), Date DATE, Type VARCHAR (50))";
			
			//notification that table is successfully created
			if(mysqli_query($conn, $newTable)){
				echo '<script language = "javascript">';
				echo 'alert("Table created")';
				echo '</script>';
			}
			
			//error handling for table failure
			} else {
            echo "Error Creating Table: " . mysqli_errno($conn);
			}
		}
		
		$permission = implode(",", $_POST['perm']);
		$share = $_POST['share'];
		$date = $_POST['date'];
		trim($stat, " ");

		//insert values into table
		$SQL = "INSERT INTO WebDevTable (StatusCode, Status, Share, Date, Type) VALUES ('$stCode', '$stat', '$share', '$date', '$permission')";
		if (mysqli_query($conn, $SQL)) {
			echo '<script language = "javascript">';
			echo 'alert("new record created successfully")';
			echo '</script>';

		//error handling for duplicated data
		} else {
			echo '<script language = "javascript">';
			echo 'alert("Duplicated Entry Detected Please try again")';
			echo '</script>';
		
		//close database connection
		}
		mysqli_close($conn);
	
	//error handling for status input
	} else {
	    //error handling for status input
		if ($stCodeerr == true) {
			echo '<script language = "javascript">';
			echo 'alert("Submit FAILED: Please enter status Code")';
			echo '</script>';
		}
		//error handling for status input
		if ($staterr == true) {
			echo '<script language = "javascript">';
			echo 'alert("Submit FAILED: Please enter Status")';
			echo '</script>';
		}
		//error handling for status input
		if ($stCodepaterr == true) {
			echo '<script language = "javascript">';
			echo 'alert("Submit FAILED: Status Code must follow S#### pattern")';
			echo '</script>';
		}
		//error handling for status input
		if ($statpaterr == true) {
			echo '<script language = "javascript">';
			echo 'alert("Status must only contain alphanumeric characters and (.,!?))"';
			echo '</script>';
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FaceNovel - Home</title>
	<!--This is here to import the appropriate style-sheet and bootstrap framework -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!--This is the stylesheet used throughout the project--->
	<link rel="stylesheet" type="text/css" href="css/styles.css"/> 
</head>

<body>
	<div id="container">
	
	<!-- Where the navigation bar length is set--->
		<div class="column col-sm-12 col-xs-12" id="main">
		<!-- Not at all a rip-off of Facebook's navigation bar -->
				<div class="navbar navbar-blue navbar-static-top">  
					<div class="navbar-header">
					  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					 <a href="index.php" class="navbar-brand logo glyphicon glyphicon-home"></a>
					</div>
				<nav class="collapse navbar-collapse" role="navigation">
					
					<!-- This list is the navigation bar icons that lead to different pages --->
					<ul class="nav navbar-nav">
					  <!-- Link to the about page --->
					  <li>
						<a href="about.php"><i class="glyphicon glyphicon-user"></i> About</a>
					  </li>
					  <!-- Link to the post status page --->
					  <li>
						<a href="poststatusform.php" role="button"><i class="glyphicon glyphicon-plus"></i> Post</a>
					  </li>
					  <!-- Link to the search status page --->
					  <li>
						<a href="searchstatusform.php" role="button"><i class="glyphicon glyphicon-search"></i> Search</a>
					  </li>
					</ul>
					
					<!-- This is a menu on the right side of the navigation bar, as a "shortcut" to all pages --->
					<ul class="nav navbar-nav navbar-right">
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-menu-hamburger"></i>Menu</a>
						<ul class="dropdown-menu">
						<!-- Link to the Home page --->
							<li><a href="index.php">Home</a></li>
							<!-- Link to the Post status page --->
							<li><a href="poststatusform.php">Post</a></li>
							<!-- Link to the search status page --->
							<li><a href="searchstatusform.php">Search</a></li>
							<!-- Link to the about page --->
							<li><a href="about.php">About</a></li>
						</ul>
					  </li>
					</ul>
					
				</nav>
			</div>
		</div>
		<!-- End of top Navigation bar. Once again, I did not steal this look from Facebook -->
		
		<!-- Sets the size of the 'body' of the page (underneath the navigation bar) --->		
		<div class="padding">
			<div class="full col-sm-12">
				<div class=row">
				
					<!-- Left column of the page, which is primarily used. Just a way to keep the page tidy and formatted --->
					<div class="col-sm-5">
						
						<!-- Well used as a display for the status post-->
						<div class ="well">
							<!-- Form for status post -->
							<form class="form-horizontal" role="form" action="poststatusprocess.php" onSubmit="return validateForm()" method="post">
							<h4>Post a status!</h4>
								<div class="form-group" style="padding:10px;">
									
									<!-- Input for status code -->
									<div class="form-group" style="margin:5px;">
										<label for="statusCode" class="control-label" style="margin:5px;">Status Code</label><br>
										<input class="form-control" type="text" name="statusCode" placeholder="enter your status code: SXXXX" maxlength="5" style="padding:10px;">
									</div>	
									
									<!-- Input for status-->
									<div class="form-group" style="margin:5px;">
										<label for="statusIm" class="control-label" style="margin:5px;">Status</label><br>
										<input class="form-control" type="text" name="statusIn" placeholder="what's on your mind?" maxlength="500" style="padding:10px;">
									</div>
									
									<!-- Selection for share type -->
									<div class="form-group" style="margin:5px;">	
										<label for="statusCode" class="control-label" style="margin:5px;">Share Type</label><br>
											
											<label class="radio-inline"><input type="radio" name="share" value="Public">Public</label>
											<label class="radio-inline"><input type="radio" name="share" value="Public">Friends</label>
											<label class="radio-inline"><input type="radio" name="share" value="Public">Only Me</label>
									</div>
									
									<!-- Code for Date -->
									<?php
										$thisDate = date("Y-m-d");
										echo '<div class="form-group">';
										echo '<label for ="date" class="control-label">Date</label>';
										echo '<input class="form-control" type="date" value= "', $thisDate, '" name="date">';
										echo '</div>';
									?>
									
									<!-- Selection for permission type -->
									<div class="form-group" style="margin:5px;">
										<label for="permissions" class="control-label" style="margin:5px;">Permission Type</label><br>
											<label class="checkbox-inline"><input type="checkbox" name="perm[]" value=Like>Allow Like</label>
											<label class="checkbox-inline"><input type="checkbox" name="perm[]" value=Comment>Allow Comment</label>
											<label class="checkbox-inline"><input type="checkbox" name="perm[]" value=Share>Allow Share</label>
									</div>	
										
								</div>
								
								<!-- Buttons to submit and reset statuses -->
								<button class="btn btn-primary pull-right" type="submit" style="margin:5px;">Post</button>
								<button class="btn btn-primary pull-right" type="reset" style="margin:5px;">Reset</button>
								
								<!-- Adds icons for Upload, Photos and Map location. No functionality, only aesthetic. --->
								<ul class="list-inline">
									<li><i class="glyphicon glyphicon-upload"></i></a></li>
									<li><i class="glyphicon glyphicon-camera"></i></a></li>
									<li><i class="glyphicon glyphicon-map-marker"></i></a></li>
								</ul>
							</form>
							<!-- End of status form -->	
						</div>
					
					<!-- Right column of the page, which is rarely used. Just a way to keep the page tidy and formatted --->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	//Should add this soon
	</script>
</body>

</html>