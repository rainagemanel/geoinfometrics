
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Offerings</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
    .job-details img {
      max-width: 100%;
      height: auto;
    }
    .banner {
      max-width: 100%;
      height: auto;
    }
    .job-choice:hover {
      font-size: 1.1em;
      background: linear-gradient(to right, #3675D6, #1AE36D);
    }
  </style>
</head>
<body>
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
        <div id="jobDetails" class="job-details">
          <img src="../dist/img/photo2.png" alt="Default Image" class="banner">
          <h3>Select a job to view details</h3>
        </div>
      </div>
    </div>
  </div>

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
          return "<h3>Job 1 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 1 Big Image'><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        case "job2":
          return "<h3>Job 2 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 2 Big Image'><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        case "job3":
          return "<h3>Job 3 Details</h3><img src='../dist/img/photo4.jpg' alt='Job 3 Big Image'><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel quam vitae ligula feugiat gravida. Ut et fermentum mauris, vitae elementum est. Suspendisse pharetra posuere egestas. Donec ac tristique nunc, non dapibus eros. Nam ullamcorper imperdiet tristique. Curabitur lobortis, nisl scelerisque placerat bibendum, sapien velit pretium magna, nec eleifend ex lectus et ligula. Maecenas lacinia felis eget gravida pretium. In eros nibh, scelerisque gravida metus sit amet, fringilla commodo eros. Proin commodo tristique purus, in facilisis mauris bibendum et. Ut eu purus consectetur, vulputate eros id, scelerisque justo.</p>";
        default:
          // Default content when no job is selected
          return "<img src='../dist/img/photo2.png.jpg' alt='Default Image'><h3>Select a job to view details</h3>";
      }
    }
  </script>
</body>
</html>


