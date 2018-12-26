<!DOCTYPE HTML>
<html>
	<head>
		<title>Assignment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<?php 
	if(isset($_POST["userid"])&&isset($_POST["pass"]))
		if(($_POST["userid"]=="admin")&&($_POST["pass"]=="admin123")){
			$var=$_POST["userid"];
			session_start();
			$_SESSION['admin']=$var;
			
	header('location:index.php');
			}
			else{

echo "<script>alert('Invalid User Name or Password')</script>";

			}


	?>
	<style type="text/css">
		
button{
	width: 100%;
}

	</style>

	<body>

			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/pic01.png" alt="" /></span>
					</header>

				<!-- Main -->
					<form id="main" method="POST">

						<!-- Thumbnails -->
							<section>
								<div >
										
							<h3 align="left">Email Id</h3>
							<input type="text" name="userid" placeholder="Enter Email">

								</div>
								<div >
										<h3 align="left">Password</h3>
										<input type="Password" name="pass" placeholder="Enter Password">
									
								</div>
							
								<div style="padding-top: 30px; padding-left: 25px;" class="thumbnails">
								
								<button type="submit">Login</button>
									
								</div>
							</section>

					</form>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>