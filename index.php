<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="src/css/index.css">
	 <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="small-device.css" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

</head>


<body style="background-color:beige;">
	<!-- navigation bar -->
  <style>
    .header img {
  float: left;
 width: 50px;
  height: 50px;
}
         .nav-link:hover{
    background: green;
}
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .card:hover{
    background: linear-gradient(#03a9f4, #e91ee3);
    transition: 0.5s;
    top: 0;
  }
  .card-title:hover{
    color: white;
    cursor: pointer;
   }
@media screen and (max-width: 500px) {
  .header img {
  float: left;
  width: 20px;
  height: 20px;
}

  </style>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="src/img/logo.png" alt="logo" style="width:40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li> 
    </ul>
  </div>
</nav>

<!-- membership part-->  

<div id="main">
		<div class="left">
		<h3>Access All Courses from one membership</h3>
		</div>
		<div class="right">
    <div class="row-signup">
		<div class="creator">
			<button onclick="document.getElementById('id01').style.display='block'">Sign UP as Creator</button>
		
		</div>
		<div class="learner">
			<button onclick="document.getElementById('id02').style.display='block'">Sign up for Learning</button>
		</div>
		</div>
  </div>

</div>




<!--pop menu-->

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
 class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="src/img/profile1.png" alt="Avatar" class="avatar" style="width: 70px;height: 70px;margin: auto; margin-top: 10px">
    </div>

    <div class="container-pop">
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>
      <input type="email" placeholder="Enter email" name="email" required><br><br>
	  <input type="password" placeholder="Enter Password" name="psw" required><br><br>
	  <input type="number" placeholder="Enter number" name="num" required><br><br>

      <input type="password" placeholder="Confirm Password" name="repass" required><br><br>

      <button type="submit" style="margin: auto;">Sign Up</button><br>

    </div>

    <div class="container-pop" style="background-color:#ffffff">
      <button type="button"  style="padding-right: 1px;margin: auto;" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>


    </div>
  </form>
</div> 


<!--pop menu for 2nd signup butto-->

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" 
 class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="src/img/profile1.png" alt="Avatar" class="avatar" style="width: 70px;height: 70px;margin: auto; margin-top: 10px">
    </div>

    <div class="container-pop">
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>
      <input type="email" placeholder="Enter email" name="email" required><br><br>
      <input type="number" placeholder="Enter number" name="num" required><br><br>
   <input type="password" placeholder="Enter vjfhjhjxhjvhjvhjh" name="psw" required><br><br>

      <input type="password" placeholder="Confirm Password" name="psw" required><br><br>

      <button type="submit" style="margin: auto;">Sign Up</button><br>

    </div>

    <div class="container-pop" style="background-color:#ffffff">
      <button type="button"  style="padding-right: 1px;margin: auto;" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 


<!-- gurauntee card and videos-->
<br> 
 <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">For 100% Money Back</h5>
        <p class="card-text"><img src="..." alt="icon1"></p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Available in Hindi and English</h5>
        <p class="card-text"><img src="..." alt="icon2"></p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sataisfaction Guarantee</h5>
        <p class="card-text"><img src="..." alt="icon3"></p>
        <a href="#" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
</div>
<br>
<h3 style="align-items: center;">Sample Course Videos</h3>
    <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://youtu.be/MWgoVzmbYW8"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>
  <!-- Grid column -->

</div>


<!--testimonials-->
	<div class="testimonials">
		<div class="card">
			<div class="layer"></div>
			<div class="content">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="image">
					<img src="src/img/user.png" height="100" width="100">
				</div>
				<div class="details">
					<h2>Someone Famous<br><span>Website Designer</span></h2>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="layer"></div>
			<div class="content">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="image">
					<img src="src/img/user.png" height="100" width="100">
				</div>
				<div class="details">
					<h2>Someone Famous<br><span>Website Designer</span></h2>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="layer"></div>
			<div class="content">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="image">
					<img src="src/img/user.png" height="100" width="100">
				</div>
				<div class="details">
					<h2>Someone Famous<br><span>Website Designer</span></h2>
				</div>
			</div>
		</div>

	</div>

	<!--footer-->
	<footer class="page-footer bg-dark">

  <div class="bg-success">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
       
        <div class="col-md-12 text-center"> 
            <a href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>         
            <a href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
            <a href="#"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
            <a href="#"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
            <a href="#"><i class="fab fa-instagram white-text"> </i></a> 
	  </div>

     </div>
    </div>
  </div>

  <div class="container text-center text-md-left mt-5">
    <div class="row">

      <div class="col-md-3 mx-auto mb-4">
        <h1 class="text-uppercase font-weight-bold">LOGO</h1>
      
        <p class="mt-2">.</p>
      </div>

      <div class="col-md-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">EXPLORE</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
       
         <ul class="list-unstyled">
            <li class="my-2"><a href="#">Blog</a></li>        
            <li class="my-2"><a href="#">Help</a></li>
            <li class="my-2"><a href="#">FAQ</a></li>     
          </ul>
      </div>
  
      <div class="col-md-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">COMPANY</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
          <ul class="list-unstyled">
            <li class="my-2"><a href="#">Privacy Policy</a></li>        
            <li class="my-2"><a href="#">Career</a></li>
            <li class="my-2"><a href="#">Term</a></li>
            <li class="my-2"> <a href="#">Contact Us</a></li>         
          </ul>
      </div>

      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact Buisness</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
          <ul class="list-unstyled">
            <li class="my-2"><i class="fas fa-home mr-3"></i> abcdhud,India</li>
            <li class="my-2"><i class="fas fa-envelope mr-3"></i> abc@gmail.com</li>
            <li class="my-2"><i class="fas fa-phone mr-3"></i> + 01 234 567 88</li>
            <li class="my-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</li>
          </ul>
      </div>
    </div>
  </div>

  <div class="footer-copyright text-center py-3">
      <p> All the &copy; Copyright  are Reserved</p>

    
  </div>
</footer>
<!-- Footer -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>











</body>
</html>