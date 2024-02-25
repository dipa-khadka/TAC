<?php
include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotels for kathmandu tour page</title>
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

<!-- 1st section -->
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

 <!-- 2nd part -->
 <div class="container my-5">
 <div class="row g-5">

 <!-- 2nd of 1st part -->
 <div class="col-md-4 shadow"  >
      <div class="position-sticky " style="top: 2rem; ">

      <div class="p-4">
          <h4 class="text-success">Category Types</h4>
          <ol class="list-unstyled mb-0">
            <li>  <a href="kathmandu.php" class="jpt text-decoration-none ms-3 text-dark ">Attractions</a></li>
            <li>  <a href="tour.php" class="jpt text-decoration-none ms-3 text-dark ">Tours</a></li>
            <li>  <a href="car-rental.php" class="jpt text-decoration-none ms-3 text-dark">Transportation</a></li>
            <li>  <a href="kathmandu-hotel.php" class="jpt text-decoration-none ms-3 text-dark text-decoration-underline">Hotels</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Day Trips</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Food & Drinks</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Outdoor Activities</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Concert & Shows</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Classes & Workshops</a></li>
            <li>  <a href="#" class="jpt text-decoration-none ms-3 text-dark">Shopping</a></li>
          </ol>
        </div>

<hr>
        <div class="p-4 mb-3 bg-light rounded shadow bg-danger">
          <h4 class="text-success">Agent Filter</h4>
          <form>
  <fieldset >
    <h4></h4>


    <div class="mb-3">

    
      <label for="TextInput" class="form-label">Destination/property name:</label>
      <input type="text" id="TextInput" class="form-control" placeholder="Kathmandu">
    </div>

    
    <div class="mb-3">
      <label for="Select" class="form-label">Check-in date:</label>
      <select id="Select" class="form-select">
        <option>D . Junauary , 2023</option>
        <option>D . February, 2023</option>
        <option>D . March, 2023</option>
        <option>D . April, 2023</option>
        <option>D . May, 2023</option>
        <option>D . june, 2023</option>
        <option>D . july, 2023</option>
        <option>D . August, 2023</option>
        <option>D . September, 2023</option>
        <option>D . October, 2023</option>
        <option>D . November, 2023</option>
        <option>D .  December, 2023</option>
      </select>
    </div>

    

    <div class="mb-3">
      <label for="Select" class="form-label">Check-out date:</label>
      <select id="Select" class="form-select">
        <option>D . Junauary , 2023</option>
        <option>D . February, 2023</option>
        <option>D . March, 2023</option>
        <option>D . April, 2023</option>
        <option>D . May, 2023</option>
        <option>D . june, 2023</option>
        <option>D . july, 2023</option>
        <option>D . August, 2023</option>
        <option>D . September, 2023</option>
        <option>D . October, 2023</option>
        <option>D . November, 2023</option>
        <option>D .  December, 2023</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">No. of person/Total days:</label>
      <input type="text" id="TextInput" class="form-control" placeholder="Kathmandu">
    </div>

     
    <div class="diff d-flex justify-content-space-beetween">
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input shadow" type="checkbox" id="FieldsetCheck" >
        <label class="form-check-label" for="FieldsetCheck">
          Night stay
        </label>
      </div>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input ms-5 shadow" type="checkbox" id="FieldsetCheck" >
        <label class="form-check-label" for="FieldsetCheck">
          Entire Apartments
        </label>
      </div>
    </div>
    </div>

    <button type="submit" class="btn btn-success">Search</button>
  </fieldset>
</form>
        </div>
 <div class="container-fluid">
  <hr>
 </div>
        <div class="p-4">
          <h4 class="text-success">Facilities</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Parking</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Free </a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Non-smoking Room</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Resturant</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Room Service</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Family Rooms</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Swimming Pools</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Fitness</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Pets Allowed</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Electric Vechile charge station</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Spa and Wellness Center</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Airport Shuttle</a></li>
          </ol>
        </div>

<hr>

<div class="p-4">
          <h4 class="text-success">Room Facilities</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Privet Bathroom</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">kitchen/kitchenette </a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Balcony</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Air conditioning</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Bath/Spa bath</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">upper floores accissible by elevator</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Washing Machine/toilet/hairdryer/Hot tub</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Microwave/ellectric kettle</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Refregenarator/tea or coffie maker</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Flat screen TV</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">View/Heating</a></li>
          </ol>
        </div>

        <hr>

        <div class="p-4">
          <h4 class="text-success">Meals</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Self Cattering</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Breakfast included</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Breakfast & Dinner included</a></li>
          </ol>
        </div>

        <hr>
        
        <div class="p-4">
          <h4 class="text-success">Bed preference</h4>
          <ol class="list-unstyled mb-0">
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Twin beds</a></li>
            <li> <i class="fa-regular fa-square"></i> <a href="#" class="jpt text-decoration-none ms-3 text-dark">Double bed</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- 2nd of 2nd part -->
    <div class="col-md-8">    
      <h3 class="pb-4 mb-4 text-danger fw-bold border-bottom">
        Hotels in Kathmandu:
      </h3>
      <article class="blog-post">
      <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Apsara Boutique Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ms-3">2.5 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Apsara Boutique Hotel is located in Kathmandu, 1.4 km from Hanuman Dhoka and 1.5 km from Kathmandu Durbar Square. The hotel has a terrace and views of the mountains.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Chek Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class="">Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">453 reviews <span class="text-light  p-1 " style="background:blue;">7.8</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel1.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

      <!-- 2nd -->
      <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Hotel Jampa,Kathmandu</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          
          <h6 class="mt-2 text-lighter text-muted ms-3">2.9 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Hotel Jampa is set in Thamel and provides air-conditioned rooms with free WiFi. The property is 2.9 km from Kathmandu Durbar Square and 3.1 km from Swayambhunath Temple.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Superb  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">1,114 reviews <span class="text-light  p-1 " style="background:blue;">9.1</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel2.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

        <!-- 3rd -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Baber Mahal Visal-The Heritage</h4>
           <h6><a href="">Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.9 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Located in Kathmandu, 2.9 km from Hanuman Dhoka, Baber Mahal Vilas - The Heritage Hotel provides accommodation with an outdoor swimming pool, free private parking, a fitness centre and a garden.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Superb  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">174reviews <span class="text-light  p-1 " style="background:blue;">9.2</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel3.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>
