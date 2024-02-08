<?php
include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation page</title>
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



    <!-- 1st part -->
      <div class="container-fluid ">
        <h2 class="text-danger text-center fw-bold p-5 " style="background-color:antiquewhite;">Transportation</h2>
      </div>

      <!-- 2nd part -->
      <div class="container my-4">
        <h5 class="text-dark  text-center  fw-bold">Choose a vehicle type based on the number of passengers.</h5>
      </div>

      <!-- 3rd part -->
      <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
<div class="col">
        <h6 class="fw-bold text-center mt-4">Car: 3 Passenger</h6>
          <div class="card shadow-sm mt-4">
            <img src="img/car/1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" alt="">
          </div>
        </div>

        <div class="col">
        <h6 class="fw-bold text-center mt-4">SUV: 5 Passengers</h6>
          <div class="card shadow-sm mt-4">
            <img src="img/car/2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" alt="">
          </div>
        </div>

        <div class="col">
        <h6 class="fw-bold text-center mt-4">Micro Bus: 14 Passengers</h6>
          <div class="card shadow-sm mt-4">
            <img src="img/car/3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" alt="">
          </div>
        </div>

      </div>
    </div>

<!-- 4rt part -->
<div class="container">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
  
<div class="col">
  <h6 class="fw-bold text-center mt-4">Mini Bus: 24 Passengers</h6>
    <div class="card shadow-sm mt-4">
      <img src="img/car/4.jpg" class="bd-placeholder-img card-img-top" width="100%" height="325" alt="">
    </div>
  </div>

  <div class="col">
  <h6 class="fw-bold text-center mt-4">Bus: 31 Passengers</h6>
    <div class="card shadow-sm mt-4">
      <img src="img/car/5.jpg" class="bd-placeholder-img card-img-top" width="100%" height="325" alt="">
    </div>
  </div>

</div>
</div>

<div class="container my-3">
    <hr>
</div>


<!-- 5th part -->
<div class="container text-dark fw-bold mt-5">
    <h5 class="text-dark fw-bold my-3">Kathmandu Airport / Disposal / Overnight Charge</h5>
    <table class="table">
          <thead class="bg-primary text-light">
            <tr>
              <th style="background:rgba(0, 0, 0, 0);">S.N</th>
              <th>Destination</th>
              <th>Car</th>
              <th>SUV</th>
              <th>Micro Bus</th>
              <th>Mini Bus</th>
              <th>Bus</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background-color:azure;">
              <td>1.</td>
              <td>Airport Arrival / Departure (2 Hours)</td>
              <td>NPR. 1,185.66</td>
              <td>NPR. 1,718.95</td>
              <td>NPR. 1,969.55</td>
              <td>NPR. 2,650.7</td>
              <td>NPR. 3,967.12</td>
            </tr>
            <tr style="background-color:azure;">
              <td>2.</td>
              <td>Mountain</td>
              <td>NPR. 2,248.87</td>
              <td>NPR. 3,409.9</td>
              <td>NPR. 3975.78</td>
              <td>NPR. 5,161.85</td>
              <td>NPR. 6,295.2</td>
            </tr>
            <tr style="background-color:azure;">
                <td >3.</td>
              <td>	Disposal Per hour (4 hours minimum)</td>
              <td>NPR. 662.62</td>
              <td>NPR. 1,190.14</td>
              <td>NPR. 1,322.27</td>
              <td>NPR. 1,575.64</td>
              <td>NPR. 1,969.55</td>
              
            </tr>
            <tr style="background-color:azure;">
                <td>4.</td>
              <td>	Overnight Charge</td>
              <td>NPR. 2,914.15</td>
              <td>NPR. 4,327.95</td>
              <td>NPR. 4,983.7</td>
              <td>NPR. 6,479.63</td>
              <td>NPR. 7,878.21</td>
              
            </tr>
          </tbody>
        </table>
</div>

