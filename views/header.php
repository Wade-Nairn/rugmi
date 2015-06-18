<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
		
		<header>
			<h1>RUMGI</h1>
		<nav>
			
			<ul>
				<? if(Auth::is_Logged_in()): ?> 
					<li><a href="user.php">My Page</a></li>
					<li><a href="upload_image.php">Upload New Image</a></li>
				<? else: ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				<? endif; ?>
			
			</ul>
		</nav>
	</header>

	<div class="container">