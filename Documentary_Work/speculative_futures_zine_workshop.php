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
$query_content = "SELECT * FROM content WHERE id = 9;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);


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

    <<link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="../main.js"> </script>
</head>

<body class="p-2 bg-black">
    
<?php include '../nav.php'; ?>

    <!--  main body of the page begins -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<div>";
                        foreach ($content as $row){
                                echo $row["title_$language"];
                        }
                        echo "</div>";
                        ?>
                    </h6>
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
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">                
                    <div class="" id=>
                        <img src="../assets/Cave.jpg" class="w-100 border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
                </div>
            </div>            
        </div>
            </div>
        </div>
    </div>

<!-- language junk -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#langSwitcher").val('<?php echo $_GET['lang'] ?>');
        $("#langSwitcher").on('change', function () {
            window.location = '<?php echo $_SERVER['PHP_SELF'] ?>?lang=' + $(this).val();
         });
    });
</script>
</body>
</html>