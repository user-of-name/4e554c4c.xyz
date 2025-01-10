<!-- db query stuff -->

<?php

include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
include "../includes/db_nav.php";

// content
$query_content = "SELECT * FROM content WHERE id = 8 or id = 9;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// content
$query_image_making_doc = "SELECT * FROM image_making WHERE image_making_group_id = 1;";
$stmt = $pdo->prepare(query:$query_image_making_doc);
$stmt->execute();
$image_making_doc = $stmt->fetchAll(PDO::FETCH_ASSOC);

// images
$query_project_images = "SELECT * FROM images WHERE project_id = 8 or project_id = 9 ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);


$pdo = null;
$stmt = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
    foreach ($image_making_doc as $row){
        echo $row["title_$language"];
        }
    ?>
    </title>

    <link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script defer src="../main.js"> </script>
<script defer src="../image_making_main.js"> </script> -->
<script type = "text/javascript" src="image_making_main.js"></script>
</head>
<body class="p-2 bg-black">
    
<?php include '../includes/nav.php'; ?>

<div class="container-fluid">
        <div class="row">
            <!-- <div class="col-m-12 m-2 m-md-4">
            </div> -->

            <div class="col-md-3 d-flex flex-column border-top border-end border-bottom" style="height: 90vh;">
               <div class="container-fluid flex-grow-1 p-0">
                        <?php
                    foreach ($content as $row){
                        echo '<h6 class="text-center text-uppercase text-primary" type="button" onclick="contentToggler(',
                        $row['id'],
                        ')">',
                        $row["title_$language"],
                        '</h6><div class="container-fluid"></div><p class="text-primary" id="descr',
                        $row['id'],
                        '">',
                        $row["descr_$language"],
                        '</p>';
                        }
                        ?>
                </div>
                <div class="container-fluid ps-0 pb-3 ">
                  <a href="https://stenheijster.net/Luminous_Daisies.html">> link to contributor</a>
                </div>
            </div>

            <div class="col-md-9 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                
                     
<!-- images start here -->

                    <?php
foreach ($content as $content_row){
echo '<div class="row" id="img',
    $content_row["id"],
    '"><div class="border-bottom border-end border-3">';
foreach ($project_images as $row) {
if ($row["project_id"] == $content_row["id"]){
echo '<div id="" class="h-100"><img src="/images/',
    $row["file_name"],
    '" class="border-bottom border-end border-3 img-fluid" style="" alt="..."><figcaption class="figure-caption"> ',
    $row["image_title_$language"],
    '<br>',
    $row["date"],
    '<br>',
    $row["location"],
    '</figcaption></div>';
};
};
echo '</div></div>',
     '<script>',
     'contentHide(',
     $content_row["id"],
     ');',
     '</script>';
};

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