<div class="modal" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-fullscreen p-md-5">
<div class="modal-content modal-carousel">
<div class="modal-body">
  <!-- Carousel -->
    <!-- Could database handle fetching right image?? 
        also, would it make sense to have modal in a separate file like nav bar?
    -->
  <div id="imageCarousel" class="carousel slide" data-bs-ride="false" data-bs-touch="true">
    <div class="carousel-inner">
      <?php
      $img_nr = 0;
      foreach ($project_images as $row) {
        if ($row["is3D"] == 0) {
          echo '<div class="carousel-item';
        if ($img_nr == 0) {
          echo ' active';
        }; 
        echo '"><img src="/images/',
        $row["file_name"],
        '" class="d-block img-fluid" alt="Image',
        $img_nr,
        '"></div>';
        $img_nr++;
        };
      };
      ?>
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
    </button>
  </div>
</div>

<div class="modal-footer d-flex justify-content-between">
    <div class="d-flex justify-content-start">
    <button class="carousel-control-prev control-arrows" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">[ <-- ]</button>
    <button class="carousel-control-next control-arrows" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">[ --> ]</button>
    </div>
      <a type="button" class="close-btn" data-bs-dismiss="modal">[ <?php echo $misc["4"]["element_$language"]; ?> ]</a>
    </div>
</div>
</div>
</div>