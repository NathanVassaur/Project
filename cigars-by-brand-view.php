<h1 class="mt-4">Cigars by Brand</h1>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    $currentBrand = null;

    while ($cigar = $cigarsByBrand->fetch_assoc()) {
      $brand = $cigar['brand'];

      
      if ($brand != $currentBrand) {
        echo "<h2 class='mt-3 col-md-12'>$brand</h2>";
        $currentBrand = $brand;
      }
    ?>
      <div class="col">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title mb-3"><?php echo $cigar['model']; ?></h5>
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
