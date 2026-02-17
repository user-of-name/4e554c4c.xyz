
<?php
$project_id = 8;
//language stuff
include "includes/lang-top.php";
//references the connection file
require_once "includes/dbh.inc.php";
//navigation database
include "includes/db_nav.php";
//project id and content
?>
<!-- html begins -->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Freelance">
    <title>
    Freelance
    </title>
    <link rel="icon" type="image/png" href="../assets/favicon32.png">
    <link rel="stylesheet" href="assets/css/style.css">

<!-- <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="main.js"> </script>
</script>
</head>
<body class="bg-black">  
<?php include 'includes/nav.php'; ?>
    <!--  main body of the page begins -->
<div class="container-fluid">
    
<div class="text-center text-uppercase text-primary">
<a class="title">Freelance</a>
<br><br>
</div>
<div class="row">
                <div class="col-md-4 overflow-y-auto overflow-x-none m-0">
                    <div class="text-primary text-center text-uppercase">
                    <a class="title">Event Documentation</a>
                    </div>
                    <div class="text-primary">
                    Event photography and videography - images and vertical videos for social media etc
                    <br><br>
                    Discussion recording - long format video for youtube etc
                    <br><br>
                    Based in Riga, open for inquiries in Europe.
                    </div>
                </div>
                <div class="col-md-4 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;">
                        <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/bLf15ZtlvPc" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; autoplay;picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <figcaption class="figure-caption">Vai drošāk ir neuzrakstīt.mp4<br>01-02-2026</figcaption>
                    </div>
                </div>
                <div class="col-md-4 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;">
                        <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/0q7IsvgvMI0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; autoplay;picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <figcaption class="figure-caption">Fernando Pessoa afternoon.mp4<br>28-09-2025</figcaption>
                    </div>
                </div>
            </div>
<!-- Modal -->
<?php include "includes/image_carousel_modal.php"; ?>
<!-- language junk -->
<?php include "includes/lang-script.php"; ?>
</body>
</html>