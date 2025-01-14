<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 9;
include "../includes/content_db.php";
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
            <div class="col-md-4 d-flex flex-column border-top border-end border-bottom" style="height: 90vh;">
               <div class="container-fluid flex-grow-1 p-0">
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

            <div class="col-md-8 border-top border-start border-bottom overflow-y-auto p-2" style="max-height: 90vh;">
                <div class="row">           
                <?php include "../includes/get_project_images.php";?>
                </div>
            </div>            
        </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<?php include "../includes/image_carousel_modal.php"; ?>
<!-- language junk -->
<?php include "../includes/lang-script.php"; ?>

</body>
</html>