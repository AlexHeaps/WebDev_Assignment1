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
						
						<!-- Using the panel display here, for the "about" page, since it looks nice.-->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Questions</h4></div>
							<div class="panel-body">
								<!-- Displayed questions as a list, looks cleaner-->
								<ul>
									<li>What features have you done or attempted in creating the site we should know about?
										<br>I've used the Bootstrap framework, which provides better visibility among browsers, regardless of size
										<br>I've used a navigation bar consistent throughout all pages, so that all pages are easily accesible
										<br>I've attempted to create a search bar within the nav-bar, to provide quick status searching
									</li>
									<br>
									<li>Which parts did you have trouble with?
										<br>Initially, I had trouble with the bootstrap framework, which was a whole lot of fun to implement
										<br>As I got to the backend, I did have some trouble with the PHP side of things, mostly because I'm not a strong programmer
									</li>
									<br>
									<li>What would you like to do better next time?
										<br>I'd like to be a better programmer, but that's something I'm naturally weak at, which can't be helped
										<br>Implied as above, I'd like to have figured out the Backend side of things a bit better, such as DB connection, and a more precise search process
									</li>
									<br>
									<li>What references/sources you have used to help you learn how to create your website?
										<br>Code Academy & Lecture slides to learn PHP
										<br><a href="www.w3schools.com">W3 Schools</a> for basically everything (from HTML, CSS, JS and BootStrap to PHP
										<br><a href="www.php.net/manual/">PHP Manual</a> for further PHP help
										<br><a href="www.getbootstrap.com">Get Bootstrap</a> & <a href="www.startbootstrap.com">Start Bootstrap</a> for further Boostrap related stuff
										<br>YouTube & Stack Exchange for various other tutorials and guides for smaller things
										<br><a href="http://www.bootstrapzero.com">BootStrapZero.com</a> for providing an amazing template (primarily the CSS stylesheet) for my assignment. I already previously knew Bootstrap, so I wanted to use an existing stylesheet to style my assignment
									</li>
									<br>
									<li>What have you learnt along the way?
										<br>Mostly just reinforcing my current web development technologies, PHP, HTML, JS, CSS, and other web frameworks
										<br>If I had to be more specific, I'd say learning applications with PHP has been incredibly helpful also.
									</li>
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