<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 1032;
include "../includes/img_making_content_db.php";
?>

<!-- html begins -->


<!DOCTYPE html>
<html lang="en">

<?php include "../includes/proj_head.php"; ?>

<body class="p-2 bg-black">
    
<?php include '../includes/nav.php'; ?>

    <!--  main body of the page begins -->
    <div class="container-fluid">
        <div class="row">
            <!-- shuffled classes around so they properly show mobile version -->
            <div class="col-lg-4 col-md-6 mobile-d border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
                 <div id="mobileD" onclick="myFunction()" class="container-fluid">
                   <div class="text-center text-uppercase text-primary">
                       <h6>
                       <?php echo $content["0"]["title_$language"]; ?>
                       </h6>
                    </div>
                    <div class="mobile-d-content" class="container-fluid"></div>
                    <p class="text-primary">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                </div>
                <?php include "../includes/contributors_link.php"; ?>
            </div>

            <div class="col-lg-8 col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">  
                    <!-- added bootstrap attributes to trigger modal -->
                    <!-- data-bs-slide-to="0" handles on which slide carousel opens, currently not working as it needs to be attached to specific trigger -->             
                <?php include "../includes/get_project_images.php";?>
                </div>
            </div>            
        </div>
            </div>
        </div>
    </div>
<!-- modal trial -->
<!-- Modal -->
<?php include "../includes/image_carousel_modal.php"; ?>
<!-- language junk -->
<?php include "../includes/lang-script.php"; ?>
</body>
</html>