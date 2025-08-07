<!-- db query stuff -->

<?php
//language stuff
include "../includes/lang-top.php";
//references the connection file
require_once "../includes/dbh.inc.php";
//navigation database
include "../includes/db_nav.php";
//project id and content
$project_id = 8;
include "../includes/content_db.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php include "../includes/proj_head.php"; ?>

<body class="bg-black">
    
<?php include '../includes/nav.php'; ?>

<div class="container-fluid">
        <div class="row">
        <div class="fixed-bottom start-0 w-100 p0 bg-black border-top border-primary z-1" style="height:25px"></div>
        <div class="col-lg-3 col-md-6 mobile-d overflow-y-auto overflow-x-none" style="max-height: 92vh;">
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

            <div class="col-lg-9 col-md-6 mobile-d-content order-first order-md-last overflow-y-auto" style="max-height: 92vh;">
            <div class="row d-flex overflow-y-auto p-2">
                    <div class="border-bottom border-end border-3" style="padding:56.25% 0 0 1rem; position:relative; z-index:0;"><iframe src="https://player.vimeo.com/video/952301381?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Luminous Daisies"></iframe>
                    </div>
                    <figcaption class="figure-caption"> luminous_dasies.mp4 <br> Canon C300 Mkii, 3:4 <br>2024-05-19</figcaption>
                    <script src="https://player.vimeo.com/api/player.js"></script>   
<!-- images start here -->

<?php include "../includes/get_project_images.php";?>
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