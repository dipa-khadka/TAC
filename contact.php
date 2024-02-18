<?php
include "link.php";
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact section</title>
  </head>
  <body>
<!-- top header section -->
<header>
    <div class="container-fluid">
      <nav class="navbar navbar-light py-3 bg-light border-bottom">
        <div class="container-fluid">
            <h1><a class="navbar-brand g-4" href="#"> <img src="img/home/logo.webp" alt="" width="90" height="60" class="logo-img ms-5 " style="border-radius: 50%; margin-right: 1rem;"><span class="logo-1 text-danger fw-bold">Tour</span> <span class="logo-1 text-primary fw-bold">& Travels </span> </a>
            </h1> 
        
            <div class="number">
               <i class="fa-solid fa-phone text-successs fw-bold"> <a href="" class="ms-3 text-success text-decoration-none">+977 9804756981 , 9708876221</a></i> 
            </div>

          

         <div class="sign">
        <button type="button" class="btn btn-danger text-center text-light " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Sign Up
        </button>
         </div>
         </div>
      </nav>
    </div>
  </header>

  <!-- navbar -->
  <nav class="navbar active navbar-expand-lg navbar-light bg-light p-4 active">
    <div class="container">

      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto  gap-4">
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="index.php">Home</a>
          </li>

          <li class="nav-item"><a href="destination.php" class="nav-link text-dark fw-bold">Destination</a></li>
          
          <li class="nav-item"><a href="activities.php" class="nav-link text-dark fw-bold">Activities</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active fw-bold text-dark" href="activities.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company Info
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="about.php">About Us </a></li>

              <li><a class="dropdown-item" href="underabout.php">Terms and Conditions</a></li>

              <li><a class="dropdown-item" href="faqs.php">FAQS</a></li>
            </ul>
          </li>
         
<li class="nav-item"><a href="review.php" class="nav-link text-dark fw-bold">Testimonials</a></li>
<li class="nav-item"><a href="car-rental.php" class="nav-link text-dark fw-bold">Car-Rental</a></li>
        <li class="nav-item"><a href="blog.php" class="nav-link text-dark fw-bold">Blog</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link text-dark fw-bold">Contact Us</a></li>

      </ul>
    </div>

    </div>
  </nav>


  
 <!-- picture -->
 <div class="container-fluid">
  <h2 class="text-center fw-bold p-5" style="background-color: antiquewhite;">Get In Touch With Us!</h2>
</div>

  

  


<!-- contact info/form section -->
<div class="container ">
<div class="row align-items-md-stretch">
    <div class="col-md-6">
     
      <div class="h-75 p-5 ms-4 bg-shadwo rounded-3 my-4">
        <h3>Contact Info</h3>
        <a href="" style="  padding: 0.8rem; border-radius: 47%; outline: 2px dashed green ; text-decoration: dashed;" ><i class="fa-solid fa-location-dot text-success fs-5 my-5"></i></a>
        <h5 class="c-head text-dark  " style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ADDRESS</h5>
        <p>NP Tour & Travels agency <br>
            Rapti-2 Dang,Bhalubang <br>
            Nepal</p>
        

            <br><br>
            <a href="" style=" padding: 0.8rem; border-radius: 47%; outline: 2px dashed green ; text-decoration: dashed;" ><i class="fa-solid fa-phone text-success"></i></a>
        <h5 class="c-head text-dark my-4 " style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">PHONE NUMBERS</h5>
        <p>Reception: (+8802) 9857383, 9857384 <br>
            Reservation: +88-01923366805, 01924559706, 01213826459 <br>
            Visa Section: +8801942255910, +8801942255905
            </p>

            <br><br>
            <a href="" style=" padding: 0.8rem; border-radius: 47%; outline: 2px dashed green ; text-decoration: dashed;" ><i class="fa-solid fa-envelope text-success"></i></a>
            <h5 class="c-head text-dark my-4 " style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">EMAIL ADDRESS</h5>
            <p>Np Tour&Travels77@gmail.com <br>Np Tour&Travels107@yahoo.com</p>
      </div>
    </div>

    <div class="col-md-6 my-5">
        <h3>Have any query? ask us.</h3>
      <div class="h-80 p-5 my-5 bg-light border rounded-3 shadow p-3 mb-5 bg-white rounded">
     
            <div class="row">
               
                <div class="col ">
                    Name:
                  <input type="text" class="form-control" placeholder=""  aria-label="name">
                </div>
                <div class="col">
                    Email:
                  <input type="text" class="form-control" placeholder="" aria-label="email">
                </div>
              </div>
         <br>
              <div class="row">
                <div class="col">
                    Phone no.
                  <input type="text" class="form-control" placeholder="" aria-label="phone number">
                </div>
                <div class="col">
                    Country:
                  <input type="text" class="form-control" placeholder="" aria-label="country">
                </div>
              </div>
        <br>
        
        <div class="col">
            Subject:
          <input type="text" class="form-control" placeholder="" aria-label="subject">
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >Massage</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" palaceholder="write your massage" rows="3"></textarea>
          </div>
          <br>
          <a href="#" class="btn btn-danger btn-lg active " role="button" aria-pressed="true">Send  <i class="fa-solid fa-arrow-right ms-2 w-5"></i></a>
        
      </div>
    </div>

  </div>
