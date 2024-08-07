<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from scratch.
This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Geo Corp</title>
  <link rel="icon" href="../dist/img/logo.png" type="image/png">

  <!-- Google Font: Audiowide -->
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=Josefin+Sans:wght@500&family=Konkhmer+Sleokchher&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- <link rel="stylesheet" href="../dist/css/style.css"> -->
  <!-- Custom styles -->
  <style>
    .navbar-brand .brand-text {
      /* font-family: "Konkhmer Sleokchher", system-ui; */
      font-family: "Red Hat Display", sans-serif;
      font-style: bold;
    }

    .navbar-nav .nav-link {
      /* font-weight: regular; Apply bold font to nav items */
      font-family: "Red Hat Display", sans-serif;
      font-weight: 700;
    }

    .dropdown-menu {
      display: none;
      /* Hide the dropdown menu by default */
      opacity: 0;
      /* Initially set opacity to 0 */
      transition: opacity 0.3s ease;
      /* Add transition for smooth opacity change */
      animation-name: dropdownAnimation;
      animation-duration: 0.5s;
      animation-fill-mode: forwards;
      /* Keep the last keyframe state after animation */
      animation-timing-function: ease;
      transform-origin: top;
      /* Set the transform origin to the top */
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      /* Display the dropdown menu on hover */
      opacity: 1;
      /* Set opacity to 1 to make the menu visible */
    }
    /* CSS */
    /* #loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; 
    }

    .loader {
        border: 16px solid #f3f3f3; 
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        animation: spin 2s linear infinite;
    }
    .loading {
      font-size:20px;
      margin-left: 10px;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

        @keyframes dropdownAnimation {
          from {
            transform: scaleY(0);
            /* Scale from 0 height */
          }

          to {
            transform: scaleY(1);
            /* Scale to full height */
          }
        } */
      </style>
    </head>
    <body class="hold-transition layout-top-nav">
    <!-- <div id="loading-screen">
    <div class="loader"></div>
    <p class="loading">Loading...</p>
</div> -->

      <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
          <div class="container">
            <a href="index.php" class="navbar-brand">
              <img src="../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-bold">GEO CORP</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
              <!-- Left navbar links -->
              <ul class="navbar-nav ml-auto"> <!-- Utilize ml-auto class to push the dropdown to the right -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="project.php" class="nav-link">News & Projects</a>
                </li>
                <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Services</a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow dropdown-menu-right"> <!-- Utilize dropdown-menu-right class to align the dropdown to the right -->
                    <li><a href="geo.php" class="dropdown-item">Geographic Information System</a></li>
                    <li><a href="management.php" class="dropdown-item">Management Information System</a></li>
                    <li><a href="planning.php" class="dropdown-item">Planning</a></li>
                    <!-- <li class="dropdown-divider"></li> -->
                  </ul>
      </li>

                <li class="nav-item">
                  <a href="contact.php" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item">
                  <a href="jobs.php" class="nav-link">Jobs</a>
                </li>
              </ul>

            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->

            <!-- Bootstrap JS and jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script>// JavaScript
    document.addEventListener("DOMContentLoaded", function () {
        var loadingScreen = document.getElementById('loading-screen');
        var links = document.getElementsByTagName('a');

        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener('click', function () {
                loadingScreen.style.display = 'flex';
            });
        }
    });

    window.onload = function () {
        var loadingScreen = document.getElementById('loading-screen');
        setTimeout(function () {
            loadingScreen.style.opacity = '0'; // Fade out the loading screen
            setTimeout(function () {
                loadingScreen.style.display = 'none';
                document.body.classList.add('loaded'); // Add .loaded class after a delay
            }, 500); // Delay before adding .loaded class (adjust as needed)
        }, 500); // Delay before fading out loading screen (adjust as needed)
    };
    </script> -->
    </nav>
    </body>
    
    </html>
