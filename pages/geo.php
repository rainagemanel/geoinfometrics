
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geographic Information System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/services.css">
</head>
<body>

<?php include 'header.php'; ?>


    <section id="gp" class="gp">
    <div class="tit" style="text-align: center; color: white;">
  <h1>
  "Mapping the World,
</h1>
<h1>
Connecting Communities"
</h1>
<h1>
  <b>Geographic."</b>
<br>
</h1>
<a href="contact.php" class="button">Let's get Started!</a>
</div>
</section>

<section id="ser1" class="ser1">
<div class="container">
<h1 class="my-4">Geographic 
  <small>Information System</small>
</h1>
<div class="row">
  <div class="col-md-8">
    <a href="#" >
    <!-- target="_blank" -->
    <img id="firstimage" class="img-fluid" src="https://via.placeholder.com/750x500" alt="">
    </a>
  </div>
  
  <div class="col-md-4">
    <h3 class="my-3"> Description</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
    <h3 class="my-3">Details</h3>
    <ul>
      <li>Lorem Ipsum</li>
      <li>Dolor Sit Amet</li>
      <li>Consectetur</li>
      <li>Adipiscing Elit</li>
    </ul>
  </div>
</div>

<!-- Related Projects Row -->
<h3 class="my-4">Other Services</h3>
<div class="row">
  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img id="secondimage" class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript part
  // Get references to the images by their IDs
  var firstImage = document.getElementById("firstImage");
  var secondImage = document.getElementById("secondImage");

  // Add an event listener to the first image
  firstImage.addEventListener("click", function() {
    // Change the source of the first image to the second image
    firstImage.src = "https://via.placeholder.com/500x300";
  });

  // Add an event listener to the second image
  secondImage.addEventListener("click", function() {
    // Change the source of the second image to the first image
    secondImage.src = "https://via.placeholder.com/750x500";
  });
</script>


<!-- <section id="ser2" class="ser2">
<div class="container">
<h1 class="my-4">Geographic 
  <small>Information System</small>
</h1>
<div class="row">
  <div class="col-md-8">
    <a href="#">
    <img class="img-fluid" src="https://via.placeholder.com/750x500" alt="">
    </a>
  </div>
  <div class="col-md-4">
    <h3 class="my-3">Project Description</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
    <h3 class="my-3">Project Details</h3>
    <ul>
      <li>Lorem Ipsum</li>
      <li>Dolor Sit Amet</li>
      <li>Consectetur</li>
      <li>Adipiscing Elit</li>
    </ul>
  </div>
</div>


<h3 class="my-4">Related Projects</h3>
<div class="row">
  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
          <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
        </a>
  </div>
</div>
</div>
</section> -->

<section>
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">GIS
      <small>Services</small>
    </h1>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3> One</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class="btn btn-primary" href="#">View </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!--  Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3> Two</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
        <a class="btn btn-primary" href="#">View </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!--  Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3> Three</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
        <a class="btn btn-primary" href="#">View </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!--  Four -->
    <div class="row">

      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://via.placeholder.com/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3> Four</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
        <a class="btn btn-primary" href="#">View </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
</section>

<!-- <section id="fp" class="fp">
<div class="background"></div>
    <div class="background-texture"></div>

    <section class="carousel">
      <h2 class="categories__title" style="font-weight: 700;">Geographic Management System Features</h2>
      <div class="carousel__container">
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/708392/pexels-photo-708392.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Geographic Information System</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/1785001/pexels-photo-1785001.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Global Positioning System</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Remote Sensing</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>


        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/1071882/pexels-photo-1071882.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Simulation and Modeling</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>


        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Cartography</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>


        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/6945/sunset-summer-golden-hour-paul-filitchkin.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">GIS-based Tax Mapping</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>

        <div class="carousel-item">
          <img
            class="carousel-item__img"
            src="https://images.pexels.com/photos/1964471/pexels-photo-1964471.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
            alt="people"
          />
          <div class="carousel-item__details">
            <h5 class="carousel-item__details--title">Descriptive Title</h5>
            <h6 class="carousel-item__details--subtitle">Date and Duration</h6>
          </div>
        </div>
      </div>
    </section> -->


