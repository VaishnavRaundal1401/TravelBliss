<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ./index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet"  href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  <script src="https://kit.fontawesome.com/e3a09e1f0d.js" crossorigin="anonymous"></script>
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">TravelBliss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" id="Logout">
    <Button class="btn btn-outline-danger"><a href="./php/logout.php" style="text-decoration: none; color:#fff">LogOut</a></Button>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
 </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/pune.jpeg" alt="PUNE" width="1100" height="500">
      <div class="carousel-caption">
        <h1>PUNE</h1>
        <p>"Known as the 'Oxford of the East,' Pune seamlessly blends modernity with its rich historical and cultural heritage."</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/mumbai.jpeg" alt="MUMBAI" width="1100" height="500">
      <div class="carousel-caption">
        <h1>MUMBAI</h1>
        <p>"The City of Dreams, where Bollywood meets bustling markets and a vibrant nightlife, offering a glimpse into the heartbeat of India."</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/kashmir.jpeg" alt="KASHMIR" width="1100" height="500">
      <div class="carousel-caption">
        <h1>KASHMIR</h1>
        <p>"Paradise on Earth, with its breathtaking landscapes, serene lakes, and majestic mountains, captivating hearts with its timeless beauty."</p>
      </div>   
    </div>
	<div class="carousel-item">
     	  <img src="image/varanasi.jpeg" alt="VARANASI" width="1100" height="500">
      	  <div class="carousel-caption">
       	   <h1>VARANASI</h1>
           <p>"The spiritual capital of India, where ancient rituals along the sacred Ganges River intertwine with bustling ghats and colorful markets, creating an otherworldly experience."
</p>
        </div>   
    </div>


  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div>
  <img class="bgImage" src="./image/jg3.jpeg" alt="">
</div>
<!-- Features -->
<section id="features">
    <div class="row d-flex justify-content-center">
      <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-location-dot fa-4x"></i>
        <h3>JourneyGuru</h3>
        <p>Discover the secrets of your destination with our "JourneyGuru" service.</p>
      </div>

      <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-car fa-4x"></i>
        <h3>RideRelay</h3>
        <p>Simplify your transportation needs with "RideRelay".</p>
      </div>

      <div class="feature-box col-lg-4">
      <i class="icon fa-solid fa-language fa-4x"></i>
        <h3>TalkTraverse</h3>
        <p>Break language barriers effortlessly with "TalkTraverse".</p>
      </div>

    </div>
  </section>


  
  <footer id="footer">

  <i class="fa-brands fa-x-twitter"></i> <i class="f-icon fa-brands fa-facebook"></i> <i class="f-icon fa-brands fa-instagram"></i> <i class="f-icon fa-solid fa-envelope"></i>
    <p class="f-end">© Copyright TravelBliss</p>

  </footer>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>