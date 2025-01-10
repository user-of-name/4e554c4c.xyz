<!-- db query stuff -->

<?php

include "../../includes/lang-top.php";
//references the connection file
require_once "../../includes/dbh.inc.php";
include "../../includes/db_nav.php";

// images
$query_project_images = "SELECT * FROM images WHERE project_id = 11 and img_id = 71 ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
    foreach ($project_images as $row){
        echo $row["image_title_$language"];
        }
    ?>
    </title>

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
<body class="p-2 bg-black">
    
<?php include '../../includes/nav.php'; ?>

    <!--  main body of the page begins -->

                    <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<ls>";
                        foreach ($project_images as $row){
                                echo $row["image_title_$language"];
                        }
                        echo "</ls>";
                        ?>
                    </h6>



            <canvas id="container3D" class="border-bottom border-end border-3 h-80 w-100" style="width: 80vw; height: 80vh;"></canvas>
                <script type="module" src="wingwire_3D.js"></script>
            

            
    

<!-- language junk -->

<?php include "../../includes/lang-script.php"; ?>

</body>
</html>