<?php
if (count($project_collaborators) > 0) {
  echo '<div class="container-fluid ps-0 pb-3">
  <div class="text-primary" onclick="contributors_toggle()">';
  echo $misc["5"]["element_$language"];
  echo ':<br></div>
  <div id="contributorsList">';
  foreach ($project_collaborators as $row) {
    echo '<div class="text-primary">',
    $row["role_$language"],
    ': <a href="',
    $row["link"],
    '">> ',
    $row["artist_name"],
    '</a><br></div>';
  }
  echo '</div>
  </div>';
}
