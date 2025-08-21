<!-- db query stuff -->

<?php

include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
include "../includes/db_nav.php";

// content
$query_content = "SELECT * FROM image_making WHERE image_making_group_id = 2;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// content
$query_image_making_doc = "SELECT *
FROM image_making_projects
JOIN img_making_images ON image_making_projects.img_making_project_id = img_making_images.img_making_project_id
 WHERE img_making_group = 2 AND Displayed = 1 AND Display_order = 1 ORDER BY date DESC;";
$stmt = $pdo->prepare(query:$query_image_making_doc);
$stmt->execute();
$image_making_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $content["0"]["title_$language"]; ?></title>

    <link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script defer src="../main.js"> </script>
<script defer src="../image_making_main.js"> </script> -->
<script type = "text/javascript" src="image_making_main.js"></script>
</head>
<body class="bg-black">
    
<?php include '../includes/nav.php'; ?>

<div class="container-fluid">
        <div class="row">
            <!-- <div class="col-m-12 m-2 m-md-4">
            </div> -->
            <div class="fixed-bottom start-0 w-100 p0 bg-black border-top border-primary z-1" style="height:25px"></div>
            <div class="col-lg-6 col-md-6 mobile-d overflow-y-auto overflow-x-none m-0" style="max-height: 92vh;">
            <div class="container-fluid flex-grow-1 p-0">
                   <div class="text-center text-uppercase text-primary">
                        <a class="title" onclick="text_toggle()">
                        <?php echo $content["0"]["title_$language"]; ?>
                        </a>
                    </div>
                    <div id="mobile-d-content" class="container-fluid">
                    <p class="text-primary" id="mobileD">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                </div>
            </div>
            </div>

            <div class="col-lg-6 col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 92vh;">
                    <div class="m-5">
                         <?php
                    foreach ($image_making_projects as $row){
                        echo '<a href="/',
                        $row["href"],
                        '?lang=',
                        $language,
                        '"><h6 class="text-center text-uppercase text-primary">',
                        $row["title_$language"],
                        '</h6>',
                        '<img src="../images/',
                        $row["file_name"],
                        '" class="img_styles img-fluid w-100" style="" alt="...">',
                        '<div class="text-center text-lowercase text-primary">',
                        $row["year"],
                        ' ; ',
                        $row["location_$language"],
                        '</div></a><br><br>';
                        }
                        ?>
                    </div>
                </div>
            </div>            
        </div>

    <!-- language junk -->

    <?php include "../includes/lang-script.php"; ?>
</body>
</html>