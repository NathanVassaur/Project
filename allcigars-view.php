<h1 class="mt-4"> All Cigars</h1>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    while ($cigar = $cigars->fetch_assoc()) {
      $imagePath = "https://github.com/NathanVassaur/Project/blob/main/images/" . $cigar['cigar_id'] . ".png?raw=true";
    ?>
      <div class="col">
        <div class="card mb-4">
          <img src="<?php echo $imagePath; ?>" class="card-img-top mx-auto d-block" alt="Cigar Image" style="max-width: 150px;">
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

