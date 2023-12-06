<?php
include "view-header.php";
?>

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
            <!-- Button can be added here -->
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

<?php
include "view-footer.php";
?>
