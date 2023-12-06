<h1 class="mt-4"> All Cigars</h1>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    while ($cigar = $cigars->fetch_assoc()) {
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
            <p class="size"><?php echo 'Size: ' . $cigar['size']; ?></p>
            <p class="size"><?php echo 'In Stock: ' . $cigar['available'] . ' Price: $' . $cigar['price'] . '.00';?></p>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary">1</button>
              <button type="button" class="btn btn-primary">2</button>
            
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                </ul>
              </div>
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
