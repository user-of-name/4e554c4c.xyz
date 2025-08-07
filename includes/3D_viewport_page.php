<!-- db query stuff -->

<?php

include "../../includes/lang-top.php";
//references the connection file
require_once "../../includes/dbh.inc.php";
include "../../includes/db_nav.php";

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
    <?php echo $title; ?>
    </title>
    <link rel="icon" type="image/png" href="../../assets/favicon32.png">
    <link rel="stylesheet" href="../../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="../../main.js"> </script>
<!-- <script defer src="../image_making_main.js"> </script> -->
<script async src="https://unpkg.com/es-module-shims@1.8.0/dist/es-module-shims.js"></script>
	<script type="importmap">
		{
			"imports": {
				"three": "https://unpkg.com/three@0.156.0/build/three.module.js",
				"three/addons/": "https://unpkg.com/three@0.156.0/examples/jsm/"
			}
		}
	</script>
</head>
<body class="bg-black">
    
<?php include '../../includes/nav.php'; ?>

    <!--  main body of the page begins -->          
    <div class="container-fluid">
        <div class="fixed-bottom start-0 w-100 p0 bg-black border-top border-primary z-1" style="height:25px"></div>     
        <div class="row">
            <!-- shuffled classes around so they properly show mobile version -->
            <div class="col-lg-3 col-md-6 mobile-d overflow-y-auto overflow-x-none m-0" style="max-height: 92vh;">
                 <div id="mobileD" class="container-fluid flex-grow-1 p-0">
                   <div class="text-center text-uppercase text-primary">
                        <a class="title" onclick="text_toggle()">
                            <?php echo $title; ?>
                        </a>
                    </div>
                    <a id="loadingProgress" class="text-center text-primary char-change" style="display: block; margin-bottom: 20px;">
    <?php echo $misc["7"]["element_$language"]; ?>
    </a>
                    <div id="mobile-d-content">
                    <p class="text-primary">
<?php echo $description; ?>
                    </p>
                </div>
            </div>
                
            </div>

            <div class="col-lg-9 col-md-6 mobile-d-content order-first order-md-last overflow-y-auto">
                <div class="row d-flex overflow-y-auto p-2" style="max-height: 92vh;">  
                    <canvas id="container3D" class="border-bottom border-end border-3 h-80 w-100" style="width: 80vw; height: 80vh;"></canvas>
                <script type="module" src="<?php echo $title; ?>.js"></script>
                </div>
            </div>       
        </div>
     </div>

<!-- language junk -->

<?php include "../../includes/lang-script.php"; ?>

</body>
</html>






