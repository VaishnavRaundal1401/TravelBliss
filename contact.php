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


<div class="container py-5">
    <h1 class="text-center mb-4" style="color: blue;">Contact Us</h1>
<p class="lead text-justify">We value your feedback and inquiries. Whether you have questions about our services, need assistance planning your next trip, or simply want to say hello, we're here to help. Our dedicated team is committed to providing you with prompt and personalized assistance. Feel free to reach out to us via phone, email, or by filling out the contact form below. We look forward to hearing from you and assisting you with all your travel needs.</h3>

</div>

   <div class="w-50 m-auto">
  <div class="card">
    <div class="card-body">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</section>






<footer>
    <h5 class="p-3 bg-dark text-white text-center">@travelwithus</h5>
</footer>
   

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>