<!-- LAST PAGE  -->
<section id="ending" class="ending">
  <div>
    <h2>A GOAL WITHOUT<br><u> A PLAN</u><br> IS JUST A WISH</h2>
    <button class="button3" id="pwu">Plan With Us!</button>
  </div>  
</section>


<?php include 'footer.php'; ?>
</body>
</html>









<!-- FIRST SERVICE CODE
<section id="fp" class="fp">
  <h3 style=" font-family: Audiowide, sans-serif;">Environmental Planning Services</h3>
<table class="t" style="width: 100%;" >
  <tr>
  <th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/VwmenPeK9rs?si=dgDZ7H-6qoUeR362', 'fp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
</tr>
</table>
<br>
<div id="embedContainer1" class="center-container">
  <div class="iframe-container" style="height: 450px"> 
    <iframe id="embedFrame1" width="100%" height="100%" src="https://www.youtube.com/embed/VwmenPeK9rs?si=dgDZ7H-6qoUeR362" title="YouTube video player" frameborder="0"
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
       allowfullscreen></iframe>
  </div>
  <p class="mx-auto p-2" style="width: 200px;">Additonal INFO</p>
</section>
END OF FIRST SERVICE 

SECOND SERVICE CODE 
<section id="sp" class="sp">
  <h3 style=" font-family: Audiowide, sans-serif;">Land Use Planning</h3>
<table class="t" style="width: 100%;">
<tr>
  <th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/VwmenPeK9rs?si=dgDZ7H-6qoUeR362', 'sp', 'embedFrame2')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'sp', 'embedFrame2')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'sp', 'embedFrame2')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'sp', 'embedFrame2')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'sp', 'embedFrame2')">Climate and Disaster Risk Assessment</a></th>
</tr>
</table>
<br>
<div id="embedContainer2" class="center-container">
  <div class="iframe-container" style="height: 450px"> 
  <iframe id="embedFrame2" width="100%" height="100%" src="https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6" title="YouTube video player" frameborder="0"
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
      allowfullscreen></iframe>
  </div>
</section>
END OF SECOND PAGE 

THIRD SERVICE PAGE 
<section id="lup" class="lup">
  <h3 style=" font-family: Audiowide, sans-serif;">Community Development Planning</h3>
<table class="t" style="width: 100%;">
<tr>
  <th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/VwmenPeK9rs?si=dgDZ7H-6qoUeR362', 'tp', 'embedFrame3')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'tp', 'embedFrame3')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'tp', 'embedFrame3')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'tp', 'embedFrame3')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'tp', 'embedFrame3')">Climate and Disaster Risk Assessment</a></th>
</tr>
</table>
<br>
<div id="embedContainer3" class="center-container">
  <div class="iframe-container" style="height: 450px"> 
  <iframe id="embedFrame3" width="100%" height="100%" src="https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6" title="YouTube video player" frameborder="0"
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
      allowfullscreen></iframe>
  </div>
</section>
END OF THIRD PAGE 

FOURTH SERVICE PAGE 
<section id="fthp" class="fthp">
  <h3 style=" font-family: Audiowide, sans-serif;">Emergency Management Planning</h3>
<table class="t" style="width: 100%;">
<tr>
  <th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/VwmenPeK9rs?si=dgDZ7H-6qoUeR362', 'fthp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fthp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fthp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fthp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
<th><a class="button" href="javascript:void(0);" onclick="changeEmbed('https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6', 'fthp', 'embedFrame1')">Climate and Disaster Risk Assessment</a></th>
</tr>
</table>
<br>
<div id="embedContainer4" class="center-container">
  <div class="iframe-container" style="height: 450px"> 
  <iframe id="embedFrame4" width="100%" height="100%" src="https://www.youtube.com/embed/q9luhiQdXLA?si=ZxA1nKcESigpzbH6" title="YouTube video player" frameborder="0"
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
      allowfullscreen></iframe>
  </div>
</section>
END OF FOURTH PAGE  -->