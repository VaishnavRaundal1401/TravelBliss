<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">

  
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container my-5">

  <div class="row">
    <!-- Left side: Text section -->
    <div class="col-lg-8">
      <h2 style="color: blue;">Explore Further with JourneyGuru</h2>
      <p>Here's a detailed overview of the services provided by JourneyGuru:</p>
      <ul>
        <li>Expert guidance on popular and off-the-beaten-path destinations</li>
        <li>Customized travel itineraries tailored to your preferences</li>
        <li>Local insights and recommendations for immersive experiences</li>
	      <li>Hassle-free booking assistance for accommodations, transportation, and activities.</li>
	      <li>Personalized assistance with visa applications and travel documentation.</li>
	      <li>Sustainable travel options to minimize environmental impact and support local communities.</li>
	      <li>Assistance with travel insurance to ensure peace of mind during your journey.</li>
	      <li>Sustainable travel options to minimize environmental impact and support local communities.</li>
	      <li>Recommendations for family-friendly activities, solo travel adventures, or romantic getaways.</li>
	      <li>Tailored packages for group travel, corporate retreats, or honeymoon vacations.</li>
	      <li>Expert advice on travel regulations and health guidelines for international destinations.</li>
	      <li>Assistance with travel logistics for academic or educational trips, including school group tours or study abroad programs.</li>
      </ul>
      <h3>Read testimonials from our satisfied customers:</h3>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Shrads</h5>
          <p class="card-text">"JourneyGuru made my trip unforgettable and full of magic moments and loads of happie memories! Their expert guidance led me to hidden gems I would've never found on my own."</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Jane Smith</h5>
          <p class="card-text">"Thanks to JourneyGuru, I experienced the true essence of travel Their recommendations enriched my journey and left me wanting more."</p>
        </div>
      </div>
    </div>

<!-- Right side: Carousel section -->
<div class="col-lg-4 mt-3">

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/jg1.jpeg" alt="1" width="100" height="100"> 
      </div>
      <div class="carousel-item">
        <img src="image/jg2.jpeg" alt="2" width="100" height="100"> 
      </div>
      <div class="carousel-item">
        <img src="image/jg3.jpeg" alt="3" width="100" height="100"> 
      </div>
      <div class="carousel-item">
        <img src="image/jg4.jpeg" alt="4" width="100" height="100"> 
      </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
</div>
</div>
<style>
  .carousel-img {
    width: 300px !important;
    height: 300px !important;
  }
</style>

<section class="my-5">
  <div class="container py-5">
    <div class="border border-dark border-3 p-4">
      <h2 class="text-center">Tell us what you need, and we'll help you get quotes</h2>
      <div class="w-50 m-auto border p-4">
        <form action="submit_form.php" method="post">
          <div class="form-group">
            <label for="name">Enter your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <div class="input-group">
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile">
            </div>
            <small class="form-text text-muted">Seller will contact you on this number</small>
          </div>
          <div class="form-group">
            <label for="country">Your Country</label>
            <select class="form-control" id="country" name="country">
              <option>Choose...</option>
              <option>India</option>
              <option>United States</option>
              <option>United Kingdom</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          <div class="form-group">
            <label for="requirement">Briefly describe your requirement</label>
            <textarea class="form-control" id="requirement" name="requirement" rows="5" placeholder="Briefly describe your requirement"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

</section>

<footer>
    <h5 class="p-3 bg-dark text-white text-center">@travelwithus</h5>
</footer>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>