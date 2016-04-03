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
						
						<!-- Panel for searching status -->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Search a status</h4></div>
							<!-- Search body that contains the search form -->
							<div class="panel-body">
								<!-- Search form uses searchstatusprocess.php as action -->
								<form method="get" action="searchstatusprocess.php" id="searchStatus" role="dialog">
									<div class="input-group input-group">
										<!-- search form itself -->
										<input type="text" class="form-control" placeholder="Search a status" name="status" id="search">
										<!-- button for search form -->
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit" id="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- End of search form panel -->
					</div>
					
					<!-- Right column of the page, which is rarely used. Just a way to keep the page tidy and formatted --->

				</div>
			</div>
		</div>
	</div>
</body>

</html>