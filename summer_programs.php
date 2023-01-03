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
    <title>SUMMER PROGRAMS</title>

    <link rel="stylesheet" href="css/summer_program.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">



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
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
  


    <div class="summer_program">
        <div class="summer_program_header">
            <div class="about_summer_progrem">
                <h1>Summer Program</h1>
                <p >We are planing to summer holiday in two section .the foirst onfe is advanture and second is learning programmer you can see the section are below</p>
                <p class="about_more">Summer Courses are a way to build up valuable academic qualifications during the summer session in schools and universities all around the world.</p>
                <button class="read_more program_read">Read more &rarr;</button>
            </div>
        </div>
        <div class="programs_type">
            <div class="claim_mountain">
                <img src="./images/climb_img1.jpg" class="img" alt="">
                <h3>Advanture to claim mountain</h3>
                <p>Did we get you at Mountain Adventure? Push your personal boundaries in this truly adventurous program.</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <div class="cliam_ice_mountain">
                <img src="./images/climb_img2.jfif" class="img" alt="">
                <h3>Advanture to claim ice mountain</h3>
                <p>Winter mountaineering in the high Wasatch Peaks is challenging, beautiful and great training for alpine ascents worldwide</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <div class="visti_to_beach">
                <img src="./images/beach_trip1.jpg" class="img" alt="">
                <h3>Visit to beach</h3>
                <p>Our annual Beach to Bush program is heading "bush" to rural and remote EDU schools from 7th to 24th November.</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <div class="scientist_class">
                <img src="./images/learnig.jpg" class="img" alt="">
                <h3>Our science class</h3>
                <p>A science program begins with the goals and expectations for student achievement</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <div class="japanese_laguage_class japan">
                <img src="./images/japan.jfif" class="img" alt="">
                <h3>Our japanese class</h3>
                <p>The Japanese Language Program (JLPTUFS) also invites Japanese students (undergraduate and postgraduate) to participate in its classes.</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <div class="chinese_language_class china">
                <img src="./images/chines.png" class="img" alt="">
                <h3>Our china class</h3>
                <p>This Chinese Language Training Program designed for overseas students is delivered by experienced teachers.</p>
                <button class="read_more">read more &rarr;</button>
            </div>
            <button class="more_program">more program</button>
        </div>

        <script>
            const program_read=document.getElementsByClassName("program_read")[0];
            const about_more=document.getElementsByClassName("about_more")[0];
            const japan=document.getElementsByClassName("japan")[0];
            const china=document.getElementsByClassName("china")[0];
            const moreProgram=document.getElementsByClassName("more_program")[0];
            
            
            const myFunction=()=>{
                japan.classList.toggle("show")
                china.classList.toggle("show")
            }
            const myFunction2=()=>{
                about_more.classList.toggle("show_more")
               
                
            }
            moreProgram.addEventListener("click",myFunction);
            program_read.addEventListener("click",myFunction2)
        </script>


        <?php
            include "footer.php"
        ?>
