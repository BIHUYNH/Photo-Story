<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>TimeLine NSS Album</title>
  <link rel="shortcut icon" href="images/lightning.ico">
  <!-- add styles -->
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  	#fh5co-header #fh5co-main-nav {
  float: right;
}
@media screen and (max-width: 768px) {
  #fh5co-header #fh5co-main-nav {
    display: none;
  }
}
#fh5co-header #fh5co-main-nav ul {
  padding-right: 30px;
  margin: 4px 0 0 0;
}
#fh5co-header #fh5co-main-nav ul li {
  padding: 0;
  margin: 0;
  display: inline;
}
#fh5co-header #fh5co-main-nav ul li a {
  font-family: "Roboto Slab", sans-serif;
  color: rgba(3, 33, 189, 0.8);
  text-decoration: none;
  margin-left: 30px;
  border-bottom: 2px solid transparent;
}
#fh5co-header #fh5co-main-nav ul li a:hover {
  text-decoration: none;
  color: #f9ad81;
}
#fh5co-header #fh5co-main-nav ul li.active a {
  color: #fff;
  border-bottom: 2px solid #f9ad81;
}
  </style>
</head>
<body>
  <header>
  	<div id="fh5co-header">
		<nav id="fh5co-main-nav">
			<ul>
				<?php if (isset($_SESSION['name_user'])): ?>
				<li><h4><a href="#"><?php echo $_SESSION['name_user'] ?></a></h4></li>
				<li><h4><a href="upload.php">Upload</a></h4></li>
				<li><h4><a href="logout.php">Log out</a></h4></li>
				<?php else: ?>
				<li><h2><a href="login.php" data-nav-section="home">Login</a></h2></li>
				<?php endif; ?>
			</ul>
		</nav>
	</div>
  </header>