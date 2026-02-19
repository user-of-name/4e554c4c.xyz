
<?php
$project_id = 8;
//language stuff
include "includes/lang-top.php";
//references the connection file
require_once "includes/dbh.inc.php";
//navigation database
include "includes/db_nav.php";
// CV_Categories
$query_content = "SELECT * FROM CV_Categories;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);
// cv_entries
$query_content = "SELECT *, YEAR(date_finished) as end,YEAR(date_started) as start FROM CV_Entries WHERE Displayed = 1 ORDER BY date_finished DESC;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- html begins -->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV">
    <title>
    CV
    </title>
    <link rel="icon" type="image/png" href="../assets/favicon32.png">
    <link rel="stylesheet" href="assets/css/style.css">

<!-- <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="main.js"> </script>
</script>
</head>
<body class="bg-black">  
<?php include 'includes/nav.php'; ?>
    <!--  main body of the page begins -->
<div class="container-fluid">
    
<div class="text-center text-uppercase text-primary">
<a class="title">CV</a>
<br><br>
</div>
<!-- cv database -->
<?php
foreach ($category as $cat) {
    echo '<div class="text-center text-uppercase text-primary">
    <a class="title">' . $cat["category_$language"] . '</a>
    <br><br>
    </div>';
    if ($cat["id"] % 2 != 0) {
        foreach ($entries as $entry) {
        if ($entry["category_id"] == $cat["id"]) {
            echo '<div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    ' . $entry["title_$language"] . '
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         ' . $entry["end"] . '
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    ' . $entry["location_$language"] . '';
                    if ($entry["description_$language"] != NULL){
                        echo ' - '. $entry["description_$language"] . '';
                        }
                        echo '
                    </div>
                </div>
            </div>';
        }
    }
    echo "<br><br>";
    } else {
        foreach ($entries as $entry) {
        if ($entry["category_id"] == $cat["id"]) {
            echo '<div class="row cv-list overflow-visible">
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary text-end">
                    ' . $entry["title_$language"] . '
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         ' . $entry["start"] . ' -
                          ' . $entry["end"] . '
                    </div>
                </div>
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    ' . $entry["location_$language"] . '';
                    if ($entry["description_$language"] != NULL){
                        echo ' - '. $entry["description_$language"] . '';
                        }
                        echo '
                    </div>
                </div>
            </div>';
        }
    }
    echo "<br><br>";
    };
    

}
?>
<!-- language junk -->
<?php include "includes/lang-script.php"; ?>
</body>
</html>