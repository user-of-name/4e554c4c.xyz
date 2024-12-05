<!-- db query stuff -->

<?php

$language = 'en';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

//references the connection file
require_once "../includes/dbh.inc.php";
//defines the querry to then get the stuff
$query_content = "SELECT * FROM content WHERE id = 4;";
$query_groups = "SELECT * FROM project_groups";
$query_menu_art_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 2;";
$query_menu_documentary_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 3;";
// content
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);
//groups
$stmt = $pdo->prepare(query:$query_groups);
$stmt->execute();
$project_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);
//art project titles
$stmt = $pdo->prepare(query:$query_menu_art_projects);
$stmt->execute();
$menu_art_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

//documentary titles
$stmt = $pdo->prepare(query:$query_menu_documentary_projects);
$stmt->execute();
$menu_documentary_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4e554c4c</title>

    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../responsivity.css">
</head>

<body class="p-2 bg-black">
    
<!-- menu navigation bar -->


    <nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">

        <!-- top menu thing idk -->

            <li class="nav-link flex-fill border-0 active" aria-current="page" href="#">
                4e554c4c.xyz/index.php
                <!-- <?php echo $project_groups['group_file_name']; ?> -->
            </li>

            <!-- language switch -->
            <select class="nav-link flex-fill border-0 active" id="langSwitcher">
                <option class="nav-link border-0 p-0" value="en">EN</option>
                <option class="nav-link border-0 p-0" value="lv">LV</option>
            </select>
            <!-- <li id="langSwitcher">
                <a class="nav-link border-0 p-0" aria-current="page" value="en" href="lang=en"> EN /</a>
            </li>
            <li id="langSwitcher">
                <a class="nav-link border-0 active" value="lv" href="lang=lv"> LV </a>
            </li> -->
        </ul>

        <!-- project groups -->

        <ul class="nav nav-tabs nav-fill nav-fill collapse navbar-collapse" id="navbarNav">
            <?php
              foreach ($project_groups as $row){
                        echo '<li class="nav-item text-start">';
                    echo '<a class="nav-link active" aria-current="page" href="../';
                    echo $row["group_file_name"];
                    echo '">[  ';
                        echo $row["group_name_$language"];
                    echo "  ]</a>";
                        echo '</li>';
                        }
            ?>
        </ul>

        <!-- art projects -->

        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
            <?php
              foreach ($menu_art_projects as $row){
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link active" aria-current="page" href="../';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul>

        <!-- documentary projects -->
         
        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
        <?php
              foreach ($menu_documentary_projects as $row){
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link active" aria-current="page" href="../';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul> 
    </nav>

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