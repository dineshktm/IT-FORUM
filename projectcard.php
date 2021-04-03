<?php
session_start();
if(isset($_SESSION['uname']))
{	
	
?>



<!DOCTYPE html>
<html>
	<title>Select your companies!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="projectcard.css"/>
	<link rel="icon" href="projectcard.png" type="image/x-image">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Overlock+SC&display=swap" rel="stylesheet">


<body> 
	<div class="card">
		<div class="image"></div>
			<img id="img" src= "pproduct company.png">
		<div class="text"></div>
		<h2 id="title">PRODUCT COMPANIES</h2>
		<p id="para">PRODUCT based companies create or design their products or application in advance even before clients approach them. Once the product is made or application is developed it is opened to the market</p>
		<div class="button">
		<a href="product.php"><button id="button">view more</button></a>
		</div>
	</div>	
	<div class="container">
	</div>
	<div class="card">
		<div class="image"></div>
			<img id="img" src="service_logo-removebg-preview.png">
		<div class="text"></div>
		<h2 id="title">SERVICE COMPANIES</h2>
		<p id="para">SERVICE company are which provide service to their clients are called IT service companies. <br>
			IT Services includes several services like Software development, Outsourcing, Website Design & development, and any Services related to IT.
		</p>
		<div class="button">
		<a href="service.php"><button id="button">view more</button></a>
	</div>
	</div>	

</body>
</html>

<?php
}
else
	header('Location:index.php');
?>