</div>



<!-- map section -->
<div class="container-fluid">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56450.83314755706!2d82.67968834560348!3d27.83509084514615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997af494fa636a9%3A0xd062cfb07fa0135!2sBhaluwang%2C%20Lalmatiya%2022404!5e0!3m2!1sen!2snp!4v1675386495130!5m2!1sen!2snp" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<!--partnerships -->
<div class="container">

<h4 class="ma text-center">WE ARE ASSOCIATED WITH</h4>
<div class="row align-items-md-stretch">
  <div class="col-md-6 ">
    <div class="h-100 p-5 text-white bg-light rounded-3 ">
      <h6 class="hh text-dark text-center">PAYMENT MODE WE ACCEPT</h6>
    <img src="img/blog/visa.png" class="rounded mx-auto d-block mt-4" alt="...">
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="h-100 p-5 text-white bg-light rounded-3 ">
    <h6 class="hh text-dark text-center">WE ARE AFFILIATED</h6>
    <img src="img/blog/accept.png" class="rounded mx-auto d-block mt-4" alt="...">
   
    </div>
  </div>
</div>
</div>

<!--partnerships -->
<div class="container">

<h4 class="ma text-center">WE ARE ASSOCIATED WITH</h4>
<div class="row align-items-md-stretch">
  <div class="col-md-6 ">
    <div class="h-100 p-5 text-white bg-light rounded-3 ">
      <h6 class="hh text-dark text-center">PAYMENT MODE WE ACCEPT</h6>
    <img src="img/home/pay.jpg" height="100vh" width="60%" class="rounded mx-auto d-block mt-4" alt="...">
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="h-100 p-5 text-white bg-light rounded-3 ">
    <h6 class="hh text-dark text-center">WE ARE AFFILIATED</h6>
    <img src="img/blog/accept.png" class="rounded mx-auto d-block mt-4" alt="...">
   
    </div>
  </div>
</div>
</div>


<!-- footer section -->
<footer class="footer-section ng-scope " style="background: rgb(0,0,0,0.1);">
  <div class="container footer-top" >
    <div class="row">
      <!-- widget -->
      <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
        <div class="about-widget">
          <div class="fw-title  mt-4 mb-3" style="margin-top: 10px;"><h3>Our Branches</h3></div>
          <div class="dobule-link" style="margin-top: -10px;">
            <!-- <h3>Our Branches</h3> -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> <i class="fa-solid fa-location-dot text-success ms-4"></i> kathmandu</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-location-dot text-success ms-4"></i>Illam </a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-location-dot text-success ms-4"></i> Pokhara</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-location-dot text-success ms-4"></i>Butwal</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-location-dot text-success ms-4"></i> Nepalganj</a></li>
              
            </ul>				
          </div>
          
        </div>
      </div>
      <!-- widget -->
      <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
        <div class="fw-title  mt-4 mb-3"><h3>Quick Links</h3></div>
        <div class="dobule-link">
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Destination</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Activities</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Trip Types</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Pages</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Style Guid</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Blog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-chevron-right text-success ms-2"></i> Contact</a></li>
          </ul>	
        </div>
      </div>
      <!-- widget -->
      
      
      <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
        <div class="fw-title  mt-3 mb-4"> <h3>Follow Us</h3></div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-facebook text-success fs-4 my-2 ms-2"></i> Facebook</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-twitter text-success fs-4 my-2 ms-2"></i> Twitter</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-instagram text-success fs-4 my-2 ms-2"></i> Instagram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-linkedin text-success fs-4 my-2 ms-2"></i> Linkedin</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-pinterest text-success fs-4 my-2 ms-2"></i> Printerest</a></li>
        </ul>		
      </div>
      
      <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
        <a href="" target="_blank"><img src="img/home/logo.webp"  class="foot my-5 rounded-5"  width="214px"></a>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="container">
    <div class="d-flex flex-column flex-sm-row justify-content-center pt-4" style="border-top: 0.1px solid black;">
      <p>© 2022 Company, Inc. All rights reserved.</p>
    </div>
   </div>
</footer>

  </body>
</html>