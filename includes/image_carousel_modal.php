<div class="modal" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-fullscreen">
<div class="modal-content modal-carousel">
<div class="modal-body vh-100 d-flex align-items-center justify-content-center">
  <!-- Carousel -->
  <div id="imageCarousel" class="carousel slide" data-bs-ride="false" data-bs-touch="true">
    <div class="carousel-inner w-100 h-100">
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
        '" class="d-block mx-auto img-fluid modal-img" alt="Image ',
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

<script>
document.addEventListener('DOMContentLoaded', function () {
  const carouselModal = document.getElementById('carouselModal');
  const imageCarousel = document.getElementById('imageCarousel');
  let carouselInstance = bootstrap.Carousel.getOrCreateInstance(imageCarousel);

  document.querySelectorAll('[data-bs-target="#carouselModal"][data-bs-slide-to]').forEach(function (img) {
    img.addEventListener('click', function () {
      const slideTo = parseInt(img.getAttribute('data-bs-slide-to'), 10);
      setTimeout(function () {
        carouselInstance.to(slideTo);
      }, 300); // Wait for modal animation
    });
  });
});
</script>