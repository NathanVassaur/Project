<?php include "view-header.php"; ?>

<h1 class="mt-4">Cigars by Size</h1>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    $currentSize = null;

    while ($cigar = $cigarsBySize->fetch_assoc()) {
      $size = $cigar['size'];

      // Display size header if it's a new size
      if ($size != $currentSize) {
        echo "<h2 class='mt-3 col-md-12'>$size</h2>";
        $currentSize = $size;
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
            <p class="brand mb-2"><?php echo 'Brand: ' . $cigar['brand']; ?></p>
            
            
            <div class="d-flex justify-content-between align-items-center">
              <div class="form-floating" style="width: 120px;">
                <select class="form-select" name="quantity" id="quantitySelect" aria-label="Quantity">
                  <?php
                  
                  for ($i = 1; $i <= $cigar['available']; $i++) {
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
                <label for="quantitySelect">Qty</label>
              </div>
              <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
              </button>
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
