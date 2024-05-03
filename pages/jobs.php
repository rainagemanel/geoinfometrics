
<?php include 'header.php'; ?>


  
  <style>
    .h2 {
  font-family: "Red Hat Display", sans-serif;
    color: white;
    
}
    .job-card {
      transition: transform 0.3s ease;
    }
    .job-card:hover, .job-card.active {
      transform: scale(1.1);
      z-index: 1;
    }
    .job-details {
      /* Display job details by default */
      display: block;
      transition: opacity 0.5s ease;
    }
    .job-choice {
      cursor: pointer;
      
    }
    .list-group {
        border-radius: 15px;
    }
    .job-details img {
      max-width: 100%;
      height: auto;
      border-radius: 15px;
    }
    .banner {
      max-width: 100%;
      height: auto;
    }
    .job-choice:hover {
      font-size: 1.3em;
      background: linear-gradient(to right, #3675D6, #1AE36D);
      color:white;
    }
    
.card2-container {
  display: flex;
  justify-content: center;
  align-items: center; /* Adjust height as needed */
  

}
.my-custom-background {
  background-color: #f0f0f0; /* Specify your desired background color */
}
.card2 {
  width: 70%;
  /* border-radius: 10px;
  border: 1px solid rgb(16, 37, 34); */
  transform: scale(0.9);
  margin: 15px;
  padding: 15px;
  transition: box-shadow, transform 0.3s; /* Add transition for smooth hover effect */
}

.card2:hover {
  box-shadow: 0px 0px 15px rgba(0, 0, 0.2, 0.2);
   /* Add shadow on hover */
   transform: scale(1.0);
}

.card2 {
  background: linear-gradient(to right, #3675D6, #1AE36D); /* Gradient background */
  align-items: center;
  border-radius: 15px;
}


  </style>
</head>
<body>
<div class="col-md-12 text-center mt-5">
        <h2 class="mb-4 text-center" style="font-size:44px; font-family: Red Hat Display, sans-serif;"><strong>Jobs and Careers</strong></h2>
      </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <h3>Job Choices</h3>
        <ul class="list-group">
          <li class="list-group-item job-choice" id="job1-choice">Job 1</li>
          <li class="list-group-item job-choice" id="job2-choice">Job 2</li>
          <li class="list-group-item job-choice" id="job3-choice">Job 3</li>
        </ul>
      </div>
      <div class="col-md-8">
        <div id="jobDetails" class="job-details text-justify">
          <img src="../dist/img/photo2.png" alt="Default Image" class="banner">
          
          <h3 class="mt-2">Select a job to view details</h3>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr>
  <section class="content mt-5">
  <div class="col-md-12 text-center">
        <h2 class="mb-2 text-center" style="font-size:44px; font-family: Red Hat Display, sans-serif;"><strong>Apply to us</strong></h2>
      </div>
    <div class="card2-container">
        <div class="card2">
            <div class="card-body row">
                <div class="col-md-5 text-center d-flex align-items-center justify-content-center my-custom-background">
                    <div>
                        <h2 style="font-size: 30px; font-family: 'Red Hat Display', sans-serif; "><strong>Geoinfometrics</strong></h2>
                        <p class="lead mb-5"> Translating knowledge to service.</p>
                        
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="inputName" style="color:white;">Full Name</label>
                        <input type="text" id="inputName" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" style="color:white;">E-Mail Address</label>
                        <input type="email" id="inputEmail" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject" style="color:white;">Job Title</label>
                        <input type="text" id="inputSubject" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage" style="color:white;">Brief introduction about this message</label>
                        <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                    <label for="pdfFile" style="color:white;">Upload your Resume/Curriculum Vitae</label>
                    <br>
                     <label for="pdfFile">Select PDF File:</label>
                     <input type="file" id="pdfFile" name="pdfFile" accept=".pdf"><br><br>
                
                    </div>
                    <div class="form-group text-right"><strong>
                        <input type="submit" class="btn btn-primary" value="Send message"></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<?php include 'footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".job-choice").click(function() {
        $(".job-choice").removeClass("active");
        $(this).addClass("active");

        // Fetch and display job details
        var jobId = $(this).attr("id").replace("-choice", "");
        var jobDetails = getJobDetails(jobId);
        
        // Fade out current job details
        $("#jobDetails").css("opacity", 0);
        
        // Set timeout to change job details after fade out animation completes
        setTimeout(function() {
          $("#jobDetails").html(jobDetails);
          // Fade in new job details
          $("#jobDetails").css("opacity", 1);
        }, 500); // Adjust timing to match CSS transition duration
      });
    });

    function getJobDetails(jobId) {
      // In a real scenario, you might fetch this information from a server
      switch (jobId) {
        case "job1":
          return "<h3>Job 1 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 1 Big Image'><p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        case "job2":
          return "<h3>Job 2 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 2 Big Image'><p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        case "job3":
          return "<h3>Job 3 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 3 Big Image'><p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        default:
          // Default content when no job is selected
          return "<img src='../dist/img/photo2.png.jpg' alt='Default Image'><h3>Select a job to view details</h3>";
      }
    }
  </script>
</body>
</html>


