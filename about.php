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
					 <a href="index.html" class="navbar-brand logo glyphicon glyphicon-home"></a>
					</div>
				<nav class="collapse navbar-collapse" role="navigation">
					
					<!-- This list is the navigation bar icons that lead to different pages --->
					<ul class="nav navbar-nav">
					  <!-- Link to the about page --->
					  <li>
						<a href="about.html"><i class="glyphicon glyphicon-user"></i> About</a>
					  </li>
					  <!-- Link to the post status page --->
					  <li>
						<a href="poststatusform.html" role="button"><i class="glyphicon glyphicon-plus"></i> Post</a>
					  </li>
					  <!-- Link to the search status page --->
					  <li>
						<a href="searchstatusform.html" role="button"><i class="glyphicon glyphicon-search"></i> Search</a>
					  </li>
					</ul>
					
					<!-- This is a menu on the right side of the navigation bar, as a "shortcut" to all pages --->
					<ul class="nav navbar-nav navbar-right">
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-menu-hamburger"></i>Menu</a>
						<ul class="dropdown-menu">
						<!-- Link to the Home page --->
							<li><a href="index.html">Home</a></li>
							<!-- Link to the Post status page --->
							<li><a href="poststatusform.html">Post</a></li>
							<!-- Link to the search status page --->
							<li><a href="searchstatusform.html">Search</a></li>
							<!-- Link to the about page --->
							<li><a href="about.html">About</a></li>
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
						
						<!-- Using the panel display here, for the "about" page, since it looks nice.-->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Questions</h4></div>
							<div class="panel-body">
								<!-- Displayed questions as a list, looks cleaner-->
								<ul>
									<li>What features have you done or attempted in creating the site we should know about?
									<br></li>
										<br>
									<li>Which parts did you have trouble with?
									<br></li>
										<br>
									<li>What would you like to do better next time?
									<br></li>
										<br>
									<li>What references/sources you have used to help you learn how to create your website?
									<br></li>
										<br>
									<li>What have you learnt along the way?
									<br></li>
								</ul>
							</div>
						</div>
						<!-- End of about panel -->
						
					</div>
					
					<!-- Right column of the page, which is rarely used. Just a way to keep the page tidy and formatted --->
				</div>
			</div>
		</div>
	</div>
</body>

</html>