<!-- 6th part -->
<div class="container text-dark fw-bold mt-5">
    <h5 class="text-dark fw-bold my-3">Round Trip Tours From Kathmandu</h5>
    <table class="table">
          <thead class="bg-primary text-light">
            <tr>
              <th style="background:rgba(0, 0, 0, 0);">S.N</th>
              <th>Destination</th>
              <th>Car</th>
              <th>4WD SUV</th>
              <th>Micro Bus</th>
              <th>Mini Bus</th>
              <th>Bus</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background-color:azure;">
              <td>1.</td>
              <td>	Muktinath Darshan(3 Nights 4 Days)</td>
              <td>-</td>
              <td>NPR. 71,760.08</td>
              <td>-</td>
              <td>NPR. 106,231.54</td>
              <td>NPR. 130,928.77</td>
            </tr>
            <tr style="background-color:azure;">
              <td>2.</td>
              <td>	Pokhara – Palpa / Tansen – Lumbini – Chitwan (4 Nights 5 Days)</td>
              <td>NPR. 41,312.27</td>
              <td>NPR. 62,407.63</td>
              <td>NPR. 72,889.26</td>
              <td>NPR. 94,014.65</td>
              <td>NPR. 1,14,357.07</td>
            </tr>
            <tr style="background-color:azure;">
                <td >3.</td>
              <td>	Pokhara – Muglin – Chitwan (4 nights 5 Days)</td>
              <td>NPR. 45,638.89</td>
              <td>NPR. 68,879.79</td>
              <td>NPR. 80,464.31</td>
              <td>NPR. 102,998.02</td>
              <td>NPR. 124,592.55</td>
            </tr>
            
          </tbody>
        </table>
</div>

<div class="container">
    <hr>
</div>

<!-- 7th part -->
<div class="container text-dark fw-bold mt-5">
    <h5 class="text-dark fw-bold my-3">
Pokhara Airport / Disposal / Sightseeing Charge</h5>
    <table class="table">
          <thead class="bg-primary text-light">
            <tr>
              <th style="background:rgba(0, 0, 0, 0);">S.N</th>
              <th>Destination</th>
              <th>Car</th>
              <th>SUV</th>
              <th>Micro Bus</th>
              <th>Mini Bus</th>
              <th>Bus</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background-color:azure;">
              <td>1.</td>
              <td>	Airport / Bus Park Transfer (1 Hour)</td>
              <td>NPR. 71,760.08</td>
              <td>NPR. 71,760.08</td>
              <td>NPR. 71,760.08</td>
              <td>NPR. 106,231.54</td>
              <td>NPR. 130,928.77</td>
            </tr>
            <tr style="background-color:azure;">
              <td>2.</td>
              <td>	Disposal Per hour (3 hours minimum)</td>
              <td>NPR. 41,312.27</td>
              <td>NPR. 62,407.63</td>
              <td>NPR. 72,889.26</td>
              <td>NPR. 94,014.65</td>
              <td>NPR. 1,14,357.07</td>
            </tr>
            <tr style="background-color:azure;">
                <td >3.</td>
              <td>	Sightseeing Half Day (Max. 3 Hours)</td>
              <td>NPR. 45,638.89</td>
              <td>NPR. 68,879.79</td>
              <td>NPR. 80,464.31</td>
              <td>NPR. 102,998.02</td>
              <td>NPR. 124,592.55</td>
            </tr>

            <tr style="background-color:azure;">
                <td >4.</td>
              <td>		Sightseeing Full Day (Max. 5 Hours)</td>
              <td>NPR. 45,638.89</td>
              <td>NPR. 68,879.79</td>
              <td>NPR. 80,464.31</td>
              <td>NPR. 102,998.02</td>
              <td>NPR. 124,592.55</td>
            </tr>
            
          </tbody>
        </table>
</div>


<div class="container text-center">
<button type="button" class="btn btn-danger text-ceenter fw-bold text-light">Explore --></button>
</div>


<!-- note -->
<div class="container mt-4">
    <h3 class="fw-bold">Note:</h3>
    <p>Fuel and Driver included. <br> <br>

The mentioned rates are on a one-way basis (unless specified), 40% of the mentioned price will be added for round trips. <br> <br>

A 50% cancellation charge will be imposed if a booked trip is canceled on the same day of departure.</p>

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
<footer class="footer-section ng-scope mt-4" style="background: rgb(0,0,0,0.1);">
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