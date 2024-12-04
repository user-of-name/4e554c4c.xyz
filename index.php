<?php

$language = 'en';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

//references the connection file
require_once "includes/dbh.inc.php";
//defines the querry to then get the stuff
$query = "SELECT * FROM content WHERE page = 'index';";
// prepare statement
$stmt = $pdo->prepare(query:$query);
//it executes a thing?
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4e554c4c</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsivity.css">
</head>

<body class="p-2 bg-black">
    
    <nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">
            <li class="nav-link flex-fill border-0 active" aria-current="page" href="#">
                4e554c4c.xyz/art_projects/jiny_svety
            </li>
            <select class="nav-link flex-fill border-0 active" id="langSwitcher">
                <option class="nav-link border-0 p-0" value="en">EN</option>
                <option class="nav-link border-0 p-0" value="lv">LV</option>
            </select>
            <!-- <li>
                <a class="nav-link border-0 p-0" aria-current="page" value="en"> EN /</a>
            </li>
            <li>
                <a class="nav-link border-0 active" value="lv"> LV </a>
            </li> -->
        </ul>
        <ul class="nav nav-tabs nav-fill nav-fill collapse navbar-collapse" id="navbarNav"">
            <li class="nav-item text-start">
              <a class="nav-link active" aria-current="page" href="#">[ index ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ art projects ]</a>
              </li>
            <li class="nav-item text-start">
              <a class="nav-link" href="#">[ documentary work ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ contact ]</a>
            </li>
        </ul>
        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
            <li class="nav-item text-start">
              <a class="nav-link" aria-current="page" href="#">[ captive audience ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link active" href="#">[ jiny svety improv jam ]</a>
              </li>
            <li class="nav-item text-start">
              <a class="nav-link" href="#">[ rats on the run ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ uff servers ]</a>
            </li>
        </ul>   
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<div>";
                        foreach ($results as $row){
                                echo $row["title_$language"];
                        }
                        echo "</div>";
                        ?>
                    </h6>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                    <?php
                        //echo "<div>;"
                        foreach ($results as $row){
                                echo $row["descr_$language"];
                        }
                        //echo "</div>";
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