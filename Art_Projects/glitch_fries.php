<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 11;
include "../includes/content_db.php";
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $content["0"]["title_$language"]; ?>
    </title>

    <link rel="stylesheet" href="../assets/css/style.css">

<script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="../main.js"> </script>
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
    
<?php include '../includes/nav.php'; ?>

    <!--  main body of the page begins -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <div class="text-center text-uppercase text-primary">
                        <h6>
                        <?php echo $content["0"]["title_$language"]; ?>
                        </h6>
                    </div>
                    <div class="container-fluid"></div>
                    <p class="text-primary">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                </div>
                <?php include "../includes/contributors_link.php"; ?>
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">                
                <?php

foreach ($project_images as $row) {

    echo '<div id="" class="h-100"><a href="',
    $row["href"],
    '"><img src="../images-small/',
    $row["file_name"],
    '" class="img_styles img-fluid" style="" alt="..."></a><figcaption class="figure-caption"> ',
    $row["image_title_$language"],
    '<br>',
    $row["date"],
    '<br>',
    $row["location"],
    '</figcaption></div>';

}

 ?>

<!-- language junk -->

<?php include "../includes/lang-script.php"; ?>

</body>
</html>