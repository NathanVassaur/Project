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
            <p class="card-text"><?php echo $cigar['size'] . ' - ' . $cigar['brand']; ?></p>
            <!-- Button can be added here -->
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
