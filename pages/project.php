<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="../dist/css/project.css">

<script>

</script>
<body>

  <section id="projects" >
    <div class="content-header">
      <h1 >PROJECTS</h1>
    </div>
    <div class="container-fluid " data-aos="zoom-in-up">
      <div id="carousel-wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../dist/img/d1.jpg" alt="First slide">

              <div class="carousel-caption ">
                <h2>Project 1</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, incidunt? Illum architecto</p>
                <a class="stretched-link" onclick="modalshow()"  id="btn-carousel">Read More</a>
              </div>

            </div>
            <div class="carousel-item">
              <img src="../dist/img/d1.jpg" alt="Second slide">
              <div class="carousel-caption ">
                <h2>Project 2</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, incidunt? Illum architecto</p>
                <a class="stretched-link" onclick="modalshow()"  id="btn-carousel">Read More</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../dist/img/d1.jpg" alt="Third slide">
              <div class="carousel-caption ">
                <h2>Project 3</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, incidunt? Illum architecto</p>
                <a class="stretched-link" onclick="modalshow()"  id="btn-carousel">Read More</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-custom-icon" aria-hidden="true">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-custom-icon" aria-hidden="true">
              <i class="fas fa-chevron-right"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="card-project">
    <div class="content-header">
      <h1 >RECENT PROJECTS</h1>
    </div>
    <div class="container ">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-xl-3  aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <img src="../dist/img/d1.jpg" class="img-fluid" alt="">
            <div class="box-details">
              <h2>Lorem Ipsum</h2>
              <p>Lorem Ipsum</p>
              <a  class="stretched-link" onclick="modalshow()" >Read more</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3  aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="../dist/img/d2.jpg" class="img-fluid" alt="">
            <div class="box-details">
              <h2>Sed ut perspiciatis</h2>
              <p>Sed ut perspiciatis</p>
              <a class="stretched-link"onclick="modalshow() " >Read more</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3  aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <img src="../dist/img/d3.jpg" class="img-fluid" alt="">
            <div class="box-details">
              <h2>Magni Dolores</h2>
              <p>Magni Dolores</a></p>
              <a class="stretched-link" onclick="modalshow()" >Read more</a>
            </div>
          </div>
        </div>
        <div class="col-xl-3  aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="../dist/img/d1.jpg" class="img-fluid" alt="">
            <div class="box-details">
              <h2>Nemo Enim</h2>
              <p>Nemo Enim</p>
              <a class="stretched-link" onclick="modalshow()" >Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="news" >
    <div class="content-header">
      <h1>Announcements</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="news-wrapper mb-3" data-aos="fade-right" data-aos-delay="100">
            <div class="header ">
              <h2>News & Events</h2>
            </div>
            <div class="body ">
              <table id="myTable1" class="display  ">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2024-04-01</td>
                    <td>New Service Launch</td>
                    <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    <td><button type="button" class="btn btn-success " onclick="modalshow()">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-15</td>
                    <td>Service Maintenance</td>
                    <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-10</td>
                    <td>Customer Survey</td>
                    <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-17</td>
                    <td>New Service Launch</td>
                    <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-15</td>
                    <td>Service Maintenance</td>
                    <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-10</td>
                    <td>Customer Survey</td>
                    <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-08</td>
                    <td>Upcoming Webinar</td>
                    <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-05</td>
                    <td>Service Update</td>
                    <td>We have made improvements to our service to provide you with a better user experience.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-17</td>
                    <td>New Service Launch</td>
                    <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-15</td>
                    <td>Service Maintenance</td>
                    <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-10</td>
                    <td>Customer Survey</td>
                    <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-08</td>
                    <td>Upcoming Webinar</td>
                    <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-05</td>
                    <td>Service Update</td>
                    <td>We have made improvements to our service to provide you with a better user experience.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-17</td>
                    <td>New Service Launch</td>
                    <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-15</td>
                    <td>Service Maintenance</td>
                    <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-10</td>
                    <td>Customer Survey</td>
                    <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-08</td>
                    <td>Upcoming Webinar</td>
                    <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                  <tr>
                    <td>2024-04-05</td>
                    <td>Service Update</td>
                    <td>We have made improvements to our service to provide you with a better user experience.</td>
                    <td><button type="button" class="btn btn-success ">Read</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="news-wrapper" data-aos="fade-left" data-aos-delay="100">
            <div class="header">
              <h2>Event Calendar</h2>
            </div>
            <div class="calendar-wrapper">
              <div id='calendar'></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal" id="myModal">
        <div class="modal-header">
            <h2 >ID: </h2>
            <h2 >Keyword</h2>
            <button class="btn btn-secondary btn-xs px-2" onclick="modalexit()"><i class="fas fa-times text-light"></i></button>
        </div>
        <div class="modal-body">
            <h2 id="project_title">Full Project Title: </h2>
            <img src="../dist/img/ge.png" alt="" />
            <p id="project_desc"><strong>Description: </strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolor dicta, praesentium voluptas quaerat voluptatem vel fugi.</p>
            <br>
            <p class="text-dark"><strong>Project Details</strong></p>
            <ul >
                <li>Timeline: </li>
                <li>Objectives:</li>
                <li>Technologies:</li>
            </ul>

            <button class="btn btn-success btn-md btn-sm " id="modal-contact"><a href="contact.php" >Contact Us</a></button>
        </div>
    </div>


  <?php include 'footer.php'; ?>
</body>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
    let table1 = new DataTable('#myTable1');
    AOS.init(); 
    
  });
  
  function modalshow() {
        let modal = document.getElementById("myModal");
        modal.style.display = "block";
    }
    function modalexit(){
        let modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    
  
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<!-- AdminLTE JS -->
<script src="../plugins/jquery/jquery.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/adminlte.min.js?v=3.2.0"></script>