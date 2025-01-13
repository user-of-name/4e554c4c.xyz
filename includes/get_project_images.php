<?php 
$thumbnail_nr = 0;
foreach ($project_images as $row) {

    echo '<div id="" class="h-100"> <img src="../images-small/',
    $row["file_name"],
    '" class="img_styles img-fluid" style="" alt="Thumbnail ',
    $thumbnail_nr,
    '" data-bs-toggle="modal" data-bs-target="#carouselModal" data-bs-slide-to="',
    $thumbnail_nr,
    '" alt="..."><figcaption class="figure-caption"> ',
    $row["image_title_$language"],
    '<br>',
    $row["date"],
    '<br>',
    $row["location"],
    '</figcaption></div>';
    $thumbnail_nr++;
}

 ?>