<?php
$conn = mysqli_connect('localhost', 'root', '1stking1759', 'support');
	if(!$conn){
		
		die(mysql_error());
	}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Animate.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Slabo+27px&display=swap" rel="stylesheet">
	<style>
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}
		.header-font{
			font-family: 'Poppins', sans-serif;
		}
		.font-list{
				font-family: 'Slabo 27px', serif;

		}
		.font-list li{
			letter-spacing:2px;
			font-size:20px;
			padding:12px 25px;
			list-style:none;
			color:#fff;
			
		}
		.font-list li:hover{
			background:#555;
			color:lime;
			border-bottom:2px solid red;
		}
	</style>
    <title>Hello, world!</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
	  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			  </li>
			</ul>
	  </div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			
				<div class="col-sm-3 bg-dark">
					<h3 class="text-primary header-font">Side Navigation</h3>
					<?php

						$quer = "select * from menu_item";
						$sel = mysqli_query($conn, $quer);
							if(!$quer){
								die(mysql_error);
							}
							
						echo '<ul class="font-list">';
						while($row = mysqli_fetch_array($sel)){
								$id = $row['Menu'];
								echo "<li>
											$id
									</li>";
						}
							
						
						echo '</ul>';
					?>
					
				</div>
				<div class="col-sm-6">
					<h1>Main Content</h1>
					
					
					<div class="">
						<form action="" method="post" entype="multipart/form-data">
							<input type="file" name="uploadedfile">
								<input type="submit" value="submit" name="submit" >
					</div>
				</div>  
				<div class="col-sm-3 bg-dark">
					<h1>Side Navigation</h1>
				</div>
				
		</div>
		
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>