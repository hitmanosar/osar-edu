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
    <title>EDUCARE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item dropdown">
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

    <!-- Navbar end -->



   