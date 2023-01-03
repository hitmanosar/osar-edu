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
    <title>PRIMARY</title>
   

    
   
     <link rel="stylesheet" href="css/p1.css">
    
     <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home.css">

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



 <div class="container-fluid mt-5 ">

   <div class="row d-flex flex-column flex-lg-row flex-md-column  justify-content-around">

    <div class="col-12 col-lg-5 col-md-12 text-lg-left text-md-center">
        <h2> Who are we?</h2>
        <p class="mt-5 we_p">Educare International School is an academically focused school that wants to instill 
            and develop strong core values in our students. We firmly believe in the importance and 
            the power of quality education and how it can change lives, societies and countries.
             As a team, we are committed to educate our next generation and to prepare them 
             to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</p>

    </div> <br>

    <div class="col-12 col-lg-5 col-md-12 text-md-center">
        <h2>Our Story</h2>
    <ul class="mt-5 our">
						<li><i class="fa fa-graduation-cap our_f"></i> <a  class="ml-3">60+ certified teachers</a></li>
						<li><i class="fa fa-thumbs-o-up our_f"></i> <a  class="ml-4">600+ students enrolled</a></li>
						<li><i class="fa fa-book our_f"></i> <a class="ml-4">50+ courses completed</a></li>
						<li><i class="fa fa-users our_f"></i> <a class="ml-4">10000+ foreign followers</a></li>

						
					</ul>
    </div> <br>


   </div>


 </div>


 <div class="container mt-5">

 <h2 class="text-center">Our Professional Teachers</h2>
 
 <div class="row mt-5 d-flex flex-column flex-lg-row justify-content-around text-center">
   
 <div class="col teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Mr.James </h3>
						<p>Native English</p>
 </div> 

 <div class="col teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Dr.Paul</h3>
						<p>Mathematics</p>
 </div> 

 <div class="col  teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Dr.Lorem</h3>
						<p>Physics</p>
 </div>

 <div class="col  teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Mr.Jhun</h3>
						<p>Chemistry</p>
 </div>
 <div class="col  teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Dr.Kola </h3>
						<p>Physics</p>
 </div>

 <div class="col teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Ms.Kim</h3>
						<p>Biology</p>
 </div>

 <div class="col  teacher">
 <img src="images/Teacher1.jpg" alt="developer images">
						<h3>Ms.Kiwi</h3>
						<p>Art</p>
 </div>

 




 </div>




 </div>




<?php

include 'footer.php';

?>