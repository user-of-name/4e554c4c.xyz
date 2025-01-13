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

//collaborators
$query_project_collaborators = "SELECT roles.role_en,roles.role_lv,collaborators.artist_name,collaborators.link FROM collaborators LEFT JOIN roles ON roles.collaborator = collaborators.collaborator_id WHERE roles.project = 8;";
$stmt = $pdo->prepare(query:$query_project_collaborators);
$stmt->execute();
$project_collaborators = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <div class="col-md-4 d-flex flex-column border-top border-end border-bottom" style="height: 90vh;">
               <div class="container-fluid flex-grow-1 p-0">
                    <div class="text-center text-uppercase text-primary">
                        <?php
                        echo "<h6>";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "</h6>";
                        ?>
                        </div>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                    <?php
                        foreach ($content as $row){
                                echo $row["descr_$language"];
                        }
                        ?>
                    </p>
                </div>
                <?php include "../includes/contributors_link.php"; ?>
            </div>

            <div class="col-md-8 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <div class="row"> 
                    <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;"><iframe src="https://player.vimeo.com/video/952301381?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Luminous Daisies"></iframe>
                    </div>
                    <figcaption class="figure-caption"> luminous_dasies.mp4 <br> Canon C300 Mkii, 3:4 <br>2024-05-19</figcaption>
                    <script src="https://player.vimeo.com/api/player.js"></script>   
<!-- images start here -->

<?php include "../includes/get_project_images.php";?>

                    <div class="m-5">

                    </div>

                </div>
            </div>            
        </div>
    </div>
<!-- Modal -->
<?php include "../includes/image_carousel_modal.php"; ?>
    <!-- language junk -->
    <?php include "../includes/lang-script.php"; ?>
</body>
</html>