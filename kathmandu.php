<?php
include "link.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kathmandu page</title>
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
  <h2 class="text-dark fw-bold ms-1 my-4 mb-3">Things <span class="text-danger fw-bold">to</span> Do <span class="text-dark fw-bold">in</span><span class="text-danger">Kathmandu</span></h2>
  </div>
    <!-- 1st part -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
         <div class="container">

         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 ">

<div class="col">
       <img src="img/kathmandu-tour/culture.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
    <h5 class="fw-bold mt-2">Cultural Tour</h5>
        
      </div>
      
      
<div class="col">
       <img src="img/kathmandu-tour/city.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">City Tour</h5>
      </div>

<div class="col">
      <img src="img/kathmandu-tour/nature.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
      <h5 class="fw-bold mt-2">Nature & Wlidlife <br>
    Tour</h5>
      </div>


<div class="col">
       <img src="img/kathmandu-tour/historical.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Historical Tour</h5>
      </div>

<div class="col">
       <img src="img/kathmandu-tour/photography.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Photography  <br>
        tour
       </h5>
      </div>
    </div>

         </div>
    </div>



    <!--  -->
     <div class="carousel-item ">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
         <div class="container">

         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">

<div class="col">
       <img src="img/kathmandu-tour/day.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Day Tour</h5>
      </div>
      
      
<div class="col">
       <img src="img/kathmandu-tour/bus.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Bus Tour</h5>
      </div>

<div class="col">
      <img src="img/kathmandu-tour/Private.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
      <h5 class="fw-bold mt-2">Family Tour</h5>
        
      </div>


<div class="col">
       <img src="img/kathmandu-tour/art.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Art Galleries <br> Tour</h5>
      </div>

<div class="col">
       <img src="img/kathmandu-tour/food.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
       <h5 class="fw-bold mt-2">Sell Out <br> Tour</h5>
      </div>
    </div>

         </div>
    </div>





  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container">
  <img src="https://www.tripadvisor.com/Articles-lpRHH16GZ3mY-London_airports.html" alt="">
</div>

<!-- 2nd part  -->
   <div class="container">
   <h3 class="text-danger fw-bold ">All Things to Do</h3>
   </div>
   <div class="container my-5">
 <div class="row g-5">

 <!-- 2nd of 1st part -->
 <div class="col-md-4 shadow"  >
      <div class="position-sticky " style="top: 2rem; ">
       
<!-- categories -->
<div class="p-4">
          <h4 class="text-success">Category Types</h4>
          <ol class="list-unstyled mb-0">
            <li>  <a href="kathmandu.php" class="jpt text-decoration-none ms-3 text-dark text-decoration-underline">Attractions</a></li>
            <li>  <a href="tour.php" class="jpt text-decoration-none ms-3 text-dark">Tours</a></li>
            <li>  <a href="car-rental.php" class="jpt text-decoration-none ms-3 text-dark">Transportation</a></li>
            <li>  <a href="kathmandu-hotel.php" class="jpt text-decoration-none ms-3 text-dark">Hotels</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Day Trips</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Outdoor Activities</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Concert & Shows</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Food & Drinks</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Classes & Workshops</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Shopping</a></li>
          </ol>
        </div>

<hr>

<!-- types of attractions -->
<div class="p-4">
          <h4 class="text-success">Types of Attractions</h4>
          <ol class="list-unstyled mb-0">
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark ">Boat tours & Water sports</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Sights & land Markets</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Spas & Wellness</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Classes & Workshops </a></li>
           
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Fun & Games</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Nature & Parks</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Night Lifes</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Museums</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Casinos & Glambing</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">
              Water & Amusement Park
            </a></li>
          </ol>
        </div>

<hr>


 
        <div class="p-4">
          <h4 class="text-success">Traveler Ratings</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark"><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i> <span class="ms-1 "></a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark"><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-regular fa-star text-warning"></i> <span class="ms-1 "> & up</span></a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark"><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"></i><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i> <span class="ms-1 "> & up</span> </a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark"><i class="fa-solid fa-star  text-warning"></i><i class="fa-solid fa-star  text-warning"><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i></i> <span class="ms-1 "> & up</span></a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark"><i class="fa-solid fa-star  text-warning"></i><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i><i class="fa-regular fa-star text-warning"></i> <span class="ms-1 "> & up</span></a></li>
           
          </ol>
        </div>

<hr>

