<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
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
        <div class="fixed-bottom start-0 w-100 p0 bg-black border-top border-primary z-1" style="height:25px"></div>
        <div class="row">
            <!-- shuffled classes around so they properly show mobile version -->
            <div class="col-lg-3 col-md-6 mobile-d overflow-y-auto" style="max-height: 92vh;">
                 <div id="mobileD"  class="container-fluid">
                   <div class="text-center text-uppercase text-primary">
                       <h6 onclick="text_toggle()">
                       <?php echo $content["0"]["title_$language"]; ?>
                       </h6>
                    </div>
                    <div id="mobile-d-content" class="container-fluid">
                    <p class="text-primary">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                        <?php include "../includes/contributors_link.php"; ?>
                </div>
            </div>
            </div>

            <div class="col-lg-9 col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 92vh; max-width: 100%;">
            <div class="row d-flex overflow-y-auto p-2"> 
                    <!-- added bootstrap attributes to trigger modal -->
                    <!-- data-bs-slide-to="0" handles on which slide carousel opens, currently not working as it needs to be attached to specific trigger -->             
                <?php include "../includes/get_img_making_images.php";?>
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