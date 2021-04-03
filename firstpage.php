<?php
session_start();
if(isset($_SESSION['uname']))
{	
	
?>




<!DOCTYPE html>
<html>
    <head>
        <title>KEC-IT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="1.png" type="image/x-image">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ef7bc3d237.js" crossorigin="anonymous"></script>
        
            <a href="logout.php"><button id="login" class="btn btn-primary-outline btn-md"><i class="fas fa-sign-in-alt"></i>Logout</button></a>
            
        <!--<nav >
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbutton1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
            </div>
        </nav>-->
        <div class="main">
            <div class="container" id="cont">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Welcome to</h3>
                        <h1><strong>Information Technology</strong></h1>
                        
                        <hr>
                        <a href="projectcard.php" target="_blank"><button class="btn btn-default btn-lg"><i class="fas fa-search-location"></i> Explore</button></a>
                    </div>
                </div>
            </div>
        </div>
        
        <section>
            <h1 id="footer">CONTACT US:</h1>
            <a href="https://www.instagram.com/invites/contact/?i=1wh8k3h9ig7b0&utm_content=3rp7f64"> <i class="fa fa-instagram" aria-hidden="true" id="insta">        INSTAGRAM </i></a>
            <a href="https://www.instagram.com/invites/contact/?i=1wh8k3h9ig7b0&utm_content=3rp7f64"> <i class="fa fa-telegram" aria-hidden="true"  id="tele"></i>     TELEGRAM </i></a>
            <a href="faq.php"><button id="faq" class="btn btn-primary-outline btn-md"><i class="fa fa-question-circle" aria-hidden="true"> FAQ</i></button> </a>
        </section>
        
       
        
    </body>
</html>


<?php
}
else
	header('Location:index.php');
?>