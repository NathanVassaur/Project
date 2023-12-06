<h1 class="mt-4">Cigars by Size</h1>
<div class="container text-center">
  <div class="row mt-3">
    <?php
    while ($sizeGroup = $cigarsBySize->fetch_assoc()) {
      $size = $sizeGroup['size'];
      $sizeCount = $sizeGroup['size_count'];

      echo "<h2 class='mt-3 col-md-12'>$size (Count: $sizeCount)</h2>";

      
      $cigarsForSizeQuery = "SELECT cigar_id, brand, model FROM `Cigars` WHERE size = ? ORDER BY brand";
      $cigarsForSizeStmt = $conn->prepare($cigarsForSizeQuery);
      $cigarsForSizeStmt->bind_param("s", $size);
      $cigarsForSizeStmt->execute();
      $cigarsForSizeResult = $cigarsForSizeStmt->get_result();

      while ($cigar = $cigarsForSizeResult->fetch_assoc()) {
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
            <div class="card-body">
              <h5 class="card-title mb-3"><?php echo $cigar['model']; ?></h5>
              <p class="brand mb-2"><?php echo 'Brand: ' . $cigar['brand']; ?></p>
              
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</div>

<?php
function imageExists($url) {
  $headers = get_headers($url);
  return stripos($headers[0], "200 OK") ? true : false;
}
?>
