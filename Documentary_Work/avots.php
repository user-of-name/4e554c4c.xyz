<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 13;
include "../includes/content_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php include "../includes/proj_head.php"; ?>

<body class="p-2 bg-black">
    
<?php include '../includes/nav.php'; ?>

<div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-md-6 mobile-d overflow-y-auto" style="max-height: 90vh;">
        <div class="container-fluid flex-grow-1 p-0">
                   <div class="text-center text-uppercase text-primary">
                        <a class="title" onclick="text_toggle()">
                        <?php echo $content["0"]["title_$language"]; ?>
                        </a>
                    </div>
                    <div id="mobile-d-content" class="container-fluid">
                    <p class="text-primary" id="mobileD">
                    <?php echo $content["0"]["descr_$language"]; ?>
                        </p>
                        <?php include "../includes/contributors_link.php"; ?>
                </div>
                </div>
                
            </div>

            <div class="col-lg-9 col-md-6 mobile-d-content order-first order-md-last overflow-y-auto p-2" style="max-height: 90vh;">
            <div class="row d-flex overflow-y-auto p-2">    
<!-- images start here -->

<?php include "../includes/get_project_images.php";?>
<div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;">
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/6N5iLOAcSmA?si=PZPzVAZT44SMc1qs" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; autoplay;picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <figcaption class="figure-caption"> homo_novus.mp4<br>2025-02-1</figcaption>
                    <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative;">
                    <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/qqc6rEE6NaI?si=iHLuKzUoDOS9Vuq7" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; autoplay;picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <figcaption class="figure-caption"> lesser_used_languages.mp4<br>2025-02-2</figcaption>
</div>
                    <div class="m-5">

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