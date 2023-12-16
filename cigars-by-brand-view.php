<?php include "view-header.php"; ?>

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

      $imagePath = "https://raw.githubusercontent.com/NathanVassaur/Project/main/images/" . $cigar['cigar_id'] . ".png";
    ?>
      <div class="col">
        <div class="card mb-4 h-100">
          <?php if (imageExists($imagePath)) { ?>
            <img src="<?php echo $imagePath; ?>" class="card-img-top mx-auto d-block" alt="Cigar Image" style="max-width: 150px; height: 150px;">
          <?php } else { ?>
            <div class="text-center" style="height: 150px;">
              <p>No Image Available</p>
            </div>
          <?php } ?>
          <div class="card-body" style="height: 150px;">
            <h5 class="card-title mb-3"><?php echo $cigar['model']; ?></h5>
            <p class="size"><?php echo 'Size: ' . $cigar['size'] . ' | Price: $' . $cigar['price'] . '.00'; ?></p>
            
            <div class="d-flex align-items-center">
              <form method="post" action="" class="me-3">
                <div class="form-floating">
                  <select class="form-select" name="quantity" id="quantitySelect" aria-label="Quantity">
                    <?php
                    // Populate options with numbers up to the available quantity
                    for ($i = 1; $i <= $cigar['available']; $i++) {
                      echo "<option value='$i'>$i</option>";
                    }
                    ?>
                  </select>
                  <label for="quantitySelect" style="width: auto;">Select Quantity</label>
                </div>
                <input type="hidden" name="cigarId" value="<?php echo $cigar['cigar_id']; ?>">
                <button type="submit" class="btn btn-primary mt-2" name="actionType" value="AddToOrder">Add to Order</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php
    }

    function imageExists($url) {
      if (!empty($url)) {
        $headers = get_headers($url);
        return stripos($headers[0], "200 OK") ? true : false;
      } else {
        return false;
      }
    }
    ?>
  </div>
</div>

<?php include "view-footer.php"; ?>
