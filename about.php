<?php
include "link.php";
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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



  <!-- main section -->
  <div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5   py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="img/contact/about us.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="800" height="800" loading="lazy">
          <div class="p-4 mt-5mb-3 bg-light shadow text-center  rounded">
            <h4 class="fst-italic bg-danger text-light p-1">Companh Info</h4>
              <p>Term & Conditions</p>
              <p>Payment & Booking</p>
           
          </div><br><br>
          <div class="p-4 mt-5mb-3 bg-light text-center shadow rounded">
            <h4 class="fst-italic text-light bg-danger p-1">Ask Question</h4>
            <p class="num text-primary fw-bold">+977 9809746559</p>
              <p>Direct call on Viberbr <br>& <br>WhatsApp</p>
          </div>
        </div>
        <div class="col-lg-6">
            <h4 class="header fw-bold text-primary">About Us</h4>
          <p> Welcome to NP tour & travels Pvt. Ltd. We would like to introduce as one of the leading Travel, Tour Trekking companies in Nepal. We are approved by the Government of Nepal, the Ministry of Culture, Tourism and Civil Aviation, and are an active member of TAAN (Trekking Agents Association of Nepal), NMA (Nepal Mountaineering Association), KEEP (Katmandu Environment Education Project) and NTB (Nepal Tourism Board).
            <br><br>

            Welcome Nepal Treks and Tours is dedicated to provide excellent and personalized service. We carefully plan together with you and supply you with all information necessary for your safety, comfort, and enjoyment. Our goal is to fulfill your dreams!
            
            <br> <br>
            Welcome Nepal Treks and Tours was established by a group of dedicated, young and experienced trekking mountaineering / Expeditions trekking guides and tour leaders. We are specialized in Adventure Trekking, Tours, Mountaineering, Jungle Safari, River Rafting and mountain biking, hotel reservations in Nepal. But we also offer exciting and exhilarating Nepal tours to different destinations like Tibet , Bhutan , Pakistan , and Sikkim ( India ). Our goal is to provide a life time experience for our customer. Let us make your time in Nepal an experience you will never forget.</p>
          <br><br>

          <h4 class="header fw-bold text-primary">NP Tour & Travels</h4>
          We will guide you to explore the beauty of Nepal from the top of world’s highest mountain till the lowlands of Terai.We run eco-friendly, trekking, hiking, climbing, jungle safari, mountaineering, scenic & cultural tours, historical tours, wilderness expeditions, overland adventures, special interest tours, helicopter rescue, family adventures or group holidays in Nepal and Tibet. We are always a head for your safety and pleasure, and more conscious to make your holiday is memorable and enjoyable in the best way possible.
          <br><br> 
          If your interest is in Trekking in the Himalayas, White water rafting, cultural & sightseeing Nepal tour, Adventure packages, wildlife safaris or just only airfares, hotel booking or car rentals come and visit us; our knowledgeable travel executives always strive to make your holiday great success!!!!
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="underabout.php"><button type="button" class="btn btn-danger btn-lg px-4 mt-5 me-md-2">Explore More</button></a>
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