<?php
include "link.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tour and Travel Booking Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking form of tour and travel agency</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

h1 {
  text-align: center;
  margin-top: 30px;
}

form {
  max-width: 600px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
.one{
    gap: 0.9rem;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  
}

input[type="date"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-bottom: 20px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

input[type="submit"]:active {
  background-color: #3e8e41;
  transform: translateY(1px);
}

.error {
  color: red;
  font-size: 14px;
  margin-top: -10px;
  margin-bottom: 10px;
}

    </style>
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

          

         <!-- <div class="sign">
        <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
          Sign Up
        </button> -->
        
        <button type="button" class="btn btn-danger text-center text-light " data-bs-toggle="modal" data-bs-target="#exampleModal">
 Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="db.php" method="post">
          
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput"  name="name" placeholder="enter name">
            <label for="floatingInput">Name</label>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput"  name="email" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword"  name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
         
          <div class="form-floating my-4">
            <input type="password" class="form-control" id="floatingc_password"  name="c_password" placeholder="enter a username">
            <label for="floatingc_password">confirm password</label>
          </div>
         
      
          <!-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div> -->
         
          <div class="modal-footer">
            <button type="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>

      </div>
      
    </div>
  </div>
<!-- </div> -->
    
    


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


  <!-- booking form section -->
	<h1>Tour <span class="text-danger">and</span> Travel <span class="text-danger my-3">Booking</span> Form</h1>
	<form onsubmit="return validateForm()">
		<div class="one d-flex mx-5">
        <label for="name">Name: <br>
        <input type="text" id="name"  name="name" required><br><br>
    </label>
		
		<label for="email" >Email: <br>
            <input type="email"  id="email" name="email" required><br>
        </label>
        </div>

        <div class="one d-flex  mx-5  ">
		<label for="phone">Phone:   <br>
            <input type="tel" id="phone" name="phone" required><br><br>
        </label>
		
		<label for="destination">country: <br>
        <input type="text" id="country" name="country" required><br><br>
        </label>
	 </div>

   <!-- <label for="destination">Destination:  <br>
   <input type="text" id="destination" name="destination" required><br><br>
        </label> -->


       

        <div class="one d-flex  mx-5  ">
        <label for="destination">Destination:  <br>
   <input type="text" id="destination" name="destination" required><br><br>
        </label>
		<label for="start-date">Start Date: <br>
        <input type="date" id="start-date" name="start-date" required><br><br>   
    </label>
		
		<label for="end-date">End Date: <br>
        <input type="date" id="end-date" name="end-date" required><br><br>
    </label>

    
        </div>
		<div class="spe ms-4 me-4" >
    <label for="special-requests">Special Requests:</label>
		<textarea id="special-requests" name="special-requests"></textarea><br><br>
    </div>
		<input type="submit" class="ms-4" value="Submit">
	</form>

	<script>
		function validateForm() {
			// Validate name
			var name = document.getElementById("name").value;
			if (name == "") {
				alert("Name must be filled out");
				return false;
			}

			// Validate email
			var email = document.getElementById("email").value;
			if (email == "") {
				alert("Email must be filled out");
				return false;
			}

			// Validate phone
			var phone = document.getElementById("phone").value;
			if (phone == "") {
				alert("Phone must be filled out");
				return false;
			}

			// Validate destination
			var destination = document.getElementById("destination").value;
			if (destination == "") {
				alert("Destination must be filled out");
				return false;
			}

			// Validate start date
			var startDate = document.getElementById("start-date").value;
			if (startDate == "") {
				alert("Start date must be filled out");
				return false;
			}

			// Validate end date
			var endDate = document.getElementById("end-date").value;
			if (endDate == "") {
				alert("End date must be filled out");
				return false;
			}

			// If form is valid, submit it
			alert("Thank you for your booking!");
			return true;
		}
	</script>


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
