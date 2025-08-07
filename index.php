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

$query_projects = "SELECT content.id,content.title_en,content.title_lv,content.project_file_name,content.year,project_images.img_id,project_images.file_name,project_images.project_id,project_images.date,project_images.location from content, project_images where content.id = 6 and project_images.img_id = 42 or content.id = 8 and project_images.img_id = 5 or content.id = 5 and project_images.img_id = 26 or content.id = 9 and project_images.img_id = 69 or content.id = 13 AND project_images.img_id = 135 or content.id = 12 AND project_images.img_id = 97 or content.id = 11 AND project_images.img_id = 99 or content.id = 15 AND project_images.img_id = 141 ORDER BY project_images.date DESC;";
$stmt = $pdo->prepare(query:$query_projects);
$stmt->execute();
$art_project = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">

<?php include "includes/proj_head.php"; ?>

<body class="bg-black">
    
<?php include 'includes/nav.php'; ?>

    <!--  main body of the page begins -->
    <div class="container-fluid">
        <div class="row">
            <!-- shuffled classes around so they properly show mobile version -->
            <div class="fixed-bottom start-0 w-100 p0 bg-black border-top border-primary z-1" style="height:25px"></div>
            <div class="col-lg-3 col-md-6 mobile-d overflow-y-auto overflow-x-none" style="max-height: 92vh;">
                 <div id="mobileD" class="container-fluid flex-grow-1 p-0">
                   <div class="text-center text-uppercase text-primary">
                        <a class="title" onclick="text_toggle()">
                       <?php echo $content["0"]["title_$language"]; ?>
                        </a>
                    </div>
                    <div id="mobile-d-content">
                    <p class="text-primary">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                </div>
            </div>
                
            </div>

            <div class="col-lg-9 col-md-6 mobile-d-content order-first order-md-last overflow-y-auto overflow-x-none" style="max-height: 92vh;">
                <div class="row d-flex p-2">  
                    <!-- added bootstrap attributes to trigger modal -->
                    <!-- data-bs-slide-to="0" handles on which slide carousel opens, currently not working as it needs to be attached to specific trigger -->             
                    <?php
                $thumbnail_nr = 0;
                foreach ($art_project as $row) {
                echo'<div class="text-center text-uppercase text-primary"><br>',
                $row["title_$language"],
                '<br></div><div id="" class="h-100"><a href="/',
                $row["project_file_name"],
                '"><img src="images/',
                $row["file_name"],
                '" class="img_styles img-fluid w-100" style="" alt="..."></a><figcaption class="figure-caption"> ',
                '<br>',
                $row["date"],
                '<br>',
                $row["location"],
                '</figcaption></div>';

                // echo '<div id="" class="h-100"><a href="/',
                // $row["project_file_name"],
                // '"><img src="/images/',
                // $row["file_name"],
                // '" class="img_styles img-fluid w-100" style="" alt="Thumbnail ',
                // $thumbnail_nr,
                // '" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="',
                // $thumbnail_nr,
                // '" alt="..."><figcaption class="figure-caption"> ',
                // $row["title_$language"],
                // '<br>',
                // $row["date"],
                // '<br>',
                // $row["location"],
                // '</figcaption></div>';
                // $thumbnail_nr++;
            }

                
                 ?>
                </div>
            </div>            
        </div>
            </div>
<!-- modal trial -->
<!-- Modal -->
<?php include "includes/image_carousel_modal.php"; ?>
<!-- language junk -->
<?php include "includes/lang-script.php"; ?>
</body>
</html>