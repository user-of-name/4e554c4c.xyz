<!-- db query stuff -->

<?php

include "includes/lang-top.php";
//references the connection file
require_once "includes/dbh.inc.php";
include "includes/db_nav.php";

// content - change this specific to each page
$query_content = "SELECT * FROM content WHERE group_id = 1;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);


$pdo = null;
$stmt = null;
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">

<?php include "includes/proj_head.php"; ?>

<body class="p-2 bg-black">

    <!-- we get the nav bar here -->
    
    <?php include 'includes/nav.php'; ?>

    <!--  main body of the page begins -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<div>";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "</div>";
                        ?>
                    </h6>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                    <?php
                        foreach ($content as $row){
                                echo $row["descr_$language"];
                        }
                        ?>
                        </p>
                </div>
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <div class="row">                
                    <div id="img1" class="h-100">
                        <img src="images/test_img_2.jpg" class="border-bottom border-end border-3 img-fluid" style="max-height:80vh;" alt="...">
                        <figcaption class="figure-caption"> this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div>
                    <div id="img2" class="h-100" id=>
                        <img src="images/test_img_2.jpg" class="border-bottom border-end img-fluid" alt="...">
                        <figcaption class="figure-caption">this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div>
                    <div id="img2" class="" id=>
                        <img src="images/Cave.jpg" class="w-100 border-bottom border-end" alt="...">
                        <figcaption class="figure-caption">this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div>
                </div>
        </div>
            </div>
        </div>

<!-- language junk -->

<?php include "includes/lang-script.php"; ?>

</body>
</html>