<!-- 4th -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Kathandu Agantuk Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          
          <h6 class="mt-2 text-lighter text-muted ">2.9 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">In a prime location in the centre of Kathmandu, Kathmandu Aagantuk Hotel provides air-conditioned rooms with free WiFi, free private parking and room service.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Superb  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">520 reviews <span class="text-light  p-1 " style="background:blue;">9.3</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel4.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>


        <!-- 5th -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Basera Boutique Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">0.6 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Situated in Kathmandu, 3 km from Hanuman Dhoka, Basera Boutique Hotel features accommodation with an outdoor swimming pool, free private parking, a fitness centre and a garden.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Superb  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">192 reviews <span class="text-light  p-1 " style="background:blue;">9.2</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel5.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 6th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Arushi Boutique Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.3 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Situated in Kathmandu, 1.1 km from Hanuman Dhoka, Arushi Boutique Hotel features accommodation with a terrace, private parking, a restaurant and a bar.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Fabulas <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">496 reviews <span class="text-light  p-1 " style="background:blue;">8.9</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/6th.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 7th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Kathandu - Hotel Sanker</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.3 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Hotel Shanker is located in Kathmandu, next to Narayanhiti Palace Museum. The hotel offers an outdoor swimming pool and spa. Four dining options are available and parking is free.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Very good <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">171 reviews <span class="text-light  p-1 " style="background:blue;">8.1</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel7.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 8th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Samsara Boutique Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          
          <h6 class="mt-2 text-lighter text-muted ">2.3 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Offering complimentary parking and rooms with free Wi-Fi access, this Kathmandu property features a spacious lawn. It also houses a business centre and a 24-hour restaurant.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Very good <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">458 reviews <span class="text-light  p-1 " style="background:blue;">8.0</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel8.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 9th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Hotel Le Himalaya by Best Resort Nepal</h4>
           <h6><a href="">Lazimpat, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.8 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Set in Kathmandu, 3.2 km from Hanuman Dhoka, Hotel Le Himalaya by Best Resort Nepal offers accommodation with a garden, free private parking, a shared lounge and a terrace.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Good  <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">30 reviews <span class="text-light  p-1 " style="background:blue;">7.9</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel9.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

<!-- 10th -->
<div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">DOM Himalaya Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.2 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Featuring free Wi-Fi, DOM Himalaya Hotel offers accommodation in Kathmandu. The hotel has a barbecue and sun terrace, guests can also enjoy a meal at the in-house restaurant.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Fabulous <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">292 reviews <span class="text-light  p-1 " style="background:blue;">8.8</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel10.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

        <!-- 11th -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Hotel Moonlight-Kathmandu</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">2.6 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Hotel Moonlight is located on the edge of Thamel, less than 2 km from Kathmandu Mall and Times Square Mall. It offers a rooftop terrace with lovely views of Kathmandu.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Very good<i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">202 reviews <span class="text-light  p-1 " style="background:blue;">8.1</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/hotel11.webp" class="img-thumbnail" alt="...">
      </div>
    </div>
  

        <hr>

        <!-- 12th -->
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
       <div class="icon d-flex">
          <div class="one"> <h4 class="featurette-heading text-success ">Maya Manor Boutique Hotel</h4>
           <h6><a href="">Thamel, Kathmandu</a> <span><a href="" class="ms-3">show on map</a></span></h6>
        </div>
          <div class="two ">
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <i class="fa-solid fa-star  mt-2 text-warning"></i>
          <h6 class="mt-2 text-lighter text-muted ">1.6 km from centre</h6>
          </div>
       </div>
        <p class="mt-5">Set in Kathmandu, 1.7 km from Hanuman Dhoka, The Maya Manor Boutique Hotel features a restaurant, bar and free WiFi. Every room has a flat-screen TV. You will find a kettle in the room.</p>
        <div class="btn mt-5 d-flex justify-content-between ">
          <div class="one ">
          <button type="button" class="btn btn-success fw-bold">Check Out <i class="fa-solid fa-arrow-right ms-2 fw-bold"></i></button>
          </div>

          <div class="two text-end ">
              <h4 class=""> Fabulous <i class="fa-solid fa-thumbs-up ms-1 text-primary"></i></h4>
              <h6 class="text-muted">53 reviews <span class="text-light  p-1 " style="background:blue;">8.0</span></h6>
          </div>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <img src="img/hotel/hotel1.webp" class="bd-placeholder-img bd-placeholder-img-md featurette-image img-fluid mx-auto" width="300" height="100" alt=""> -->
        <img src="img/hotel/12thh.jpg" class="img-thumbnail" alt="...">
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