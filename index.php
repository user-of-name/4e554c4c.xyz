<!-- db query stuff -->

<?php

$language = 'en';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

//references the connection file
require_once "includes/dbh.inc.php";
//defines the querry to then get the stuff
$query_content = "SELECT * FROM content WHERE group_id = 1;";
// content
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

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsivity.css">
</head>

<body class="p-2 bg-black">
    
    <div id="nav-placeholder">

    </div>

    <script>
    $(function(){
     $("#nav-placeholder").load("nav.php");
    });
    </script>

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
                    <div class="">
                        <img src="../assets/Flyer.jpeg" class="border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
                    <div class="" id=>
                        <img src="../assets/Jiny-svety.jpeg" class="w-100 border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
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