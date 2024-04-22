<?php include 'header.php'; ?>

<body>

  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
      });
      calendar.render();
      let table1 = new DataTable('#myTable1');
      let table2 = new DataTable('#myTable2');
      AOS.init();
    });
  </script>
<link rel="stylesheet" href="../dist/css/project.css">


  <div class="wrapper">

    <section id="projects" style="position: relative; background: linear-gradient(to bottom, black, #1ae36d );">
      <div class="content-header">
        <h1>PROJECTS</h1>
      </div>
      <div class="container-fluid position-relative" data-aos="zoom-in-up">
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
              </div>
              <div class="carousel-item">
                <img src="../dist/img/d1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="../dist/img/d1.jpg" alt="Third slide">
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
        <h1 class="text-dark">RECENT PROJECTS</h1>
      </div>
      <div class="container position-relative">
        <div class="row ">

          <div class="col-xl-3 col-sm-6 aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img src="../dist/img/d1.jpg" class="img-fluid" alt="">
              <div class="box-details">
                <h2>Lorem Ipsum</h2>
                <p>Lorem Ipsum</p>
                <a href="" class="stretched-link">Read more</a>
              </div>
            </div>

          </div>

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

            <div class="box">
              <img src="../dist/img/d2.jpg" class="img-fluid" alt="">
              <div class="box-details">
                <h2>Sed ut perspiciatis</h2>
                <p>Sed ut perspiciatis</p>
                <a href="" class="stretched-link">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <img src="../dist/img/d3.jpg" class="img-fluid" alt="">
              <div class="box-details">
                <h2>Magni Dolores</h2>
                <p>Magni Dolores</a></p>
                <a href="" class="stretched-link">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">

            <div class="box">
              <img src="../dist/img/d1.jpg" class="img-fluid" alt="">
              <div class="box-details">
                <h2>Nemo Enim</h2>
                <p>Nemo Enim</p>
                <a href="" class="stretched-link">Read more</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>




    <section id="event" style="background: linear-gradient(to bottom, black, #1ae36d );">
      <div class="content-header">
        <h1>EVENT CALENDAR</h1>
      </div>
      <div class="container-fluid" >
        <div class="row">

          <div class="col-md-12">
            <div class="calendar-wrapper" data-aos="zoom-in" data-aos-delay="400">
              <div id='calendar'></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="col-xl-6">
          <div class="row d-flex flex-column">

            <div class="col-md-6" style="background-color: #093DF6; width: 100%">
              <table id="myTable" class="display table table-dark" width="650px">
                <thead>
                  <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                  </tr>
                  <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div class="col-md-6">
