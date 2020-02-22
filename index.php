<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="images/icons/home.ico"/>
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      
    
    
    <title>Lagoon View</title>
  </head>
  <body >
  
     

    <!-- Navigation Bar --> 
    <?php include ('asset/headder.html');?>

 <!-- Image Banner -->
 <div >
   <div>     
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Img/main1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <img class="d-block w-100" src="Img/mainn2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-black">
                <h1>Rooms.</h1>
                <p>Experience 5-star luxury in our hotel rooms you have approximately 50 different accommodation options.</p>
                <p><a class="btn btn-lg btn-primary" href="room.php" role="button">Rooms</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"src="Img/mainn3.jpeg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left text-black">
                <h1>Spa.</h1>
                <p>Discover peace of mind while luxuriating in our specialized Balinese Ayu Spa in Matara. </p>
                <p><a class="btn btn-lg btn-primary" href="spa.php" role="button">Go to Details</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Img/mainn1.jpg" alt="fouth slide">
            <div class="container">
              <div class="carousel-caption text-left ">
                <h1>Dining.</h1>Sample the scrumptious, globally-inspired offerings at Weligama Kitchen, our signature hotel restaurant..</p>
                <p><a class="btn btn-lg btn-primary" href="dining.php" role="button">Go to Details</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Img/main6.jpg" alt="Fifth slide">
            <div class="container">
              <div class="carousel-caption text-right ">
                <h1 class="k">Contact Us.</h1>
                <p>Nestled along the untouched shores of Dickwella, Lagoon Villa Resort and Spa is among the top beach hotels in Sri Lanka.</p>
                <p><a class="btn btn-lg btn-primary" href="contactus.php" role="button">Go to Details</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </div>
 </div>
 
 <br>


 <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="col-md-8" style="position: relative; left: 20%;">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-3 wow fadeInUp">
            <img class="rounded-circle" src="Img/spa.jpg" alt="Spa" width="140" height="140">
            <h2>Spa</h2>
            <p>Discover peace of mind while luxuriating in our specialized Balinese Ayu Spa in Matara. Let us pamper you with a relaxing synchronic massage or simply choose from an array of revitalizing spa treatments from the menu. </p>
            <p><br><a class="btn btn-secondary" href="spa.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3 wow fadeInUp">
            <img class="rounded-circle" src="Img/dining.jpg" alt="Dining" width="140" height="140">
            <h2>Dining</h2>
            <p>Sample the scrumptious, globally-inspired offerings at Weligama Kitchen, our signature hotel restaurant. Casual and inviting, guests can delight in the buffet-style options at breakfast, lunch or dinner.</p>
            <p><br><a class="btn btn-secondary" href="dining.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3 wow fadeInUp">
            <img class="rounded-circle" src="Img/offer.jpg" alt="Offer" width="140" height="140">
            <h2>Offers</h2>
            <p>Looking for some fantastic hotel packages in Sri Lanka to enjoy great savings during your seaside holiday? Look no further as the deals offered here at our idyllic seaside resort will delight those who are intent on having themselves a blissful vacation.</p>
            <p><a class="btn btn-secondary" href="offers.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3 wow fadeInUp">
            <img class="rounded-circle" src="Img/room.jpg" alt="Room" width="140" height="140">
            <h2>Rooms</h2>
            <p>Experience 5-star luxury in our hotel roomsyou have approximately 50 different accommodation options. 22 of these are divided between 13 double rooms, 5 villas, 3 suites as well as the Grand Villa.</p>
            <p><br><a class="btn btn-secondary" href="room.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>


<hr>
<!-- Start home-about Area -->
<section class="container wow fadeInUp">
  <div class="container-fluid ">				
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 no-padding home-about-left">
        <img class="img-fluid" src="img/overview.jpg" alt="">
      </div>
      <div class="col-lg-6 no-padding home-about-right ">
        <h1>
          OVERVIEW </h1>
        <p>
          <span>A TROPICAL GETAWAY</span>
        </p>
        <p>
          Nestled along the untouched shores of Dickwella, a quaint town located on the southern coast of the island, 
          Lagoon Villa Resort and Spa is among the top beach hotels in Sri Lanka. 
          Come lounge under swaying palms, relax by the pool, enjoy long walks on the beach whilst teasing your taste buds with the catch of the day.
        </p>
        
      </div>
    </div>
  </div>	
</section>
<!-- End home-about Area -->	
      <hr>
<!-- Start home-about Area -->
<section class="container wow fadeInUp">
  <div class="container">		

    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 no-padding home-about-right">
        <h1>Visiting Place</h1>
        <p>
          <span>We are here to listen from you deliver exellence</span>
        </p>
        <p>
          Matara is a busy town booming with commercial activities. Situated 160 kilometers from the Sri Lankan capital of Colombo, the coastal town may not feature highly on the lists of tourists. 
        </p>
        
      </div>
      <div class="col-lg-6 no-padding home-about-left">
        <img class="img-fluid" src="img/img1.jpg" alt="">
      </div>
  
    </div>
  </div>	
</section>
<br><br><br>
<hr>
<!-- End home-about Area -->	

<!-- Footer -->
<?php include ('asset/footer.html');?>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- JavaScript for animated fadeInUp using wow-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>
        var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       -250,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
	</script>
  </body>
</html>





