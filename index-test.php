<!-- db query stuff -->

<?php

include "includes/lang-top.php";
//references the connection file
require_once "includes/dbh.inc.php";
include "includes/db_nav.php";

// content - change this specific to each page
$query_art_project = "SELECT content.id,content.title_en,content.title_lv,content.project_file_name,images.img_id,images.file_name,images.project_id,images.date,images.location from content, images where content.id = 6 and images.img_id = 42;";
$stmt = $pdo->prepare(query:$query_art_project);
$stmt->execute();
$art_project = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query_documentary_project = "SELECT content.id,content.title_en,content.title_lv,content.project_file_name,images.img_id,images.file_name,images.project_id,images.date,images.location from content, images where content.id = 8 and images.img_id = 5;";
$stmt = $pdo->prepare(query:$query_documentary_project);
$stmt->execute();
$documentary_project = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <title>4e554c4c</title>

    <link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="../main.js"> </script>
</head>

<body class="p-2 bg-black">

    <!-- we get the nav bar here -->
    
    <?php include 'includes/nav.php'; ?>

    <!--  main body of the page begins -->

    <div class="container-fluid">
        <div>
            <!-- <div class="border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        test
                    </h6>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                    test
                        </p>
                </div>
            </div> -->
            <?php

foreach ($art_project as $row) {

echo '<h6 class="text-center text-uppercase text-primary"><br>';
    echo $row["title_$language"];
echo '<br></h6><div id="" class="h-100"><a href="/';
    echo $row["project_file_name"];
echo '"> <img src="../images/';
    echo $row["file_name"];
echo '" class="border-bottom border-end border-50 img-fluid" style="" alt="..."></a><figcaption class="figure-caption"> ';
echo '<br>';
    echo $row["date"];
echo '<br>';
    echo $row["location"];
echo '</figcaption></div>';

}


foreach ($documentary_project as $row) {

    echo '<h6 class="text-center text-uppercase text-primary"><br>';
    echo $row["title_$language"];
echo '<br></h6><div id="" class="h-100"><a href="/';
    echo $row["project_file_name"];
echo '"> <img src="../images/';
    echo $row["file_name"];
echo '" class="border-bottom border-end border-3 img-fluid" style="" alt="..."></a><figcaption class="figure-caption"> ';
echo '<br>';
    echo $row["date"];
echo '<br>';
    echo $row["location"];
echo '</figcaption></div>';

    }

 ?>
          
        </div>

<!-- language junk -->

<?php include "includes/lang-script.php"; ?>

</body>
</html>