<h1>Cigars</h1>
<div class="container text-center">
  <div class="row">
    <?php
    while ($cigar = $cigars->fetch_assoc()) {
    ?>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <!-- Image can be added here -->
          <div class="card-body">
            <h5 class="card-title"><?php echo $cigar['model']; ?></h5>
            <p class="brand"><?php echo 'Brand: ' . $cigar['brand']; ?></p>
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
