<?php 

require_once("config.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECONDARY</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home.css">

<link rel="stylesheet" href="css/s1.css">

<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">



<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">


</head>
<body>

<section class="sect  border-bottom ">
        <nav class="navbar navbar-expand-lg  container border-bottom-2">
            <div class="contact ml-1">
                <span class="fa fa-envelope font" id="fontawesome"></span><span href="" class="text-black-50 test">
                    info@educaremm.com
                    &nbsp;</span>

            </div>

            <div class=" social ml-auto mr-2">
                <a href="" class="text-black-50 text-monospace text-decoration-none border-right"><i class="fa fa-user text-warning"></i> <?php echo "<span >Welcome " . $_SESSION['username'] . "</span>"; ?> </a>
                <i class="fa fa-sign-out-alt ml-3 text-warning"><a href="logout.php" class="text-black-50"> Logout</a></i>







            </div>
        </nav>


    </section>



    <nav class="navbar navbar-expand-lg navbar-light  container" id="navbar">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" width="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="Primary.php">Primary</a>
                        <a class="dropdown-item" href="secondary.php">Secondary</a>
                        <a class="dropdown-item" href="summer_programs.php">Summer Programs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="activity.php">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>



 <?php

 include "carousel.php";

 ?>


 <div class="container mt-5">

<div class="row d-flex flex-column flex-lg-row justify-content-around ">
 
<div class="col-12 col-lg-6 col-md-12">

<div class="card" >
 <img class="card-img-top" src="images/Tea.jpg" alt="Card image">
 <div class="card-body">
   <h4 class="card-title">Learn Web Designing</h4>
   <p class="card-text">Most web designers need at least some knowledge of basic programming languages, such as HTML, CSS, PHP, jQuery, JavaScript and Flash. </p>
								
									<p><span>Duration:</span> 1 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p></p>

   <a href="#" class="btn btn-primary">Join</a>
 </div>

</div>


</div>

<div class="col-12 col-lg-6">

<div class="card" >
 <img class="card-img-top" src="images/T3.jpg" alt="Card image">
 <div class="card-body">

 <h4 class="card-title">Learn Graphic Designing </h4>
   <p class="card-text">The graphic designer or design team can contribute to the development of an educational multimedia project.</p>
								
									<p><span>Duration:</span> 8 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 3,00,000</p></p>

  
   <a href="#" class="btn btn-primary">Join</a>
 </div>

</div>


</div>

<div class="col-12 col-lg-6">

 <div class="card"  >
  <img class="card-img-top" src="images/Tea.jpg" alt="Card image">
  <div class="card-body">
  <h4 class="card-title">Learn Photoshop</h4>
   <p class="card-text">Adobe Photoshop CC – Essentials Training Course (Skillshare)
Adobe Photoshop CC – Advanced Training Course (Skillshare)
Ultimate Adobe Photoshop Training (Udemy) </p>
								
									<p><span>Duration:</span> 5 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 2,50,000</p></p>

    <a href="#" class="btn btn-primary">Join</a>
  </div>

</div>


 </div>

 <div class="col-12 col-lg-6">

 <div class="card" >
  <img class="card-img-top" src="images/T3.jpg" alt="Card image">
  <div class="card-body">
  <h4 class="card-title">Learn Computing</h4>
   <p class="card-text">Computing includes designing, developing and building hardware and software systems; processing, structuring, and managing various kinds of information; doing scientific research on and with computers.</p>
								
									<p><span>Duration:</span> 3 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 5,00,000</p></p>

    <Join href="#" class="btn btn-primary">Join</a>
  </div>

</div>


 </div>


 
 

</div>


 </div>

 

 <div class="container-fluid mt-5 la1 p-5 ">

  <div class="row d-flex flex-column flex-lg-row flex-md-column justify-content-center">

    <div class="col-12 col-lg-5 col-md-12 text-lg-left text-md-center text-sm-center">
    <ul>
						<li><i class="fa fa-book"></i> Free books for students</li>
						<li><i class="fa fa-money "></i> Affordable fees</li>
						<li><i class="fa fa-graduation-cap "></i> Experienced teachers</li>
						<li> <i class="fa fa-book"></i> Free books for students</li>
					</ul>
    </div> <br> <br>
     
    <div class="col-12 col-lg-5 col-md-12 text-lg-left text-md-center text-sm-center">
    <h1>why us?</h1>
					<p itemprop="description">Educare International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</p>

					<a href="#" class="btn btn-warning">Read more</a>
    </div>  <br> <br>



  </div>



 </div>






<?php

include 'footer.php';

?>
    