<h1>yawa</h1>
            </div>
          </div>

        </div> -->


    <!-- <section id="clients">
      <div class="content-header ">
        <h1>OUR CLIENTELE</h1>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card-wrapper">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/222.jpg">
                      <p class="card-title">Laurel Batangas</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">Buanavista Quezon</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">project 2</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">project 2</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">project 2</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">project 2</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <img src="../dist/img/12121.png">
                      <p class="card-title">project 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="news" style="background: linear-gradient(to top,  #0FCC7C, #e8e8eb);">
      <div class="content-header">
        <h1 class="text-dark">NEWS & JOBS</h1>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="news-wrapper" data-aos="fade-right" data-aos-delay="100" style="background-color: #fefefe; border-radius: 10px; overflow: auto; box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.15); ">
              <div class="header" style="text-align: center;">
                <h2>News & Announcements</h2>
              </div>
              <div class="body p-2">
                <table id="myTable1" class="display" style="border-collapse: collapse; width: 100%;">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2024-04-17</td>
                      <td>New Service Launch</td>
                      <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-15</td>
                      <td>Service Maintenance</td>
                      <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    </tr>
                    <tr>
                      <td>2024-04-10</td>
                      <td>Customer Survey</td>
                      <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    </tr>
                    <tr>
                      <td>2024-04-17</td>
                      <td>New Service Launch</td>
                      <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-15</td>
                      <td>Service Maintenance</td>
                      <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    </tr>
                    <tr>
                      <td>2024-04-10</td>
                      <td>Customer Survey</td>
                      <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    </tr>
                    <tr>
                      <td>2024-04-08</td>
                      <td>Upcoming Webinar</td>
                      <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-05</td>
                      <td>Service Update</td>
                      <td>We have made improvements to our service to provide you with a better user experience.</td>
                    </tr>
                    <tr>
                      <td>2024-04-17</td>
                      <td>New Service Launch</td>
                      <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-15</td>
                      <td>Service Maintenance</td>
                      <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    </tr>
                    <tr>
                      <td>2024-04-10</td>
                      <td>Customer Survey</td>
                      <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    </tr>
                    <tr>
                      <td>2024-04-08</td>
                      <td>Upcoming Webinar</td>
                      <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-05</td>
                      <td>Service Update</td>
                      <td>We have made improvements to our service to provide you with a better user experience.</td>
                    </tr>
                    <tr>
                      <td>2024-04-17</td>
                      <td>New Service Launch</td>
                      <td>We are excited to announce the launch of our new service. Check it out now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-15</td>
                      <td>Service Maintenance</td>
                      <td>We will be performing scheduled maintenance on our servers. Some services may be temporarily unavailable.</td>
                    </tr>
                    <tr>
                      <td>2024-04-10</td>
                      <td>Customer Survey</td>
                      <td>We want to hear from you! Take our customer survey and let us know how we can improve our services.</td>
                    </tr>
                    <tr>
                      <td>2024-04-08</td>
                      <td>Upcoming Webinar</td>
                      <td>Join us for our upcoming webinar on the latest industry trends. Register now!</td>
                    </tr>
                    <tr>
                      <td>2024-04-05</td>
                      <td>Service Update</td>
                      <td>We have made improvements to our service to provide you with a better user experience.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="news-wrapper" data-aos="fade-left" data-aos-delay="100" style="background-color: #fefefe; border-radius: 10px;  overflow: auto; box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.15);">
              <div class="header" style="text-align: center;">
                <h2>Job Vancants</h2>
              </div>
              <div class="body p-2">
                <table id="myTable2" class="display" style="border-collapse: collapse; width: 100%;">
                  <thead>
                    <tr>
                      <th>Job Title</th>
                      <th>Description</th>
                      <th>Requirements</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Software Engineer</td>
                      <td>We are looking for a skilled software engineer to join our team. The ideal candidate should have experience with JavaScript, HTML, CSS, and one or more backend languages such as Python, Java, or Node.js. Knowledge of modern web development frameworks is a plus.</td>
                      <td>- Experience with JavaScript, HTML, CSS<br>- Familiarity with backend languages like Python, Java, or Node.js<br>- Knowledge of modern web development frameworks</td>
                    </tr>
                    <tr>
                      <td>Marketing Specialist</td>
                      <td>We are seeking a talented marketing specialist to develop and implement marketing strategies to promote our products and services. The candidate should have strong analytical skills and experience with digital marketing channels.</td>
                      <td>- Strong analytical skills<br>- Experience with digital marketing channels<br>- Creativity and strategic thinking</td>
                    </tr>
                    <tr>
                      <td>Graphic Designer</td>
                      <td>We are looking for a creative graphic designer to create engaging and on-brand graphics for a variety of media. The ideal candidate should have experience with Adobe Creative Suite and a strong portfolio of design work.</td>
                      <td>- Proficiency in Adobe Creative Suite<br>- Strong portfolio of design work<br>- Creativity and attention to detail</td>
                    </tr>
                    <tr>
                      <td>Customer Support Representative</td>
                      <td>We are hiring customer support representatives to provide excellent service and support to our customers. The ideal candidate should have strong communication skills and the ability to multitask in a fast-paced environment.</td>
                      <td>- Excellent communication skills<br>- Ability to multitask<br>- Customer service experience is a plus</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </section>

    <?php include 'footer.php'; ?>
  </div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<!-- AdminLTE JS -->
<script src="../plugins/jquery/jquery.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/adminlte.min.js?v=3.2.0"></script>


</html>