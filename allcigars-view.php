<h1 class="mt-4"> All Cigars</h1>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    while ($cigar = $cigars->fetch_assoc()) {
      $imagePath = "images/" . $inventory['cigar_id'] . ".png";
    ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="Cigar Image">
          <div class="card-body">
            <h5 class="card-title mb-3"><?php echo $cigar['model']; ?></h5>
            <p class="brand mb-2"><?php echo 'Brand: ' . $cigar['brand']; ?></p>
            <p class="size"><?php echo 'Size: ' . $cigar['size']; ?></p>
            <!-- Button can be added here -->
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