<div class="p-4">
          <h4 class="text-success">Good for</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Boudget Freely</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Good for Big groups </a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Good for Couples</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Good for Adrenaline Seekers</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Adventures</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Good for Kids</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Good for Rainy Day</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Free Entry</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Hidden Gems</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Honymoon Spots</a></li>
            
          </ol>
        </div>

        <hr>

        <div class="p-4">
          <h4 class="text-success">Meals</h4>
          <ol class="list-unstyled mb-0">
           <img src="" alt="">
          </ol>
        </div>

        <hr>
      
      </div>
    </div>

    <!-- 2nd of 2nd part -->
    <div class="col-md-8">    
      <h3 class="pb-4 mb-4 text-dark fw-bold border-bottom">
        Top Attraction places in Kathmandu:
      </h3>
      <article class="blog-post">
      <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">1. Boudhanath Stupa</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Bouddhanath stupa is the most liked sightseeing place in Kathmandu. Visitors are required to pay NRs. 250(Foreign Nationals) NRs. 50 (SAARC Nationals) NRs. 250 (Chinese) per person (Below 10 years free) as entrance fees to the Bouddhanath. A lot of Tibetan people reside around the Stupa.... </p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/1.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

      <!-- 2nd -->
      <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">2. Pasupatinath Temples</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">The temple is a popular pilgrimage site, attracting thousands of devotees each year. It is also a UNESCO World Heritage Site and is considered an important cultural and religious landmark in Nepal...</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/2.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

        <!-- 3rd -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">3. Swayambhunath Temple</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Swayambhunath Temple is a UNESCO World Heritage Site and is considered one of the most important cultural landmarks in Nepal. It attracts thousands of visitors each year who come to experience its spiritual significance and architectural beauty..</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/3.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 4th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">4. Thamel</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Thamel is a must-visit destination for those looking to experience the lively atmosphere and culture of Kathmandu. The district offers a unique blend of traditional and modern, and is a great place to start exploring the city and its surrounding areas...</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/4.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>



        <!-- 5th -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">5. Kopan Monastery</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class=""> Kopan Monastery is a must-visit destination for those interested in exploring Tibetan Buddhism and its practices. The monastery offers a peaceful and spiritual environment and provides a unique opportunity for individuals to deepen their understanding and practice of Buddhism....</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/5.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 6th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">6. Kathmandu Darbar Square</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Kathmandu Durbar Square is a UNESCO World Heritage Site located in the heart of Kathmandu, Nepal. It is a complex of palaces, temples, and courtyards that served as the seat of the Nepalese royalty for centuries. The square is one of the most popular tourist attractions in Kathmandu and is known for its rich cultural and historical significance....</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/6.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


<!-- 7th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">7. The Crimatoria</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">In Nepal, the Pashupatinath Temple in Kathmandu is one of the most important and sacred cremation sites in the country. The temple is located on the banks of the Bagmati River and has several cremation platforms where the bodies of the deceased are cremated according to Hindu traditions./p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/7.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


       <!-- 8th section -->
       <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">8. Garden of Dreams</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">The Garden of Dreams is a popular destination for tourists and locals alike and is a great place to escape the hustle and bustle of the city. It is also a popular venue for events and concerts, and many visitors come to enjoy the beautiful gardens while listening to live music or attending cultural events..</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/8.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


     <!-- 9th section -->
     <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">9. Chandragiri Hills</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Chandragiri Hills is a popular tourist destination located in the south-west of Kathmandu valley, Nepal. It is a hill station situated at an altitude of 2,551 meters and is known for its stunning views of the Himalayas, the Kathmandu Valley, and the surrounding hills..</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/9.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


       <!-- 10th section -->
       <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">10. Asan</h4>
           <!-- <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6> -->
          
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star   text-warning"></i>
           <i class="fa-solid fa-star-sharp-half-stroke  text-warning"></i>
           <!-- <h6 class=" text-lighter text-muted ms-3">2.5 km from centre</h6> -->
           
        </div>
       </div>
        <p class="">Asan is a great place to experience the traditional side of Kathmandu and is a must-visit destination for those looking to explore the city's cultural heritage. It is also a great place to find unique souvenirs and gifts to take home from Nepal..</p>
        <div class="btn mt-3 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">explore<i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <!-- <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6> -->
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/attraction/10.jpg" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


       





      </article>

    

     
      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-danger bg-danger text-light fw-bold"  href="#">More <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></a> 
      </nav>
    </div>
  </div>
 </div>

 <!-- information -->
 <div class="container">
   <h3 class="text-dark fw-bold">Kathmandu <span class="text-danger fw-bold">Tour</span> Information</h3>
   <br>
   <table class="table table-bordered border-dark p-2">
  <tr>
    <td>Tours</td>
    <td>2,830</td>
  </tr>

  <tr>
    <td>Tours price forms</td>
    <td>NPR. 660 </td>
  </tr>

  <tr>
    <td>Tour reviews</td>
    <td>11,042</td>
  </tr>

  <tr>
    <td>Tour Photos</td>
    <td>23,045</td>
  </tr>

</table>
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
  </footer>sscanf

</body>
</html>