<?php 

require_once("config.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ABOUT US</title>
</head>
 

  
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
     
    <link href="aos-master/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      
       <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/about.css">
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
                    <a class="nav-link" href="welcome.php">Home</a>
                </li>
                <li class="nav-item active">
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



  



  <div class="abdiv">
          <div class="abdivtxt">
            <div class="abdh">
                  <h3>About</h3>
              </div> <br> <br>
              <div class="abdp">

                  <span class="tohome">Home</span>
                   <span class="toabout">About</span>
              </div> <p></p>

              
          </div>
      </div> <br> <br> <br>

   <div class="container2">

   

    <div class="txt" ><h1>About Us</h1> <br>
    <p>Educare International School is an academically focused school that wants to instill and develop strong core values in our students.
     We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.
    </p> <br> <span class="read">Read More</span></div> <br>

    <div class="abimg">
    <img src="photo/About Us.jpg" class="abp">
    </div>



    
   </div> <br> <br> <br> <br>

      <div class="friend" data-aos="zoom-in">
          
          <div class="fritxt"><h1>Fun and friendships</h1> <br>
    <p>Our class are taught live and online so learners and teachers can interact via video chat or text in real time kids form real friendships on educare every day as they expand their knowledge and bulid their skill.
    </p> </div> 

    <div class="friimg">
    <img src="images/Activities/image2.jpg" class="fri"> </div> 


      </div> <br> <br> <br> <br>   




    <div class="certificate">
         <div class="ht" data-aos="zoom-in">
            <h3>Our School</h3>
            </div> <br> 
            <div class="certibox" data-aos="flip-left">
                <img src="photo/s1.jpg">
                 <img src="photo/s2.jpg"> 
                  <img src="photo/s4.jpg"> 
            </div>
        </div> <br>
        <br> <br>




      

     <div class="clients">
      <img src="logo/Logo1.jpg" class="cimg" alt="">
      <img src="logo/Logo2.jpg" class="cimg" alt="">
      <img src="logo/Logo3.jpg" class="cimg" alt="">
      <img src="logo/Logo4.jpg" class="cimg" alt="">
      <img src="logo/Logo5.jpg" class="cimg" alt="">
                
            </div> <br> <br> 


    <footer class=" text-center text-lg-start bg-dark text-muted  ">
  
   <section class=" d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
     <div class=" me-5 d-none d-lg-block ">
       <span>Get connected with us on social networks:</span>
     </div>

     <div>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class="fa fa-facebook" aria-hidden="true"></i>
       </a>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class=" fa fa-twitter "></i>
       </a>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class=" fa fa-google "></i>
       </a>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class=" fa fa-instagram "></i>
       </a>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class=" fa fa-linkedin "></i>
       </a>
       <a href=" " class=" me-4 text-reset pr-3 ">
         <i class=" fa fa-github "></i>
       </a>
     </div>

   </section>

   <section class=" "></section>
   <div class=" container text-center text-md-start mt-5 ">

     <div class=" row mt-3 ">

       <div class=" col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">

         <h6 class=" text-uppercase fw-bold mb-4 ">
           <img src=" images/logo.png " alt=" " width=" 80px ">
         </h6>
         <p>
           EDUCARE is personalized learning. With a comprehensive K-12 curriculum, individualized
           guidance, and real-time analytics, IXL meets the unique needs of each learner.
         </p>
       </div>

       <div class=" col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
         <!-- Links -->
         <h6 class=" text-uppercase fw-bold mb-4 ">
           Products
         </h6>
         <p>
           <a href=" #! " class=" text-reset ">Angular</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">React</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">Vue</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">Laravel</a>
         </p>
       </div>

       <div class=" col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">

         <h6 class=" text-uppercase fw-bold mb-4 ">
           Useful links
         </h6>
         <p>
           <a href=" #! " class=" text-reset ">Pricing</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">Settings</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">Orders</a>
         </p>
         <p>
           <a href=" #! " class=" text-reset ">Help</a>
         </p>
       </div>

       <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">

         <h6 class=" text-uppercase fw-bold mb-4 ">
           Contact
         </h6>
         <p><i class=" fa fa-home me-3 "></i> No ( 3 ), Chan Mya Yate Mon Street, Bahan Township, Yangon,
           Myanmar.
         </p>
         <p>
           <i class=" fa fa-envelope me-3 "></i> info@educaremm.com
         </p>
         <p><i class=" fa fa-phone me-3 "></i> +95 9742110221 </p>
         <p><i class=" fa fa-print me-3 "></i> 01 211 4321</p>
       </div>

     </div>

   </div>
   </section>


   <!-- Copyright -->
   <div class=" text-center p-4 " style=" background-color: rgba(0, 0, 0, 0.05); ">
     © 2022 Copyright:
     <a class=" text-reset fw-bold ">educare.com</a>
   </div>
   <!-- Copyright -->
 </footer>
 <!-- Footer -->
 <!-- footer end -->

 <script src="aos-master/dist/aos.js"></script>

 <script>
  AOS.init({
    offset: 300,
    duration: 1300
  });
</script>


 

 <script src="css/jquery.js"></script>
 <script src="css/popper.js"></script>
 <script src="css/bootstrap.min.js"></script>

 
<script src="aos-master/dist/aos.js"></script>


 <script>
  

  var home=document.querySelector(".tohome");

  home.onclick=function(){
    window.location.href="welcome.php";
  }



 </script>
    
      

</body>
</html>