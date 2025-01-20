<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 6;
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
                <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;"><iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/6H08hUQybzI?si=nxte96I4r35eIyvQ" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <figcaption class="figure-caption"> rats_on_the_run.mp4 <br> Canon 80D<br>2024-05-19</figcaption>             
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