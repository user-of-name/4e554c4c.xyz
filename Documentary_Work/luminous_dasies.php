<!-- db query stuff -->

<?php

$language = 'en';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

//references the connection file
require_once "../includes/dbh.inc.php";
// To Get the Current Filename. 
$currentPage= $_SERVER['SCRIPT_NAME'];
//groups
$query_groups = "SELECT * FROM project_groups";
$stmt = $pdo->prepare(query:$query_groups);
$stmt->execute();
$project_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);
//art project titles
$query_menu_art_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 2;";
$stmt = $pdo->prepare(query:$query_menu_art_projects);
$stmt->execute();
$menu_art_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
//documentary titles
$query_menu_documentary_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 3;";
$stmt = $pdo->prepare(query:$query_menu_documentary_projects);
$stmt->execute();
$menu_documentary_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
// content
$query_content = "SELECT * FROM content WHERE id = 8;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4e554c4c</title>

    <<link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="../main.js"> </script>
</head>

<body class="p-2 bg-black">
    
<?php include '../nav.php'; ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-m-12 m-2 m-md-4">
            </div>

            <div class="col-md-3 d-flex flex-column border-top border-end border-bottom" style="height: 90vh;">
               <div class="container-fluid flex-grow-1 p-0">
                    <h6 class="text-center text-uppercase text-primary">*** INDEX_COPY ***</h6>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                      I documented stuff in helsinki
                    </p>
                </div>
                <div class="container-fluid ps-0 pb-3 ">
                  <a href="#">> link to contributor</a>
                </div>
            </div>

            <div class="col-md-9 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <div class="row"> 
                    <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;"><iframe src="https://player.vimeo.com/video/952301381?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Luminous Daisies"></iframe>
                    </div>
                    <figcaption class="figure-caption"> luminous_dasies.mp4 <br> Fujifilm GFX100 II, 3:4 <br> 5-5-2024</figcaption>
                    <script src="https://player.vimeo.com/api/player.js"></script>   

                    <div class="h-100">
                        <img src="../images/adriana_towers_a2.jpg" class="border-bottom border-end border-3 img-fluid" style="" alt="...">
                        <figcaption class="figure-caption"> test to see if format works <br> FUJIFILM GFX100 II <br> 5-5-2021</figcaption>
                    </div>
                    <div class="h-100">
                        <img src="../images/sten_and_crowd.jpg" class="w-100 border-bottom border-end" alt="...">
                        <figcaption class="figure-caption">this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div>
                    <div class="m-5">

                    </div>
                    <div class="">
                        <img src="../images/Cave.jpg" class="w-100 border-bottom border-end" alt="...">
                        <figcaption class="figure-caption">this is an image caption <br> Fujifilm GFX100 II <br> 05.05.2021</figcaption>
                    </div>
                </div>
            </div>            
        </div>
    </div>

</body>
</html>