<?php
session_start();
if(isset($_SESSION['uname']))
{	
	
?>


<!DOCTYPE html>
<html>
    <head> 
        <title>SERVICE-COMPANY'S</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="service_logo-removebg-preview.png" type="image/x-image">
        <link rel="stylesheet" href="service.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="full">
            <a href="projectcard.php"><button id="back" class="btn btn-primary-outline btn-md"><i class="fas fa-sign-in-alt"></i>Back</button></a>
            
            <h1 id="heading"><b>SERVICE COMPANY'S</b></h1>
            <hr>
            <br><br>
            <!--FIRST ROW-->
            <div class="card-deck">
                <div class="card">
                <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSEgVQeyVGpABErex02I56ycNNq9Z_i8PHI5w&usqp=CAU>
                <div class="card-body">
                    <h5 class="card-title">C O G N I Z A N T (CTS)</h5>
                    <p class="card-text">
                        <strong>SALARY : </strong> 4.5 - 6.75 LPA <BR>

                        <strong>SELECTION PROCESS :</strong> <br>
                        Aptitude Round <br>
                        Debugging Round <br>
                        Narrative Writing <br>
                        Students with 80% cut-off in Automata Fix to move to GenC Next coding round. <br>
                        The Automata Fix's score will not be considered for Non-CS/IT students <br>
                        Gen C Next round will consist of 2 section: <br>
                        Section 1 – Programming Skills: 2 Ques – 30 minutes <br>
                        Section 2 – Problem Solving: 2 Ques – 30 minutes <br> </p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="https://allvectorlogo.com/img/2017/02/tata-consultancy-services-tcs-logo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">T A T A (TCS)</h5>
                    <p class="card-text">
                        <strong>SALARY : </strong> 4.5 - 6.75 LPA <BR>
                        <strong>SELECTION PROCESS :</strong> <br>
                        Quatitative Aptitude Test <br>
                        Programming Language Test <br>
                        Coding Roud <br>
                    </p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="https://www.infosys.com/content/dam/infosys-web/en/global-resource/media-resources/infosys-logo-JPEG.jpg " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">I N F O S Y S</h5>
                    <p class="card-text">
                        <strong>SELECTION PROCESS :</strong> <br>
                        Online Aptitude Test <br>
                        Infosys Interview Process <br>
                        Technical Round <br>
                        HR Round <br>
                        A minimum of 60 percent in class X and XII and 65 percent or above in B.Tech. <br>
                        Candidates should not have more than 2 years gap in education.
                    <br></p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                <img src="" class="card-img-top" alt="company logo" >
                <div class="card-body">
                    <h5 class="card-title">COMPANY NAME</h5>
                    <p class="card-text">DESCRIPITON OF COMPANY</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="..." class="card-img-top" alt="company logo">
                <div class="card-body">
                    <h5 class="card-title">COMPANY NAME</h5>
                    <p class="card-text">DESCRIPITON OF COMPANY</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="..." class="card-img-top" alt="company logo">
                <div class="card-body">
                    <h5 class="card-title">COMPANY NAME</h5>
                    <p class="card-text">DESCRIPITON OF COMPANY</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
            </div>
        </div>
            <!--THIRD ROW
            <div class="card-deck">
                <div class="card">
                <img src="apple.jpg" class="card-img-top" alt="codaglobal" height="200px" width="150px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">HAPPY HACKING!</small></p>
                </div>
                </div>
            </div>
        </div> -->
        
    </body>
</html>

<?php
}
else
	header('Location:index.php');
?>