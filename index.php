<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "bank");
if (!$conn) {
  die(mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <style>
      .fontt{
       
        
        font-family: 'Alfa Slab One', cursive;
      }
	     body{
        background:120%;
  background-image:url("b1.jpg");

}
     
    </style>
<body >
<div class="container">
    <!-- Navigation-->	
    
    <header style=" color: rgb(59, 0, 0);">
      <nav class="navbar navbar-expand-md fixed-top main-navigation"
         id="site-navigation" aria-label="Primary Navigation">
         <div class="container" style="
            min-height:4.5em;">
            <a href="index.php" class="custom-logo-link" rel="home">
               <img src="spf.png" width="97.5px" height="98px" alt="Logo">
            </a>            
              <button class="navbar-toggler wrapper-menu " type="button" data-toggle="collapse"
               data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="line-menu half start"></span>
               <span class="line-menu"></span>
               <span class="line-menu half end"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                     <a class="nav-link page-scroll" 
                        href="index.php">
                        Home</a>
                  </li>
                <li class="nav-item active">
                     <a class="nav-link page-scroll" 
                        href="index.php?info=view">
                     View Customers</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link page-scroll" 
                       href="index.php?info=tm">
                       Transfer Money</a>
                 </li>
                 <li class="nav-item active">
                  <a class="nav-link page-scroll" 
                     href="index.php?info=th">
                     Transaction History</a>
               </li>
                  <li class="nav-item active">
                     <a class="nav-link page-scroll" 
                        href="index.php?info=contact">
                        Contact Us</a>
                  </li>
                  
               </ul>
            </div>
         
     </div>
  </nav>
   </header>

   <!--NAVIGATION-ENDS-->
   
   <?php
  @$info = $_GET['info'];
  if ($info != "") {

    if ($info == "view") {
      include('view.php');
    } else if ($info == "contact") {
      include('contact.php');
    } else if ($info == "tm") {
      include('send.php');
    } else if ($info == "th") {
      include('history.php');
    }
  } else {
  ?>
   
  </br>
</br>
</br>
</br>
</br>
</br>
<section CLASS="container">
  <div class="jumbotron welcome" style="padding:1.5%;">
    <H2 style="color:rgb(26, 0, 0);">
      𝙒𝙀𝙇𝘾𝙊𝙈𝙀
    </H2>
    <h4 style="color:rgba(226, 60, 60, 0.555);">
      MAKING LIFE SIMPLE
    </h4>
</br>
</br>
    <H6 style=" text-align: right;
    font-size:small;
    color:rgb(136, 69, 69);
    " >
    EXPERIENCE THE FREEDOM OF BANKING ON YOUR TERMS WITH THE SPARK FOUNDATION BANK SITE
    </H6>
    
  </div>
</section>



  <!--SECTION 1-->           
  <section class="category">
    <div class="conatiner">
         <div class="section-title">
             <h3 class="text-center font-weight-bold " style="color:rgb(34, 48, 34);"></h3>
           
             </br>
         </div>

      
        

         <div class="row">
             <div class="col-md-6 ">
               <div class="card,im" >
                 
                 <div class="card-body">
                     <div class="card-title">
                      <a href="#"  style="color:rgb(65, 21, 21);">MAKE A TRANSACTION </a>
                    </br>
                  </br>
                    <div align='center'>
                    <a href="index.php?info=tm" class="btn btn-lg btn-danger">TRANSFER MONEY</a>
                      
                    </div>
                     <!--    <img src="history.png" alt="" width="200px" height="200px">  !-->
                     </div>
                    </br>
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore
                            quae a sunt quos maiores nulla accusantium inventore cupiditate vitae optio
                            sit commodi, dolore reiciendis laudantium eligendi dolorem autem quasi ducimus?
                       </p>
                 </div>
                   
               </div>
             </div>
           
         
             <div class="col-md-6 ">
               <div class="card,im" >
                 <div class="card-body">
                  <div class="card-title">
                    <a href="#"  style="color:rgb(65, 21, 21);">TRANSACTION HISTORY</a>
                  </br>
                </br>
                  <div align='center'>
                  <a href="index.php?info=th" class="btn btn-lg btn-danger">SEE ALL TRANSACTIONS</a>
                   
                  </div>
                </div>
              </br>
            
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore
                            quae a sunt quos maiores nulla accusantium inventore cupiditate vitae optio
                            sit commodi, dolore reiciendis laudantium eligendi dolorem autem quasi ducimus?
                       </p>
                 </div>
                   
               </div>
             </div>
         </div>
          </br>
        

             
      

     </div>
</section> 

<!--SECTION1-ENDS-->
</div>

<!--sticky social icons-->
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>

</div>

<!-- Sticky Social Icons End --> 

<!--footer-->


<footer>


<div class=" justify-content-center text-light  cc" style="background-color:rgb(94, 37, 37);">

  <br>

        <p align='center'> Designed By <a style="color:rgb(70, 6, 6);"
   href="#">SAKSHI SINGH </a></p>

<p align='center' >
<i class="fa fa-copyright"></i> 
Copyright  @2021. <strong align='right'>THE SPARK FOUNDATION</strong>
</p>
   
</footer>


   
                   
  </div>               
 
</div>

</div>


<?php
  }
  ?>



<!--footer-ends-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>
</body>
</html>
