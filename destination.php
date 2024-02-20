<?php
include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination page</title>
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

   


<!-- for image -->
<div class="container-fluid ">
    <img src="img/destination/main.jpg" class="img-fluid h-75 w-100 " alt="logo" >
  </div>

  <!-- for second part-->
 <div class="container my-5">
 <div class="row featurette">
      <div class="col-md-7">
<h1 class="header text-success fw-bold ">Nepal</h1>
        <p class=" mt-4">Nepal is beautiful and diverse country located in south asia,known for it's stunning moutain landscapes,rich cultural heritage, and friendly people. there are many popular destinationsin Nepal that a tour and travel agency can offer to travelers.</p><br>
        <p>The Country diverse geography, from the lowlands of the  Tarai region to the high peaks of the Himalayans, provides a wode rangeof opertunities for outdoor activities such as trekking, climbing and rafting.
        </p>
      </div>
      <div class="col-md-5">
       <img src="img/destination/one.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" alt="">

      </div>
    </div>
 </div>

 <!-- 3rd part popular destinations -->
 <div class="album py-5" style="background: #e5e5e5;">
    <div class="container">
<h2 class="heading text-success fw-bolder my-5">Popular Destinations</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/kathmandu.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">kathmandu</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">

                </small>
                <div class="btn-group">
                  <a href="kathmandu.php"><button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/pokhara.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">Pokhara</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">
                  
                </small>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/ilam1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">Ilam</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">
                  
                </small>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/chitwan.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">Chitwan National Park</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">
                  
                </small>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/lumbini.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">Kapilbastu</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">
                  
                </small>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="col">
          <div class="card shadow-sm">
          <img src="img/destination/everest.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <div class="card-body">
             <h4 class="para text-center fw-bold">Everest Base Camp</h4>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">
                  
                </small>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success bg-success text-light text-bold">Explore<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
              </div>
            </div>
          </div>
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
  <!--footer section  -->
  <footer class="footer-section ng-scope " style="background: rgb(0,0,0,0.1);">
    <div class="container footer-top">
      <div class="row">
        <!-- widget -->
        <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
          <div class="about-widget">
            <div class="fw-title  mt-4 mb-3" style="margin-top: 10px;">
              <h3>Our Branches</h3>
            </div>
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
          <div class="fw-title  mt-4 mb-3">
            <h3>Quick Links</h3>
          </div>
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
          <div class="fw-title  mt-3 mb-4">
            <h3>Follow Us</h3>
          </div>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-facebook text-success fs-4 my-2 ms-2"></i> Facebook</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-twitter text-success fs-4 my-2 ms-2"></i> Twitter</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-instagram text-success fs-4 my-2 ms-2"></i> Instagram</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-linkedin text-success fs-4 my-2 ms-2"></i> Linkedin</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-square-pinterest text-success fs-4 my-2 ms-2"></i> Printerest</a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-3 footer-widget">
          <a href="" target="_blank"><img src="img/home/logo.webp" class="foot my-5 rounded-5" width="214px"></a>
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