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
	<title>ACTIVITIES</title>

 
   
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
       <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
      
     <link href="aos-master/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/activity.css">
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
                <i class="fa fa-sign-out-alt ml-3 text-warning"><a href="logout.php"  class="text-black-50"> Logout</a></i>







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
                    <a class="nav-link" href="welcome.php">Home</a>
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
                <li class="nav-item active">
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
                  <h3>Activities</h3>
              </div> <br> <br>
              <div class="abdp">

                  <span class="tohome">Home</span>
                   <span class="toabout">Activities</span>
              </div> <p></p>

              
          </div>
      </div> <br> <br> <br> <br> <br>


        <div class="container2">

   

    <div class="txt" ><h1>Activity</h1> <br>
    <p>Between school and downtime, most kids try one or more extracurricular activities.These classes and programs allow children  and teens to pursue a special interest that's outside of the typical educational curriculum, including sports , the arts special-interest clubs , and technology.
    </p> </div><br> 

    <div class="abimg" >
    <img src="images/Activities/image 3.jpg" class="abp">
    </div>
    
    </div> <br> <br> <br> <br>



    <div class="mid" data-aos="zoom-in">
        <p>Teaching does not need to be limited to textbooks and blackboards. With our fun school activities for kids, learning in school becomes an interesting and enjoyable exercise.

        </p>

        <p>See our collection of different kinds of activities for kids of all ages. There’s something for everyone!</p>
    </div>
   <br>



     
      <div class="all">
    
    <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image1.jpg"> <hr>
        <h3>Painting</h3> <p></p>
        <p>Painting is a way for children to do many important things: convey ideas, express emotion, use their senses, explore color, explore process and outcomes, and create aesthetically pleasing works and experiences.</p>
    </div>


    <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image2.jpg"> <hr>
        <h3>The Art</h3> <p></p>
        <p>Art offers children more opportunities than any other activity, for self-expression, and allow children to showcase their abilities, and to be recognized by their skills at home and school, strengthening their confidence and self-esteem..</p>
    </div>

     
     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 3.jpg"> <hr>
        <h3>PE Activity</h3> <p></p>
        <p>A physical education (PE) teacher instructs students about sports, physical development, health, and proper nutrition. A PE teacher has knowledge of sports and the health sciences.</p>
    </div>

     

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 4.jpg"> <hr>
        <h3>Sport</h3> <p></p>
        <p>Playing sports teaches lessons of life, such as teamwork, accountability, self-confidence, responsibility, and self-discipline. Sports in school help prepare students to face the challenges of life. They enhance physical and mental abilities of students and help them achieve the goals of their life.</p>
    </div>

     

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 5.jpg"> <hr>
        <h3>Story Time</h3> <p></p>
        <p>Two or even three short read-aloud sessions at predictable times each day will be far more effective than one long session. Use your hands when you read. Follow the words in a storybook with your fingers so young children begin to understand that reading goes from left to right and from top to bottom in English.</p>
    </div>

     

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 6.jpg"> <hr>
        <h3>Recycling</h3> <p></p>
        <p>There are several types of recycling processes that allow some materials to be used one or more times. Recycling is good for us and the environment because it reduces the use of new raw materials to product new products.</p>
    </div>

     

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 7.jpg"> <hr>
        <h3>Puzzle</h3> <p></p>
        <p>As briefly mentioned above, puzzles help young students think and reason about how to bring together disjointed images. It inculcates the ability of knowledge management into young children. In young toddlers, puzzles increase the ability to distinguish between various colors and vibrant images.</p>
    </div>

     

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 8.jpg"> <hr>
        <h3>Fun Activity With Dolls</h3> <p></p>
        <p>Dolls encourage them to create their own little imaginary worlds, as opposed to say, problem-solving or building games. They encourage children to think about other people and how they might interact with each other.</p>
    </div>

     <div class="container1" data-aos="zoom-in">
        <img src="images/Activities/image 9.jpg"> <hr>
        <h3>Self-Portrait Paper Dolls</h3> <p></p>
        <p>Create a 3-D self portrait paper doll. This craft for kids can be used for school or home. Create one at the start of the school year and end of the school year to compare. Or use them for units on long ago or family trees. They even fit into lessons on weather and seasons!</p>
    </div> 
     <br>
  <br>  <br> <br>

     


       <div class="phm" >
           <h3>Preschool Activities</h3> <p></p> <p></p>
           <p>You can mold your preschoolers and channel their growth with various kinds of preschool activities. Simple, easy and fun, activities set the foundation for better learning and development. Both informative and productive, fun preschool activities will build your preschoolers’ confidence and make them well-rounded individuals.</p>

           <br> 
         <h3>  Middle school activities </h3> <p></p> <p></p>
 <p>Middle school children are older and mature enough to grasp and learn new concepts. Middle school activities stimulate further growth and encourage learning among kids. From after school sports and extracurricular activities to more advanced math and science activities, middle school is a good time for children to recognize their interests and harness their skills.</p> <br>


        <h3>High school activities</h3> <p></p> <p></p>
<p>There are many parents who find it difficult to excite and interest their high school age kids with productive activities. Engaging activities that keep in mind their level of skill and that are appropriate for their age group will do wonders in keeping them engaged. These fun and intelligent activities for high school-going children will stimulate their intellect and motivate them to sharpen their skills.</p>
       </div> 
       
        </div>

       <br> <br>




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
      offset: 200,
    duration: 1300
  });
</script>


 <script src="css/jquery.js"></script>
 <script src="css/popper.js"></script>
 <script src="css/bootstrap.min.js"></script>
 <script type="text/javascript" src="activity.js"></script>

 
<script>
  

  var home=document.querySelector(".tohome");

  home.onclick=function(){
    window.location.href="welcome.php";
  }



 </script>
    
      

</body>
</html>