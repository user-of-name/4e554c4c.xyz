<!-- db query stuff -->

<?php

include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
include "../includes/db_nav.php";

// content
$query_content = "SELECT * FROM content WHERE id = 5;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// images
$query_project_images = "SELECT * FROM images WHERE project_id = 5 ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">

<?php include "../includes/proj_head.php"; ?>

<body class="p-2 bg-black">
    
<?php include '../includes/nav.php'; ?>

    <!--  main body of the page begins -->
    <div class="container-fluid">
        <div class="row">
            <!-- shuffled classes around so they properly show mobile version -->
            <div class="col-lg-3 col-md-6 mobile-d border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
                 <div id="mobileD" onclick="myFunction()" class="container-fluid">
                   <div class="text-center text-uppercase text-primary">
                        <?php
                        echo "<h6>";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "</h6>";
                        ?>
                    </div>
                    <div class="mobile-d-content" class="container-fluid"></div>
                    <p class="text-primary">
                    <?php
                        // echo "<div>";
                        foreach ($content as $row){
                                echo $row["descr_$language"];
                        }
                        // echo "</div>";
                        ?>
                        </p>
                </div>
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">  
                    <!-- added bootstrap attributes to trigger modal -->
                    <!-- data-bs-slide-to="0" handles on which slide carousel opens, currently not working as it needs to be attached to specific trigger -->             
                <?php 

foreach ($project_images as $row) {

    echo '<div id="" class="h-100"> <img src="../images/',
    $row["file_name"],
    '" class="img_styles img-fluid" style="" alt="Thumbnail 1" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="0" alt="..."><figcaption class="figure-caption"> ',
    $row["image_title_$language"],
    '<br>',
    $row["date"],
    '<br>',
    $row["location"],
    '</figcaption></div>';

}

 ?>
                </div>
            </div>            
        </div>
            </div>
        </div>
    </div>

<!-- language junk -->


<!-- modal trial -->
<!-- Modal -->
<div class="modal" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-fullscreen p-md-5">
<div class="modal-content modal-carousel">
<div class="modal-body">
  <!-- Carousel -->
    <!-- Could database handle fetching right image?? 
        also, would it make sense to have modal in a separate file like nav bar?
    -->
  <div id="imageCarousel" class="carousel slide" data-bs-ride="false" data-bs-touch="true">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/Jiny-Svety-6627.jpg" class="d-block img-fluid" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="/images/adriana_towers.jpg" class="d-block img-fluid" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="/images/At the projector copy.jpg" class="d-block img-fluid" alt="Image 3">
      </div>
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
    </button>
  </div>
</div>

<div class="modal-footer d-flex justify-content-between">
    <div class="d-flex justify-content-start">
    <button class="carousel-control-prev control-arrows" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
    [ <-- ]
    </button>
    <button class="carousel-control-next control-arrows" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
    [ --> ]
    </button>
    </div>
      <a type="button" class="close-btn" data-bs-dismiss="modal">[ close ]</a>
    </div>
</div>
</div>
</div>

<?php include "../includes/lang-script.php"; ?>

</body>
</html>