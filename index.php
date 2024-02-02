<?php

include 'link.php';
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
        
        <form action="" method="post">
          
          <div class="form-floating">
            <input type="text" class="form-control"  name="name" placeholder="enter name">
            <label for="floatingInput">Name</label>
            <div class="form-floating">
              <input type="email" class="form-control"  name="email" placeholder="name@example.com">
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



    
   







  <!-- main section -->
  <div class="container-fluid">
    <img src="img/home/main.jpg" class="img-fluid " alt="logo" height="100vh">
  </div>

 
  <div class="container my-4">
  <hr>
</div>


<!-- feauture section -->
<div class="main p-5" style="background-color: #e5e5e5;" >
<div class="container" >
  <div class="row d-flex">

  <!-- 1st -->
<div class=" col-md-4 d-flex">

<h1><i class="fas fa-map-signs text-dark mt-2 " style="color:blueviolet;"></i></h1>
<div class="ll">
<h3 class="ms-3  text-primary">100+ Local Guides</h3> 
<p class="ms-3 fw-bold">Experienced and trained local guides in service</p>
</div>
</div>

<!-- 2nd -->
<div class=" col-md-4 d-flex">

<h1><i class="fa-brands fa-cc-amazon-pay  text-success"></i></h1>
<div class="ll">
<h3 class="ms-3  text-primary">Hassle-Free Payment</h3> 
<p class="ms-3 fw-bold">We offer payment method from Online banking.</p>
</div>
</div>


<!-- 3rd -->
<div class=" col-md-4 d-flex">

<h1><i class="fa-solid fa-face-smile text-warning"></i></h1>
<div class="ll">
<h3 class="ms-3  text-primary">99% Happy Travelers</h3> 
<p class="ms-3 fw-bold">Awarded with the TripAdvisor Certificate of Excellence</p>
</div>
</div>


  </div>
</div>
</div>



<!-- spacilities section -->
<h3 class="header text-center text-dark my-5 fw-bold">Our <span class="text-danger fw-bold">Spacilities</span></h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/special.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          <h5 class=" text-center fw-bold text-dark
           text-decoration-none p-1">Tour in Nepal</h5>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/terkinng.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          <h5 class=" text-center fw-bold text-dark text-decoration-none p-1">Terking in Nepal</h5>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/tranprotation.png" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          <h5 class=" text-center fw-bold text-dark text-decoration-none p-1">Transportation</h5>
          </div>
        </div>
      </div>
</div>

<div class="contaier-fluid">
  <hr>
</div>
<br>


<!-- why choose us section -->
<div class="why-main" style="background-color: #e5e5e5;">
<div class="container px-4 py-5"  id="hanging-icons">
    <h2 class="pb-2 text-center text-dark fw-bold text-success">why <span class="text-danger fw-bold">Choose</span> Us?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-globe-americas text-light border-rounded bg-success p-2 rounded fa-2x"></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Diverse Destinations.</h5>
          <h6>We are authorized to acquire a license to operate Travel, Tours, Trekking related tourism activities all over from the Nepal.</h6>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-money-bill text-light border-rounded bg-success p-2 rounded fa-2x"></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Value for Money.</h5>
          <h6>We provide you with clear details of the cost of your tour, trekking and other program so that you are fully aware of any extra expenses.</h6>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-camera-retro text-light border-rounded bg-success p-2 rounded fa-2x"></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Beautiful Places.</h5>
          <h6>We present you with the most beautiful places to visit in country of Mt. Everest Nepal, Bhutan and Tibet.</h6>
        </div>
      </div>

      <div class="col d-flex align-items-start my-5">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-calendar-alt text-light border-rounded bg-success p-2 rounded fa-2x "></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Fast Booking</h5>
          <h6>We provide you with the best services of fast booking for various packages in Nepal, Bhutan and Tibe.</h6>
        </div>
      </div>

      <div class="col d-flex align-items-start my-5">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-headset text-light border-rounded bg-success p-2 rounded fa-2x "></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Support Team</h5>
          <h6>Our experienced team leader, guides, porters and cooks pay careful attention to arrangements for travel.</h6>
        </div>
      </div>

      <div class="col d-flex align-items-start my-5">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        <i class="fas fa-heart text-light border-rounded bg-success p-2 rounded fa-2x "></i>
        </div>
        <div>
          <h5 class="head mt-1 text-primary">Memorable Experience.</h5>
          <h6>We make sure that you leave with tons of amazing and new memorable experience when you return back.</h6>
        </div>
      </div>

    </div>
  </div>
  </div>







 <!-- Packages section -->

