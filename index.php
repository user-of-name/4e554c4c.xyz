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

$query_projects = "SELECT content.id,content.title_en,content.title_lv,content.project_file_name,project_images.img_id,project_images.file_name,project_images.project_id,project_images.date,project_images.location from content, project_images where content.id = 6 and project_images.img_id = 42 or content.id = 8 and project_images.img_id = 5 or content.id = 5 and project_images.img_id = 26 or content.id = 9 and project_images.img_id = 69;";
$stmt = $pdo->prepare(query:$query_projects);
$stmt->execute();
$art_project = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!-- html begins -->
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
    foreach ($content as $row){
        echo $row["title_$language"];
        }
    ?>
    </title>

    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script defer src="/main.js"></script>
    <script defer src="/nav.js"></script>
</head>
</head>

<body class="p-2 bg-black mq-value">

    <!-- we get the nav bar here -->
    
    <?php include 'includes/nav.php'; ?>

    <!--  main body of the page begins -->

    <div class="container-fluid">
        <div class="row">
             <!-- shuffled classes and added custom mobile classes around so they properly show mobile version -->
            <div class="col-lg-4 col-md-6 mobile-d overflow-y-auto" style="max-height: 90vh;">
               <div id="mobileD" class="container-fluid">
                   <div class="text-center text-uppercase text-primary">
                            <h6 onclick="text_toggle()">
                            <?php echo $content["0"]["title_$language"]; ?>
                            </h6>
                        </a>
                    </div>

                    <div id="mobile-d-content">
                        <p class="text-primary">
                        <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 mobile-d-content order-first order-md-last overflow-y-auto p-2" style="max-height: 90vh;">
                <!-- <div class="row">                 -->
                <?php
                
                foreach ($art_project as $row) {
                echo'<div class="row" id="img"',
                    $row["id"],
                    '"><div class="text-center text-uppercase text-primary"><br>',
                $row["title_$language"],
                '<br></div><div id="" class="h-100"><a href="/',
                $row["project_file_name"],
                '"> <img src="images/',
                $row["file_name"],
                '" class="img_styles img-fluid w-100" style="" alt="..."></a><figcaption class="figure-caption"> ',
                '<br>',
                $row["date"],
                '<br>',
                $row["location"],
                '</figcaption></div></div>';
                }

 ?>
                <!-- </div> -->
        </div>
            </div>
        </div>

<!-- language junk -->

<?php include "includes/lang-script.php"; ?>


</body>
</html>

