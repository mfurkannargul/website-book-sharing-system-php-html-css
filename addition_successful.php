<?php 

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<title>Book Sharing</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
		
 	<title>Book Sharing</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body> 
 	<header id="header">
				<h1><a href="index.php">Book Sharing</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="genres.php">Genres</a></li>
						<li><a href="booklist.php">Booklist</a></li>
						<li><a href="login.php" class="button special">Logout</a></li>
					</ul>
				</nav>
	</header>
	<div class="container">
		<div class="login-box"></div>
		<div class = "row">
		<div class = "col-md-10 login-left">
			<h5 style="color:#000000"> Note: Book has been successfully added! </h5>
			<h2>ADD YOUR BOOK</h2> 
			<form action="addition.php" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="bookname" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Author</label>
					<input type="text" name="bookauthor" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Page Count</label>
					<input type="text" name="bookpagecount" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Genre</label>
					<input type="text" name="bookgenre" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input type="text" name="owneremail" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Add</button>
				<h6 style="color:#000000"> If you want to see the booklist, please click: </h6>
				<li><a href="booklist.php" class="button special">Booklist</a></li>
				<h6 style="color:#000000"> Do you want to delete your book? </h6>
				<li><a href="delete.php" class="button special">Delete</a></li>
			</form>
		</div>
		</div>
		</div>
	</div>
 </body>
 </html>