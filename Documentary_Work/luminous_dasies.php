<!-- db query stuff -->

<?php

include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
include "../includes/db_nav.php";

// content
$query_content = "SELECT * FROM content WHERE id = 8;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// images
$query_project_images = "SELECT * FROM images WHERE project_id = 8 ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);


$pdo = null;
$stmt = null;
?>

<!DOCTYPE html>
<html lang="en">

<?php include "../includes/proj_head.php"; ?>

<body class="p-2 bg-black">
    
<?php include '../includes/nav.php'; ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-m-12 m-2 m-md-4">
            </div>

            <div class="col-md-3 d-flex flex-column border-top border-end border-bottom" style="height: 90vh;">
               <div class="container-fluid flex-grow-1 p-0">
                    <h6 class="text-center text-uppercase text-primary"><?php
                        echo "<div>";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "</div>";
                        ?></h6>
                    <div class="container-fluid"></div>
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
                <div class="container-fluid ps-0 pb-3 ">
                  <a href="#">> link to contributor</a>
                </div>
            </div>

            <div class="col-md-9 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <div class="row"> 
                    <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;"><iframe src="https://player.vimeo.com/video/952301381?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Luminous Daisies"></iframe>
                    </div>
                    <figcaption class="figure-caption"> luminous_dasies.mp4 <br> Fujifilm GFX100 II, 3:4 <br> 5-5-2024</figcaption>
                    <script src="https://player.vimeo.com/api/player.js"></script>   
<!-- images start here -->
                    <!-- <div class="h-100">
                        <img src="../images/adriana_towers_a2.jpg" class="border-bottom border-end border-3 img-fluid" style="" alt="...">
                        <figcaption class="figure-caption"> test to see if format works <br> FUJIFILM GFX100 II <br> 5-5-2021</figcaption>
                    </div>
                    <div class="h-100">
                        <img src="../images/sten_and_crowd.jpg" class="w-100 border-bottom border-end" alt="...">
                        <figcaption class="figure-caption">this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div> -->

                    <?php

foreach ($project_images as $row) {

echo '<div id="" class="h-100"> <img src="/images/';

    echo $row["file_name"];

echo '" class="border-bottom border-end border-3 img-fluid" style="" alt="..."><figcaption class="figure-caption"> ';

    echo $row["image_title_$language"];

echo '<br>';

    echo $row["date"];

echo '<br>';

    echo $row["location"];

echo '</figcaption></div>';

}

 ?>

                    <div class="m-5">

                    </div>

                </div>
            </div>            
        </div>
    </div>

    <!-- language junk -->

    <?php include "../includes/lang-script.php"; ?>
</body>
</html>