<!-- tour packages -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <!-- 1st section -->
            <div class="carousel-item active">
                <img src="img/home/pkg.jpg" width="100%" height="450" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">


                        <div class="package">
                            <div class="container ">

                                <h3 class="header text-center text-light fw-bold my-5">Popular <span class="text-dark fw-bold">Tour</span> & Terk<span class="text-dark fw-bold"> Packages</span> </h3>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/home/tour-pkg-1.jpg" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Kathmandu Valley UNESCO Sites Day Tour: 5 -7 hour</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/home/tour-pkg-2.png" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Nagarkot And Bhaktapur Day Tour: 5-7 hour</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/home/tour-pkg-2-2.jpg" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Kathmandu And Chitwan Tour – 6 Days</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/home/tour-pkg-6.jpeg" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Buddhist Tour In Nepal – 7 Days</h6>
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/home/tour-pkg-last.jpg" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 cclass="text-light text-start my-2"> Kathmandu, Chitwan, Lumbini And Pokhara Tour – 11 Days</h6>
                                         
                                           
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 2nd section -->
            <div class="carousel-item ">
                <img src="img/home/pkg.jpg" width="100%" height="450" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">


                        <div class="package">
                            <div class="container ">

                                <h3 class="header text-center text-light fw-bold my-5">Popular Tour & Terk Packages</h3>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/pakage/1.jfif" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Annapurna Base Camp Terk</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/pakage/2.jfif" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light text-start my-2">Everest Base Camp Terk</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/pakage/3.jfif" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light  text-start">Mulde-mohare-poon Hill Terk</h6>
                                    </div>


                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/pakage/4.jfif" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                        <h6 class="text-light  text-start">Langtang Valley Terk</h6>
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img src="img/pakage/5.jfif" alt="" class="bd-placeholder-img card-img-top" width="300" height="200">
                                        </div>
                                      
                                            <h6 class="text-light  text-start">  Annapurna poon Hill Sunrise Terk</h6>
                                            </h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>




<!-- Best seller packages -->
<div class="container my-5">

<h3 class="header text-center text-dark fw-bold my-5">Our <span class="text-danger fw-bold">Best</span> Sellers</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/best-seller-1.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Everest Base Camp Private Trek-15 days</h6>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/best-seller-2.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Kathmandu-Chitwan-Pokhara Tours-9 days</h6>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/best-seller-3.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Kathmandu Day Tours-1 day</h6>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/best-seller-4.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Annapurna Circuit with Tilicho Lake Trek-16 days</h6>
        </div>

        <div class="col ">
          <div class="card shadow-sm text-center ">
          <img src="img/home/best-seller-5.jpeg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Nagarkot-Dhulikhel-Namobuddha Hiking-6 days</h6>
        </div>

        <div class="col ">
          <div class="card shadow-sm text-center ">
          <img src="img/home/best-seller-6.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
          </div>
          <h6 class="text-start my-2 fw-bold text-dark">Eastern Paradise Ilam Tour-5days</h6>
        </div>
        
      </div>

     
</div>





<!-- background - attach -->
<section class="call">

    <h6 class="fw-bold  text-center  text-light">MAKE <span class="text-dark fw-bold">YOUR</span> MEMORIES <span class="fw-bold text-dark">YOUR</span> OWN <span class="text-dark fw-bold">WAY</span></h6>
    <h3 class="fw-bold  text-center  text-dark">PLAN YOUR NEXT TRIP, THE WAY YOU WANT</h3>
    <p class=" text-light text-center ">lthough we usually offer programs tailor-made to the specific needs of our <br> clients, we have also prepared for your convenience some package deals for your <br> vacations in Nepal. These programs include either customized itinerary or a <br> ready-made driving itinerary of Nepal mainland (Fly & Drive).</p>

  <button class="rounded fw-bold text-center outline-none" style="background:linear-gradient(rgba(81, 92, 112, 0.9), rgba(93, 105, 125, 0.9)); padding: 0.4em; width:6
  rem;  ">Explore</button>
</section>


<!-- article -->
<div class="container-fluid" style="background-color: #e5e5e5;" >
<div class="album py-5 bg-light">
  <h3 class="art text-success text-center fw-bold py-4"><span class="fw-bold text-danger">Latest</span> Articles</h3>
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           <img src="img/home/article-1.jpg"  class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="">
            <div class="card-body">
              <h5 class="card-text">A Guide to Rocky Mountain vacations</h5>
              <p>The term mountaineering describes the sport of mountain climbing. While some scholars identify mountaineering-related activities as...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-danger">View</button>
        
                </div>
                <small class=" text-warning">10hr ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/home/articlel.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250"  alt="">
            <div class="card-body">
            <h5 class="card-text">Base Camp In Nepal.....</h5>
              <p class="">Nepal Is A Land Of Mountains And Hills. There Are 8 Out Of 10 World Highest Peaks In The World. Among Them, Mount Everest Is The Tallest One. Nepal's Mountain Ranges Also Cover Annapurna, Dhaulagiri, Makalu, Lhotse, Manaslu, And Kanchenjunga...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-danger">View</button>
        
                </div>
                <small class=" text-warning">18hr ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="img/home/article-2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="">
            <div class="card-body">
              <h5 class="card-text">Mountain Climbing in the Himalayas.....</h5>
              <p >Camping as a recreational activity became popular among elites in the early 20th century. With time, it grew more democratic,</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-danger">View</button>
        
                </div>
                <small class=" text-warning">1 day ago</small>
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