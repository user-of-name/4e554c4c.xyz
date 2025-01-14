<div class="container-fluid ps-0 pb-3">
  <div class="text-primary"><?php echo $misc["5"]["element_$language"]; ?>:<br></div>
  <?php 
  foreach ($project_collaborators as $row){
    echo '<div class="text-primary">',
    $row["role_$language"],
    ': <a href="',
    $row["link"],
    '">> ',
    $row["artist_name"],
    '</a><br></div>';
  }
  ?>
</div>