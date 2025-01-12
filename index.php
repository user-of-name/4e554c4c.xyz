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

$query_projects = "SELECT content.id,content.title_en,content.title_lv,content.project_file_name,images.img_id,images.file_name,images.project_id,images.date,images.location from content, images where content.id = 6 and images.img_id = 42 or content.id = 8 and images.img_id = 5 or content.id = 5 and images.img_id = 26 or content.id = 9 and images.img_id = 69;";
$stmt = $pdo->prepare(query:$query_projects);
$stmt->execute();
$art_project1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <script defer src="/main.js"> </script>
    <script defer src="/nav.js"> </script>
</head>
</head>

<body class="p-2 bg-black">

    <!-- we get the nav bar here -->
    
    <?php include 'includes/nav.php'; ?>

    <!--  main body of the page begins -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<div>***";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "***</div>";
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

            <div class="col-md-9 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <!-- <div class="row">                 -->
                <?php

foreach ($art_project1 as $row) {
echo'<div class="row" id="img',
    $row["id"],
    '"><h6 class="text-center text-uppercase text-primary"><br>',
$row["title_$language"],
'<br></h6><div id="" class="h-100"><a href="/',
$row["project_file_name"],
'"> <img src="../images-small/',
$row["file_name"],
'" class="border-bottom border-end border-3 img-fluid" style="" alt="..."></a><figcaption class="figure-caption"> ',
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