<?php include 'includes/header.php'; ?>
<div class="container">
  <section>
    <h2>Photo Gallery</h2>
    <div class="gallery">
      <?php
      $imageDir = 'assets/images/';
      $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

      if (count($images) > 0) {
        foreach ($images as $image) {
          echo '<div class="gallery-item">';
          echo '<img src="' . $image . '" alt="Band Photo">';
          echo '</div>';
        }
      } else {
        echo '<p>No photos found.</p>';
      }
      ?>
    </div>
  </section>
    </div>
<?php include 'includes/footer.php'; ?>
