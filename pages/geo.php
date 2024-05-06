
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geographic Information System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../dist/css/services.css">
    <link rel="icon" href="../dist/img/logo.png" type="image/png">


    <script>
function changeImage(imageUrl) {
    document.getElementById("myimage").src = imageUrl;
    var description = "";
    switch (imageUrl) {
        case 'https://media.wired.com/photos/59329470d80dd005b42af8c3/master/pass/Hotchin.jpg':
            description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.";
            break;
        case 'https://th.bing.com/th/id/R.7723d9f5878efc7e19f37c2b810da920?rik=Z69PwafjbzNXnw&riu=http%3a%2f%2fwww.urbansdgplatform.org%2fupload%2fcsd%2fGIS+layer.jpg%3bjsessionid%3dE25398A513C793F42401BD685D5531BA&ehk=GH6CnVA0ItHoU%2fgmeKS%2fJOgeEQ7eAAepxC2hAOgWUCc%3d&risl=&pid=ImgRaw&r=0':
            description = "Description for Geographic Information System";
            break;
        case 'https://media.wired.com/photos/59329470d80dd005b42af8c3/master/pass/Hotchin.jpg':
            description = "Description for GIS-based Tax Mapping";
            break;
        case 'https://via.placeholder.com/750x500/00FF00/000000':
            description = "Description for Global Positioning System";
            break;
        case 'https://via.placeholder.com/750x500/FFFF00/000000':
            description = "Description for Remote Sensing";
            break;
        case 'https://via.placeholder.com/750x500/FF00FF/FFFFFF':
            description = "Description for Simulation and Modeling";
            break;
    }
    document.getElementById("dynamic-description").textContent = description;
}
</script>
</head>
<body>

<?php include 'header.php'; ?>


<style>
    .bg-image .btn {
    background-color:  rgb(255, 255, 255);
    font-family: "Red Hat Display", sans-serif;
    color: darkblue;
    padding: 10px 20px;
    border: none;
    border-radius: 15px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    font-size: 34px;
    transition: font-size 0.5s, background-color 0.5s;
  }

  .bg-image .btn:hover {
    background-color: linear-gradient(to right, #3675D6, #1AE36D);
    background-image: linear-gradient(to right, #3675d6, #0FCC7C);
    font-size: 44px;
    color: white;
  }
</style>

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
<!-- <a href="contact.php" class="button">Let's get Started!</a>
 -->
 <div class="bg-image" id="btnup">
 <a href="contact.php" class="btn" style="font-family: Red Hat Display, sans-serif;">Contact Us Today!</a>
 </div>
 
</div>
</section>

  <section class="kbn">
    <div class="wrapper">
      <div class="sidebar">
        <div class="logo"><span>Ser</span>vices</div>
        <hr>
        <ul style="  min-height:400px; background-color:white; color:black">
          <li><a onclick="changeImage('https://media.wired.com/photos/59329470d80dd005b42af8c3/master/pass/Hotchin.jpg')">Cartography</a></li>
          <li><a onclick="changeImage('https://th.bing.com/th/id/R.7723d9f5878efc7e19f37c2b810da920?rik=Z69PwafjbzNXnw&riu=http%3a%2f%2fwww.urbansdgplatform.org%2fupload%2fcsd%2fGIS+layer.jpg%3bjsessionid%3dE25398A513C793F42401BD685D5531BA&ehk=GH6CnVA0ItHoU%2fgmeKS%2fJOgeEQ7eAAepxC2hAOgWUCc%3d&risl=&pid=ImgRaw&r=0')">Geographic Information System</a></li>
          <li><a onclick="changeImage('https://media.wired.com/photos/59329470d80dd005b42af8c3/master/pass/Hotchin.jpg')">GIS-based Tax Mapping</a></li>
          <li><a onclick="changeImage('https://via.placeholder.com/750x500/00FF00/000000')">Global Positioning System</a></li>
          <li><a onclick="changeImage('https://via.placeholder.com/750x500/FFFF00/000000')">Remote Sensing</a></li>
          <li><a onclick="changeImage('https://via.placeholder.com/750x500/FF00FF/FFFFFF')">Simulation and Modeling</a></li>
        </ul>
      </div>
      <div class="container">
  <!-- <h1 class="my-4">Geographic 
    <small>Information System</small>
  </h1> -->
  <br><br><b><br>
  <div class="row">
    <div class="col-md-8">
      <img id="myimage" class="img-fluid" src="https://media.wired.com/photos/59329470d80dd005b42af8c3/master/pass/Hotchin.jpg" alt="">
    </div>
    
    <div class="col-md-4 description-wrapper" style="background-color: white; color: black; border-radius: 10px;">
      <h3 class="my-3"> Description</h3>
      <p id="dynamic-description">Lorem ipsum dolor sit amet, consectetur
         adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, 
         adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
    </div>
  </div>
  </section>

<section id="ending" class="ending">
  <div>
    <h2 style=" font-weight: 900; font-size:50px;">A GOAL WITHOUT<br><u> A PLAN</u><br> IS JUST A WISH</h2>
    <div class="bg-image" id="btnup">
 <a href="contact.php" class="btn" style="font-family: Red Hat Display, sans-serif;">Let's Get Started</a>
 </div>
 
  </div>  
</section>

<!-- <script>
    function changeImage(imageUrl) {
      document.getElementById('myimage').src = imageUrl;
    }
  </script> -->
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