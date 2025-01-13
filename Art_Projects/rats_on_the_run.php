<!-- db query stuff -->

<?php

include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
include "../includes/db_nav.php";

// content
$query_content = "SELECT * FROM content WHERE id = 6;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// images
$query_project_images = "SELECT * FROM images WHERE project_id = 6 ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);

//collaborators
$query_project_collaborators = "SELECT roles.role_en,roles.role_lv,collaborators.artist_name,collaborators.link FROM collaborators LEFT JOIN roles ON roles.collaborator = collaborators.collaborator_id WHERE roles.project = 6;";
$stmt = $pdo->prepare(query:$query_project_collaborators);
$stmt->execute();
$project_collaborators = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
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
                        // echo "<div>";
                        foreach ($content as $row){
                                echo $row["descr_$language"];
                        }
                        // echo "</div>";
                        ?>
                        </p>
                </div>
                <?php include "../includes/contributors_link.php"; ?>
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">                
                <?php include "../includes/get_project_images.php";?>
                </div>
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