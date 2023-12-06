<h1 class="mt-4">Cigars by Brand</h1>
<div class="container text-center">
  <?php
  $currentBrand = null;

  while ($cigar = $cigarsByBrand->fetch_assoc()) {
    $brand = $cigar['brand'];

    // Display brand header if it's a new brand
    if ($brand != $currentBrand) {
      echo "<h2 class='mt-3'>$brand</h2>";
      $currentBrand = $brand;
    }
  ?>
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title mb-3"><?php echo $cigar['model']; ?></h5>
        <p class="size"><?php echo 'Size: ' . $cigar['size']; ?></p>
        <!-- Button can be added here -->
      </div>
    </div>
  <?php
  }
  ?>
</div>

