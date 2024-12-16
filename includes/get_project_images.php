<?php

foreach ($project_images as $row) {

echo '<div id="" class="h-100"> <img src="/images/';

    echo $row["file_name"];

echo '" class="border-bottom border-end border-3 img-fluid" style="max-height:80vh;" alt="..."><figcaption class="figure-caption"> ';

    echo $row["image_title_$language"];

echo '<br>';

    echo $row["date"];

echo '<br>';

    echo $row["location"];

echo '</figcaption></div>';

}

 ?>