<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <link rel="stylesheet" href="../dist/css/project.css">
</head>

<style>
    body {
        padding: 50px;
    }

    .modalsss {
        display: none;
        margin: 0 auto;
        height: 590px;
        width: 700px;
        background-color: #f1f1f1;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
    }


    .modalsss .modal-header {
        padding: 10px;
        text-align: center;
        border-bottom: 5px solid rgba(0, 0, 0, .125);
        background-color: #0FCC7C;
        width: 100%;
    }

    .modalsss .modal-body img {
        width: 100%;
        height: 250px;
        border-radius: 5px;
    }
</style>

<body>

    <button class="btn btn-primary" onclick="modalshow()">Click me to show Modal</button>
    <div class="modalsss" tabindex="-1" data-bs-backdrop="static" id="myModal">
        <div class="modal-header">
            <h2 class="text-light">ID: </h2>
            <h2 class="text-light">Keyword</h2>
            <button class="btn btn-secondary btn-xs px-2" onclick="modalexit()"><i class="fas fa-times text-light"></i></button>
        </div>
        <div class="modal-body">
            <h2 class="text-dark text-center mb-3">Full Project Title: </h2>
            <img src="../dist/img/ge.png" alt="" />
            <p class="text-dark"><strong>Description: </strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolor dicta, praesentium voluptas quaerat voluptatem vel fugi.</p>
            <br>
            <p class="text-dark">Project Details</p>
            <ul class="text-dark">
                <li>Timeline: </li>
                <li>Objectives:</li>
                <li>Technologies:</li>
            </ul>

            <button class="btn btn-success btn-sm" ><a href="contact.php">Contact Us</a></button>
        </div>
    </div>
</body>
<script>

    function modalshow() {
        let modal = document.getElementById("myModal");
        modal.style.display = "block";
    }
    function modalexit(){
        let modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    
</script>

</html>