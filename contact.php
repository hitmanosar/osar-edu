<?php
   

    require_once("config.php");

    session_start();

   if (!isset($_SESSION['username'])) {
    header("Location: index.php");
  }
   
?>






   <?php


   if(isset($_POST['send_botton'])){

      echo "<script>alert('Successfully sent to admin  reply to your email soon');        

                 </script>" ;
   }


   ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/contact.css">

<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

    

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

 <style type="text/css">
     
     .fas{
        font-size: 16px;
        font-style: normal;
     }



     .fas a{
        font-family: Cambria;
       font-weight: bold;
       font-size: 15px;
     }


 </style>
 

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
                    <a class="nav-link" href="welcome.php">Home </a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us </a>
                </li>

            </ul>
        </div>
    </nav>

   
    
        



    

    <div class="conatact">
        <div class="contact_header">
            <div class="contact_img_letter">    
                <h1>Contact</h1> <br>
                 <h6>How Can We Help You!</h6>
            </div>
        </div>
             <!-- stat of contact from  -->
             <div class="contact_information">
                 <div class="ourlocation ">
                     <a href="#" class="map_icon"><i class="fa-solid fa-map-location-dot contact_icon "></i></a>
                    <h3>Our Location</h3>
                    <p>No(3).Chan Mya Yate Mon Street,Bahan Township, Yangon,Myanmar</p>
                 </div>
                 <div class="contact_us_anything_time">
                     <a href="#"><i class="fa-solid fa-mobile-screen-button contact_icon"></i></a>
                     <h3>Contact Us Anytime</h3>
                     <p>locale_filter_matches</p>
                     <p>+95-9742110221 ,01-221-4321</p>
                     
                 </div>
                 <div class="contact_gmail ">
                     <a href="#"><i class="fa-solid fa-envelope-open-text contact_icon"></i></a>
                     <h3>Write Some Words</h3>
                     <p>Lorem, ipsum dolor.</p>
                     <p>info@educaremm.com</p>
                 </div>
             </div>

        <div class="contact_body">
            <div class="from_contro">
                <div class="contact_body_letter">
                    <h1>Need Help? Sure we are Online!</h1>
                    <p>Let us gice you more details about the special offer website you want us.plate fill out the form below</p>
                    <p> We have million of website owner who happy to work with us!</p>
               </div>
           </div>
           <div class="formAndLocation">

           <form  method="post" class="Contact_form">
               <div class="contact_child">
                   <div class="name_message">
                     <div class="name">
                        <input type="text" name="first_name" placeholder="First Name" class="first_name" required>
                        <input type="text" name="last_name" placeholder="Last Name" required>
      
                         </div>
                        <div class="email_tel">
                        <input type="email" name="email" class="email is-invalid" placeholder=" your email" required>
                        <input type="tel" name="phone" id="" placeholder=" your phone"  required>
        
                         </div>

                   </div>
                
                 <div class="message">
                    <textarea class="message_inbox" name="message" id=""placeholder="Give Us More Details..." required ></textarea>
                 </div>
                 </div> 
               
               <button type="submit" name="send_botton" class="contact_btn ">Get a Quote</button>
               
            </form>
            <!--  <div class="map">
            <p class="map_parent">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21604.667753065125!2d96.1509681568813!3d16.81634362506103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eca8da00badf%3A0xddcffcdec96b413!2z4YCX4YCf4YCU4YC64YC4IOGAmeGAvOGAreGAr-GAt-GAlOGAmuGAuiwg4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1646754307634!5m2!1smy!2smm" class="mapofCompany" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </p>
            </div>  -->
            
           </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <?php
        include "footer.php"
    ?> 


    
    
