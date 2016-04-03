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
						
					</div>
					
					<!-- Right column of the page, which is rarely used. Just a way to keep the page tidy and formatted --->
				</div>
			</div>
		</div>
	</div>
	
	<script>
	//Should add this soon
	</script>
</body>

</html>