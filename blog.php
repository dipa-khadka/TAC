<?php
include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog page</title>
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
<div class="container-fluid">
  <h2 class="text-center fw-bold p-5" style="background-color: antiquewhite;">Blog</h2>
</div>



<!-- 2nd main section -->
    <div class="container my-5">
    <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic text-primary border-bottom">
       Latest Blogs
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Paradise Word Nepal</h2>
        <p class="blog-post-meta">January 1, 2023 by </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">Nepal being adventure lover’s paradise in Asia, is knownfor the <br>  stunning mountainous regions and unique Himalayan trekking  <br>trails, is one of the best destinations to choose if you are up for <br>getting indulged in the adventure holidays. Whether yo...</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-2.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>


      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Gus man: The youngest trekere of ACE the himalayan</h2>
        <p class="blog-post-meta">February 1, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">At the age of 7, Gus Man, a dual citizen of Thailand and Australia, made history by becoming the youngest person to conquer the challenging trails of the Himalayas and reach the Everest Base Camp...</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-3.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Adventure Activities in Nepal</h2>
        <p class="blog-post-meta">February 1, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">A guide to amazing adventure activities in Nepal that are possible to do. Pick any one from the list & let adrenaline rush & great memories emerge......</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-4.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">What You Can Do One Day in Kathmandu</h2>
        <p class="blog-post-meta">February 4, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">This is a simple guide to things to do in Kathmandu in one day. Follow this to have an exhilarating day & create unforgettable memories.....</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-5.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>


      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">9 Problems you might face during Everest Base Camp Trek</h2>
        <p class="blog-post-meta">February 3, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">Read to know about Everest Base Camp trek problems you might face so that you won’t be surprised with some of the possible challenges during the journey......</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-6.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>


      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Nepal is Best Country to Visit</h2>
        <p class="blog-post-meta">February 6, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">First of all, Nepal is boon of nature and home of world heritage sites. It has influenced by multi language, blended culture and ethnic group and communities. Nepal is one of the most beautiful and peace country in the world. It actually has g...</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-1.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Everest Base Camp Terk During Monsoon.</h2>
        <p class="blog-post-meta">February 6, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">Monsoon might be the perfect season to experience the challenging part of Everest Base Camp trek in the whole year.......</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-7.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Guidlines for online tourist visa from Nepal.</h2>
        <p class="blog-post-meta">February 8, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">This blog is a guide for you to fill the online visa form so you can avoid the big queue upon your arrival at the Tribhuvan International Airport in Nepal....</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-8.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">International Flights Nepal.</h2>
        <p class="blog-post-meta">February 8, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">The airlines mentioned below provide direct flights into Kathmandu from different regions around Asia, Europe, and the Middle East....</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-9.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>

      <div class="container">
        <hr>
      </div>

      <article class="blog-post">
        <h2 class="blog-post-title">Four amazing Helicopter treks in the Everest Region.</h2>
        <p class="blog-post-meta">February 10, 2023  </p>

        <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h6 class="featurette-heading my-2">Have a look at Ace the Himalaya's various helicopter treks in the Everest Region and find out your preferred...</h6>
       <br><br><br> <a href="" class="pa mt-5">Read More</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/blog/blog-10.jpg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Categories</h4>
          <ol class="list-unstyled mb-0  text-decoration-none">
           <li><p class="pa text-primary ms-3">* Paradise Word Nepal</p></li>
           <li><p class="pa text-primary ms-3">* Gus man: The youngest trekere of ACE the <span class="up ms-2">himalayan</span></p></li>
           <li><p class="pa text-primary ms-3">* Adventure Activities in Nepal</p></li>
           <li><p class="pa text-primary ms-3">* What You Can Do One Day in Kathmandu</p></li>
           <li><p class="pa text-primary ms-3">* 9 Problems you might face during Everest <span class="up ms-2">Base Camp Trek</span></p></li>
           <li><p class="pa text-primary ms-3">* Nepal is Best Country to Visit</p></li>
           <li><p class="pa text-primary ms-3">* Everest Base Camp Terk During Monsoon.</p></li>
           <li><p class="pa text-primary ms-3">* Guidlines for online tourist visa from Nepal.</p></li>
           <li><p class="pa text-primary ms-3">* International Flights Nepal.</p></li>
           <li><p class="pa text-primary ms-3">* Four amazing Helicopter treks in the Everest <span class="up ms-2">Region</span></p></li>
          </ol>
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